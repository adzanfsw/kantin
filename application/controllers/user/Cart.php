<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/UserBase.php');

class Cart extends UserBase {

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
	}

	public function index() {

		// send data to view
		$this->smarty->assign('isiCart', $this->cart->contents());
		$this->smarty->assign('totalCart', $this->cart->total_items());
		$this->smarty->assign('total', 'Rp ' . number_format($this->cart->total(), 0, ',', '.'));

		// set template content
		$this->smarty->assign('template_content', 'user/cart.html');
		
		// output
		parent::display();

	}

	public function print() {

		echo"<pre>";
		print_r($this->cart->contents());
		exit;

	}
	
	public function add() {
		
		$data = array(
			'id'		=> $this->input->post('id'),
			'qty'		=> $this->input->post('qty'),
			'price'		=> $this->input->post('price'),
			'name'		=> $this->input->post('name'),
			'img'		=> $this->input->post('img'),
		);
		
		// insert to cart
		if ($this->cart->insert($data)) {

			// Retrieve updated cart information
			$cartData = array(
				'subtotal'   => 'Rp ' . number_format($this->cart->total(), 0, ',', '.'), // Calculate subtotal
				'itemsCount' => $this->cart->total_items()
			);
		
			// Send back JSON response containing updated cart information
			echo json_encode($cartData);
			
		} else {

			echo json_encode(['failed' => true]);

		}
	}

	public function update() {
		$data = array(
			'rowid' => $this->input->post('rowid'),
			'qty'   => $this->input->post('qty')
		);

		$this->cart->update($data);
		// echo json_encode(['success' => true]);
	}

	public function remove() {
		$rowid = $this->input->post('rowid');
		$this->cart->remove($rowid);
		// echo json_encode(['success' => true]);
	}

	public function dump() {
		$this->cart->destroy();
		echo json_encode(['success' => true]);
	}
}
