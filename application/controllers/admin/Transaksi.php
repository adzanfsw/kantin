<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/AdminBase.php');

class Transaksi extends AdminBase {

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

		$this->load->model('M_Order');
		role_auth();
	}
	
	public function index()
	{
		// Get the date parameter from the URL
		$date = $this->input->get('date');

		// If date parameter is empty, use today's date
		if(empty($date)) {
			$date = date('Y-m-d');
		}

		$transaksi = $this->M_Order->laporanHarian($date);

		// echo "<pre>";
		// print_r($transaksi);
		// exit;

		// set template content
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));
		$this->smarty->assign('trans', $transaksi);
		$this->smarty->assign('template_content', 'admin/transaksi.html');
		
		// output
		parent::display();
	}
}
