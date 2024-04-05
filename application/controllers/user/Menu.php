<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/UserBase.php');

class Menu extends UserBase {

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
	
	public function index()
	{
		// dump cart when refreshing
		$this->cart->destroy();
		
		// data set from database
		$menu = $this->M_Menu->getMenu();

		// send data to view
		$this->smarty->assign('daftarMenu', $menu);

		// set template content
		$this->smarty->assign('template_content', 'user/menu.html');
		
		// output
		parent::display();
	}

}
