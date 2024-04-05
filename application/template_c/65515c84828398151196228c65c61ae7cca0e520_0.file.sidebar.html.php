<?php
/* Smarty version 4.3.1, created on 2024-03-26 09:00:15
  from 'C:\xampp\htdocs\kantin\application\views\admin\template\sidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6602808f3632a7_16204158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65515c84828398151196228c65c61ae7cca0e520' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\template\\sidebar.html',
      1 => 1711440012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6602808f3632a7_16204158 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
	  <div class="sidebar-brand">
		<img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/food-corner.png" height="70px" alt="food-corner">
	  </div>
	  <div class="sidebar-brand sidebar-brand-sm">
		<a href="http://localhost/stisla/dist/index">St</a>
	  </div>
	  <ul class="sidebar-menu">
		<li class="menu-header" style="color: transparent;">S</li>

		<li class="dropdown ">
			<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-file-alt"></i> <span>Order</span></a>
			<ul class="dropdown-menu">
			  <li class=""><a class="nav-link" href="http://localhost/stisla/dist/layout_default">Order Masuk</a></li>
			  <li><a class="nav-link" href="http://localhost/stisla/dist/layout_transparent">Order Selesai</a></li>
			  <li><a class="nav-link" href="http://localhost/stisla/dist/layout_transparent">Order Gagal</a></li>
			</ul>
		  </li>

		<li class="dropdown ">
		  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master Data</span></a>
		  <ul class="dropdown-menu">
			<li class=""><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/jenis">Jenis Menu</a></li>
			<li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/menu">Daftar Menu</a></li>
		  </ul>
		</li>

		<li class=""><a class="nav-link" href="http://localhost/stisla/dist/credits"><i class="fas fa-pencil-ruler"></i> <span>Data Transaksi</span></a></li>
	  </ul>

	</aside>
  </div><?php }
}
