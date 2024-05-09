<?php
/* Smarty version 4.3.1, created on 2024-04-24 16:02:04
  from '/var/www/html/life/application/views/admin/template/sidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6628ca8cf0fa65_95478301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9bb08f13709a1be48ec2004c9880f477edbf192' => 
    array (
      0 => '/var/www/html/life/application/views/admin/template/sidebar.html',
      1 => 1713949288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6628ca8cf0fa65_95478301 (Smarty_Internal_Template $_smarty_tpl) {
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
			  <li><a class="nav-link beep beep-sidebar" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/order/in">Order Masuk</a></li>
			  <li><a class="nav-link beep beep-sidebar" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/order/success">Order Selesai</a></li>
			  <li><a class="nav-link beep beep-sidebar" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/order/fail">Order Batal</a></li>
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

		<li class=""><a class="nav-link" href=""><i class="fas fa-pencil-ruler"></i> <span>Data Transaksi</span></a></li>

		<li>
			<div class="dropdown-divider"></div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
auth/logging_out" class="dropdown-item has-icon text-danger">
				<i class="fas fa-sign-out-alt"></i> Logout
			</a>
		</li>
	  </ul>

	</aside>
  </div><?php }
}
