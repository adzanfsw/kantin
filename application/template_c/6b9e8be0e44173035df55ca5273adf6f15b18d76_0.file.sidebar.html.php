<?php
/* Smarty version 4.3.1, created on 2024-04-01 16:38:50
  from '/var/www/html/life/application/views/user/template/sidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660a80aaea1db1_25611342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b9e8be0e44173035df55ca5273adf6f15b18d76' => 
    array (
      0 => '/var/www/html/life/application/views/user/template/sidebar.html',
      1 => 1711945213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660a80aaea1db1_25611342 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-sidebar sidebar-style-2">
	<aside id="sidebar-wrapper">
	  <div class="sidebar-brand">
		<img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/food-corner.png" height="70px" alt="food-corner">
	  </div>
	  <div class="sidebar-brand sidebar-brand-sm">
		<!-- <a href="http://localhost/stisla/dist/index">St</a> -->
	  </div>
	  <ul class="sidebar-menu">
		<li class="menu-header" style="color: transparent;">Dashboard</li>

		<li class="menu-header">MENU</li>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jenis']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<li class=""><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/menu?ty=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_jenis'];?>
"><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i> <span><?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['item']->value['jenis'] ?? '', 'UTF-8');?>
</span></a></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  </ul>

	</aside>
  </div><?php }
}
