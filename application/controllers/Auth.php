<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct() {
		parent::__construct();

		$this->smarty->assign('baseurl', base_url());
		$this->load->model('M_User');

	}

	public function index()
	{

		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		$this->smarty->display('auth.html');
		
	}

	public function addAdmin()
	{

		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		$this->smarty->display('register.html');
		
	}

	public function register()
	{

		// array data to database
		$data = array(
			'username'	=>	$_POST['uname'],
			'nama'		=>	$_POST['nama'],
			'password'	=>	password_hash($_POST['password1'], PASSWORD_DEFAULT),
		);

		// cek username
		$uname = $this->M_User->cekUName($_POST['uname']);

		if ($_POST['password1'] != $_POST['password2']) {
			
			$this->session->set_flashdata('notifikasi', array('message' => 'Password salah!', 'color' => 'red'));
			redirect(site_url('auth/addAdmin'));
			
		} elseif ($uname) {
			
			$this->session->set_flashdata('notifikasi', array('message' => 'Username sudah digunakan!', 'color' => 'red'));
			redirect(site_url('auth/addAdmin'));

		} else {
			// sent data to database
			if ($this->M_User->inUser($data)) {
				
				$this->session->set_flashdata('notifikasi', array('message' => 'Akun berhasil dibuat!', 'color' => 'green'));
				redirect(site_url('auth'));
	
			} else {
				
				$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
				redirect(site_url('auth/addAdmin'));
	
			}
		}
	}

	public function logging_in()
	{
		// Load form validation library
		$this->load->library('form_validation');

		// Set validation rules
		$this->form_validation->set_rules('uname', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			// Form validation failed, show login form with errors
			$this->smarty->display('auth.html'); // Replace 'login_form' with your login form view
		} else {
			// Get input data
			$uname = $this->input->post('uname');
			$password = $this->input->post('password');

			// Fetch user data from database
			$user = $this->db->get_where('md_users', ['username' => $uname])->row_array();

			if ($user) {
				// Verify password
				if (password_verify($password, $user['password'])) {
					// Set user session data
					$session_data = [
						'username' => $user['username'],
						'nama' => $user['nama']
					];
					$this->session->set_userdata($session_data);

					// Redirect to dashboard
					$this->session->set_flashdata('notifikasi', array('message' => 'Berhasil login!', 'color' => 'green'));
					redirect('admin/transaksi'); // Replace 'admin/dashboard' with your dashboard route
				} else {
					// Incorrect password
					$this->session->set_flashdata('notifikasi', ['message' => 'Password salah!', 'color' => 'red']);
					redirect('auth');
				}
			} else {
				// User not found
				$this->session->set_flashdata('notifikasi', ['message' => 'Username salah!', 'color' => 'red']);
				redirect('auth');
			}
		}
	}

	public function logging_out()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');

		redirect(site_url('auth'));
	}
}
