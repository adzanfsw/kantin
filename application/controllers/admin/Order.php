<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/AdminBase.php');

class Order extends AdminBase {

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
	}
	
	public function in()
	{
		// data set from database
		$getOrder = $this->M_Order->getOrderIn();

		// send data to view
		$this->smarty->assign('order', $getOrder);
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		// set template content
		$this->smarty->assign('template_content', 'admin/order/in.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function takeOrder()
	{
		// data set from database
		$getOrder = $this->M_Order->getOrderbyID($_GET['id']);
		$listOrder = $this->M_Order->listOrderbyID($_GET['id']);

		// 	echo"<pre>";
		// print_r($listOrder);
		// exit;

		// send data to view
		$this->smarty->assign('order', $getOrder[0]);
		$this->smarty->assign('listItem', $listOrder);
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		// set template content
		$this->smarty->assign('template_content', 'admin/order/ambilOrder.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function setDiproses()
	{
		if ($this->M_Order->setDiproses($_GET['id'])) {
			
			redirect(site_url('admin/order/takeOrder?id=' . $_GET['id']));

		} else {

			$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
			redirect(site_url('admin/order/in'));

		}
	}

	///////////////////////////////////////////////////////////////////////

	public function checkOrder()
	{

		// data set from database
		$getOrder = $this->M_Order->getOrderbyID($_GET['id']);
		$listOrder = $this->M_Order->listOrderbyID($_GET['id']);

		// 	echo"<pre>";
		// print_r($listOrder);
		// exit;

		// send data to view
		$this->smarty->assign('order', $getOrder[0]);
		$this->smarty->assign('listItem', $listOrder);

		// set template content
		$this->smarty->assign('template_content', 'admin/order/cekOrder.html');
		
		// output
		parent::display();

	}

	///////////////////////////////////////////////////////////////////////

	public function success()
	{
		// data set from database
		$getOrder = $this->M_Order->getOrderSuccess();

		// send data to view
		$this->smarty->assign('order', $getOrder);
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		// set template content
		$this->smarty->assign('template_content', 'admin/order/success.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function setSelesai()
	{
		if ($this->M_Order->setSelesai($_GET['id'])) {
			
			$this->session->set_flashdata('notifikasi', array('message' => 'Order Diselesaikan!', 'color' => 'green'));
			redirect(site_url('admin/order/success'));

		} else {

			$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
			redirect(site_url('admin/order/takeOrder?id=' . $_GET['id']));

		}
	}

	///////////////////////////////////////////////////////////////////////

	public function fail()
	{
		// data set from database
		$getOrder = $this->M_Order->getOrderFail();

		// send data to view
		$this->smarty->assign('order', $getOrder);
		$this->smarty->assign('notifApp', $this->session->flashdata('notifikasi'));

		// set template content
		$this->smarty->assign('template_content', 'admin/order/fail.html');
		
		// output
		parent::display();
	}

	///////////////////////////////////////////////////////////////////////

	public function setBatal()
	{
		if ($this->M_Order->setBatal($_GET['id'])) {
			
			$this->session->set_flashdata('notifikasi', array('message' => 'Order Dibatalkan!', 'color' => 'red'));
			redirect(site_url('admin/order/fail'));

		} else {

			$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
			redirect(site_url('admin/order/in'));

		}
	}

	// echo"<pre>";
	// print_r($data);
	// exit;
}
