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
	}
	
	public function index()
	{

		// data set from database
		$jenis = $this->M_Jenis->getJenis();

		// send data to view
		$this->smarty->assign('jenisMenu', $jenis);

		// set template content
		$this->smarty->assign('template_content', 'admin/jenis/indexJenis.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function addJenis()
	{
		// set template content
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
			
			redirect(site_url('admin/master/jenis'));

		} else {
			
			echo 'Tambah Jenis Menu gagal!!';

		}
		
	}

	///////////////////////////////////////////////////////////////////////

	public function editJenis()
	{

		$jenis = $this->M_Jenis->getJenisbyID($_GET['id']);

		// send data set from database
		$this->smarty->assign('jenisMenu', $jenis[0]);

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
			
			redirect(site_url('admin/master/jenis'));

		} else {
			
			echo 'Edit Jenis Menu gagal!!';

		}
		
	}

	///////////////////////////////////////////////////////////////////////

	public function delete()
	{
		$idJenis = $_GET['id'];

		if ($this->M_Jenis->delJenis($idJenis)) {

			redirect(site_url('admin/master/jenis'));

		} else {

			echo 'Hapus data Jenis Menu gagal!!';
			
		}
		
	}
}
