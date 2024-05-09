<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/AdminBase.php');

class Jenis extends AdminBase {

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

		$this->load->model('M_Jenis');
		role_auth();
	}
	
	public function index()
	{

		// data set from database
		$jenis = $this->M_Jenis->getJenis();

		// send data to view
		$this->smarty->assign('jenisMenu', $jenis);
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		// set template content
		$this->smarty->assign('template_content', 'admin/jenis/indexJenis.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function addJenis()
	{
		// set template content
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));
		$this->smarty->assign('template_content', 'admin/jenis/addJenis.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function processAdd()
	{

		// array data to database
		$data = array(
			'jenis'		=>	$_POST['namaJenis'],
			'createdt'	=>	date('Y-m-d H:i:s'),
		);

		// sent data to database
		if ($this->M_Jenis->inJenis($data)) {
			
			$this->session->set_flashdata('notifikasi', array('message' => 'Berhasil ditambahkan!', 'color' => 'green'));
			redirect(site_url('admin/master/jenis'));

		} else {
			
			$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
			redirect(site_url('admin/master/jenis/addJenis'));

		}
		
	}

	///////////////////////////////////////////////////////////////////////

	public function editJenis()
	{

		$jenis = $this->M_Jenis->getJenisbyID($_GET['id']);

		// send data set from database
		$this->smarty->assign('jenisMenu', $jenis[0]);
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		// set template content
		$this->smarty->assign('template_content', 'admin/jenis/editJenis.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function processEdit()
	{
		$idJenis = $_POST['idJenis'];

		// array data to database
		$data = array(
			'jenis'		=>	$_POST['namaJenis'],
			// 'updateid'	=>	'',
			'updatedt'	=>	date('Y-m-d H:i:s'),
		);

		// sent data to database
		if ($this->M_Jenis->setJenis($data, $idJenis)) {
			
			$this->session->set_flashdata('notifikasi', array('message' => 'Edit berhasil!', 'color' => 'green'));
			redirect(site_url('admin/master/jenis'));

		} else {
			
			$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
			redirect(site_url('admin/master/jenis/editJenis'));

		}
		
	}

	///////////////////////////////////////////////////////////////////////

	public function delete()
	{
		$idJenis = $_GET['id'];

		if ($this->M_Jenis->delJenis($idJenis)) {

			$this->session->set_flashdata('notifikasi', array('message' => 'Data terhapus!', 'color' => 'green'));
			redirect(site_url('admin/master/jenis'));

		} else {

			$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
			redirect(site_url('admin/master/jenis'));
			
		}
		
	}
}
