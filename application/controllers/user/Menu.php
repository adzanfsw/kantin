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
		// $this->cart->destroy();

		// data set from database
		$dataJenis = $this->M_Jenis->getJenis();
		
		// data set from database
		if (isset($_GET['ty'])) {
			$id_jenis = $_GET['ty']; // Assuming you want to use 'ty' as the parameter value
			$menu = $this->M_Menu->getMenubyJenis($id_jenis);
		} else {
			$menu = $this->M_Menu->getMenu();
		}

		//set view daftar menu by jenis
		$menu = '';

		foreach ($dataJenis as $key) {
			
			if ($key['jenis'] == 'Makanan') {
				$menu .= '<div class="tab-pane fade show active" id="' . $key['jenis'] . '" role="tabpanel" aria-labelledby="' . $key['jenis'] . '-tab">';
			} else {
				$menu .= '<div class="tab-pane fade" id="' . $key['jenis'] . '" role="tabpanel" aria-labelledby="' . $key['jenis'] . '-tab">';
			}
			$menu .= '<div class="row" style="margin-top: 30px;">';
			
			$listmenu = $this->M_Menu->getMenubyJenis($key['id_jenis']);

				foreach ($listmenu as $item) {
					
					$menu .= '<div class="col-12 col-sm-6 col-md-6 col-lg-3">';
					$menu .= '<article class="article"><div class="article-header">';
						if ($item['img'] != NULL) {
							$menu .= '<div class="article-image" data-background="' . site_url('assets/img/menu/' . $item['img']) . '">';
						} else {
							$menu .= '<div class="article-image" data-background="' . site_url('assets/img/menu/example-image.jpg') . '">';
						}
					$menu .= '</div>';
					$menu .= '<div class="article-title"><h2><a href="#">' . $item['menu'] . '</a></h2>';
					$menu .= '</div></div>';
		
					$menu .= '<div class="article-details"><div class="article-title">';
						if ($item['diskon'] == NULL) {
							$menu .= '<h4>Rp ' . number_format($item['harga'], 0, ',', '.') . '</h4>';
						} else {
							$menu .= '<span style="text-decoration: line-through;">Rp ' . number_format($item['harga'], 0, ',', '.') . '</span><h4>Rp ' . number_format($item['harga'] - $item['diskon'], 0, ',', '.') . '</h4>';
						}
					$menu .= '</div>';
		
					$menu .= '<p>' . $item['deskripsi'] . '</p>';
		
					$menu .= '<div class="article-cta">';
						if ($item['diskon'] == NULL) {
							$menu .= '<button class="btn btn-primary add-to-cart" data-id="' . $item['id_menu'] . '" data-qty="1" data-price="' . $item['harga'] . '" data-name="' . $item['menu'] . '" data-img="' . $item['img'] . '" data-jenis="' . $item['jenis'] . '">+ Order</button>';
						} else {
							$menu .= '<button class="btn btn-primary add-to-cart" data-id="' . $item['id_menu'] . '" data-qty="1" data-price="' . ($item['harga'] - $item['diskon']) . '" data-name="' . $item['menu'] . '" data-img="' . $item['img'] . '" data-jenis="' . $item['jenis'] . '">+ Order</button>';
						}
					$menu .= '</div>';
					$menu .= '</div></article></div>';
				}

			$menu .= '</div></div>';
		}

		// echo "<pre>";
		// print_r($menu);
		// exit;

		// send data to view
		$this->smarty->assign('jenis', $dataJenis);
		$this->smarty->assign('daftarMenu', $menu);

		// set template content
		$this->smarty->assign('template_content', 'user/menu.html');
		
		// output
		parent::display();
	}

}
