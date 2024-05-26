<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/UserBase.php');

class Order extends UserBase {

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
	
	public function makeOrder() {
		
		$arrOrderItems = [];
		$idOrder	= date('ymd', strtotime(date('Y-m-d'))) . strtoupper(random_string('alpha', 8));
		$idMenu		= $this->input->post('idMenu');

		$order = array(
			'id_order'		=> $idOrder,
			'pelanggan'		=> $this->input->post('nama'),
			'total'			=> str_replace(['Rp ', '.', ','], '', $this->input->post('total')),
			'catatan'		=> $this->input->post('dimana') . '; ' . $this->input->post('catatan'),
			'status'		=> 'Order Masuk',
			'createdt' 		=> date('Y-m-d H:i:s'),
		);

		// Retrieve POST data
		$postData = $this->input->post();
	
		// Loop through each menu item
		foreach ($postData['idMenu'] as $key => $menuId) {
			$catatanField = 'catatan_' . $menuId;
	
			$orderItems = array(
				'order_id' => $idOrder,
				'menu_id' => $menuId,
				'qty' => $postData['qty'][$key],
				'catatan' => isset($postData[$catatanField]) ? $postData[$catatanField] : null,
				'subtotal' => $postData['subtotal'][$key],
				'createdt' => date('Y-m-d H:i:s'),
			);
	
			$arrOrderItems[] = $orderItems;
		}
		
		// echo"<pre>";
		// print_r($arrOrderItems);
		// exit;

		// insert to database
		if ($this->M_Order->inOrder($order, $arrOrderItems)) {
		
			// dump cart when refreshing
			$this->cart->destroy();

			// redirecting
			redirect(site_url('user/order/payment?id=' . $idOrder));
			
		} else {

			$this->session->set_flashdata('notifikasi', array('message' => 'Terjadi Kesalahan!', 'color' => 'red'));
			redirect(site_url('user/cart'));

		}
	}

	///////////////////////////////////////////////////////////////////////

	public function payment() {

		// data set from database
		$getOrder = $this->M_Order->getOrderbyID($_GET['id']);

		// send data to view
		$this->smarty->assign('order', $getOrder[0]);

		// set template content
		$this->smarty->display('user/payment.html');

	}


}
