<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/AdminBase.php');

class Menu extends AdminBase {

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

		$this->load->model('M_Menu');
		$this->load->model('M_Jenis');

		role_auth();
	}
	
	public function index()
	{

		// data set from database
		$menu = $this->M_Menu->listMenu();

		// send data to view
		$this->smarty->assign('daftarMenu', $menu);
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		// set template content
		$this->smarty->assign('template_content', 'admin/menu/indexMenu.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function addMenu()
	{
		// data set from database
		$jenis = $this->M_Jenis->getJenis();

		// send data to view
		$this->smarty->assign('jenisMenu', $jenis);
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		// set template content
		$this->smarty->assign('template_content', 'admin/menu/addMenu.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function processAdd()
	{
		// Initialize image variable
		$img = null;

		// Check if 'imgMenu' index exists in $_FILES
		if (!empty($_FILES['imgMenu']['name'])) {
			// Set image properties
			$namaFile = str_replace(" ", "", $_POST['namaMenu']);
			$ext = pathinfo($_FILES['imgMenu']['name'], PATHINFO_EXTENSION);
			$upload_path = './assets/img/menu/';

			// Create directory if not exists
			// if (!is_dir($upload_path)) {
			// 	mkdir($upload_path, 0777, true);
			// } else {
			// 	chmod($upload_path, 0777);
			// }

			// Set image configuration
			$config = array(
				'upload_path'   => $upload_path,
				'allowed_types' => 'jpeg|jpg|png',
				'file_name'     => 'Foto' . $namaFile . '.' . $ext,
			);

			// Assign image file name
			$img = $config['file_name'];
		}

		// Initialize discount variable
		$diskon = '';
		if ($_POST['diskon']) {
			$price = str_replace(".", "", $_POST['harga']);
			$diskon = (float)$price * ((float)$_POST['diskon'] / 100);
		} else {
			$diskon = NULL;
		}

		// Data for database insertion
		$data = array(
			'jenis_id'  => $_POST['jenis'],
			'menu'      => $_POST['namaMenu'],
			'deskripsi' => $_POST['deskripsi'],
			'harga'     => str_replace(".", "", $_POST['harga']),
			'diskon'	=> $diskon,
			'stok'      => $_POST['stok'],
			'img'       => $img,
			'createdt'  => date('Y-m-d H:i:s'),
		);

		// Load upload library with configuration
		if (!empty($_FILES['imgMenu']['name'])) {
			$this->load->library('upload', $config);

			// Check if image file upload is successful
			if ($this->upload->do_upload('imgMenu')) {
				$upload_data = $this->upload->data();
				chmod($upload_data['full_path'], 0777);

				// Insert data into database
				if ($this->M_Menu->inMenu($data)) {
					$this->session->set_flashdata('notifikasi', array('message' => 'Berhasil ditambahkan!', 'color' => 'green'));
					redirect(site_url('admin/master/menu'));
				} else {
					// Delete uploaded image file if database insertion fails
					unlink('./assets/img/menu/' . $img);
					$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
					redirect(site_url('admin/master/menu/addMenu'));
				}
			} else {
				$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
				redirect(site_url('admin/master/menu/addMenu'));
			}
		} else {
			// Insert data into database if no image is uploaded
			if ($this->M_Menu->inMenu($data)) {
				$this->session->set_flashdata('notifikasi', array('message' => 'Berhasil ditambahkan!', 'color' => 'green'));
				redirect(site_url('admin/master/menu'));
			} else {
				$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
				redirect(site_url('admin/master/menu/addMenu'));
			}
		}
	}

	///////////////////////////////////////////////////////////////////////

	public function editMenu()
	{
		// data set from database
		$jenis = $this->M_Jenis->getJenis();
		$iniMenu = $this->M_Menu->getMenubyID($_GET['id']);

		// send data to view
		$this->smarty->assign('jenisMenu', $jenis);
		$this->smarty->assign('menu', $iniMenu[0]);
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		// set template content
		$this->smarty->assign('template_content', 'admin/menu/editMenu.html');
		
		// output
		parent::display();

	}

	///////////////////////////////////////////////////////////////////////

	public function processEdit()
	{
		// data set from database
		$menu = $this->M_Menu->getMenubyID($_GET['id']);

		// Initialize image variable
		if ($menu[0]['img'] != NULL) {
			$imgOld = $menu[0]['img'];
			$img = $menu[0]['img'];
		}
		
		// Check if 'imgMenu' index exists in $_FILES
		if (!empty($_FILES['imgMenu']['name'])) {
			// Set image properties
			$namaFile = str_replace(" ", "", $_POST['namaMenu']);
			$ext = pathinfo($_FILES['imgMenu']['name'], PATHINFO_EXTENSION);
			$upload_path = './assets/img/menu/';

			// Create directory if not exists
			// if (!is_dir($upload_path)) {
			// 	mkdir($upload_path, 0777);
			// } else {
			// 	chmod($upload_path, 0777);
			// }

			// Set image configuration
			$config = array(
				'upload_path'   => $upload_path,
				'allowed_types' => 'jpeg|jpg|png',
				'file_name'     => 'Foto' . $namaFile . '.' . $ext,
			);

			// Assign image file name
			$img = $config['file_name'];
		}

		// Initialize discount variable
		$diskon = '';
		if ($_POST['diskon']) {

			$price = str_replace(".", "", $_POST['harga']);
			$diskon = (float)$price * ((float)$_POST['diskon'] / 100);

		} else {
			
			$diskon = NULL;

		}

		// Data for database insertion
		$data = array(
			'jenis_id'  => $_POST['jenis'],
			'menu'      => $_POST['namaMenu'],
			'deskripsi' => $_POST['deskripsi'],
			'harga'     => str_replace(".", "", $_POST['harga']),
			'diskon'	=> $diskon,
			'stok'      => $_POST['stok'],
			'img'       => $img,
			'updatedt'  => date('Y-m-d H:i:s'),
		);

		// Load upload library with configuration
		if (!empty($_FILES['imgMenu']['name'])) {
			$this->load->library('upload', $config);

			// Check if image file upload is successful
			if ($this->upload->do_upload('imgMenu')) {

				unlink('./assets/img/menu/' . $imgOld);

				$upload_data = $this->upload->data();
				chmod($upload_data['full_path'], 0777);

				// Insert data into database
				if ($this->M_Menu->setMenu($data, $_GET['id'])) {
					$this->session->set_flashdata('notifikasi', array('message' => 'Edit berhasil!', 'color' => 'green'));
					redirect(site_url('admin/master/menu'));
				} else {
					// Delete uploaded image file if database insertion fails
					unlink('./assets/img/menu/' . $img);

					$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
					redirect(site_url('admin/master/menu/editMenu?id=' . $_GET['id']));
				}
			} else {
				// Capture and display the upload error
				// $upload_error = $this->upload->display_errors();

				$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
				redirect(site_url('admin/master/menu/editMenu?id=' . $_GET['id']));
			}
		} else {
			// Insert data into database if no image is uploaded
			if ($this->M_Menu->setMenu($data, $_GET['id'])) {
				$this->session->set_flashdata('notifikasi', array('message' => 'Edit berhasil!', 'color' => 'green'));
				redirect(site_url('admin/master/menu'));
			} else {
				$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
				redirect(site_url('admin/master/menu/editMenu?id=' . $_GET['id']));
			}
		}
	}

	///////////////////////////////////////////////////////////////////////

	public function delete()
	{
		$idMenu = $_GET['id'];
		$menu = $this->M_Menu->getMenubyID($_GET['id']);
		
		// Delete uploaded image file
		if ($menu[0]['img'] != NULL) {

			unlink('./assets/img/menu/' . $menu[0]['img']);

			if ($this->M_Menu->delMenu($idMenu)) {

				$this->session->set_flashdata('notifikasi', array('message' => 'Data terhapus!', 'color' => 'green'));
				redirect(site_url('admin/master/menu'));
	
			} else {
	
				$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
				redirect(site_url('admin/master/jenis'));
				
			}

		} else {
			
			if ($this->M_Menu->delMenu($idMenu)) {

				$this->session->set_flashdata('notifikasi', array('message' => 'Data terhapus!', 'color' => 'green'));
				redirect(site_url('admin/master/menu'));
	
			} else {
	
				$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
				redirect(site_url('admin/master/jenis'));
				
			}

		}

	}

	// echo"<pre>";
	// print_r($data);
	// exit;
}
