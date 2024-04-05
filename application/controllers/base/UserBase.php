<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserBase extends CI_Controller {

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
		$this->smarty->registerPlugin('modifier', 'strstr', 'strstr');

		$this->load->model('M_Jenis');

		//view app data
		$this->base_view_app();
	}

	/*
	 * method pengolah base_view_app
	 * dapat di override di class anaknya
	 */

	 protected function base_view_app() {

		//display header
		self::_display_header();
		//display header
		self::_display_sidebar();
		//display footer
		self::_display_footer();
	}

	/*
	 * methode layouting base document
	 * dapat di override di class anaknya
	 */

	protected function display($tmpl_name = 'user/template/app_doc.html') {

		$this->smarty->display($tmpl_name);
	}

	private function _display_header() {

		$this->smarty->assign('header_view', 'user/template/header.html');

	}

	private function _display_sidebar() {

		// data set from database
		$dataJenis = $this->M_Jenis->getJenis();

		// send data to view
		$this->smarty->assign('jenis', $dataJenis);

		$this->smarty->assign('sidebar_view', 'user/template/sidebar.html');

	}

	private function _display_footer() {

		// send data to view
		$this->smarty->assign('cartList', $this->cart->contents());
		
		$this->smarty->assign('footer_view', 'user/template/footer.html');

	}


}
