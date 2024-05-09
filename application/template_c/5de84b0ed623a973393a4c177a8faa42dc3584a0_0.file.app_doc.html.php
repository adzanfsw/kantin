<?php
/* Smarty version 4.3.1, created on 2024-04-24 00:06:59
  from '/var/www/html/life/application/views/admin/template/app_doc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6627eab3b08d47_74111410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de84b0ed623a973393a4c177a8faa42dc3584a0' => 
    array (
      0 => '/var/www/html/life/application/views/admin/template/app_doc.html',
      1 => 1713892019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6627eab3b08d47_74111410 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Admin - Digital Student Lounge</title>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/food-icon.png" />

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/fontawesome/css/all.min.css">
  
	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/jquery-selectric/selectric.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/izitoast/css/iziToast.min.css">

	<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/Responsive-2.2.1/css/responsive.dataTables.min.css" rel="stylesheet">
  
	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/css/components.css">

</head>

<body>
	<div id="app">
		<div class="main-wrapper main-wrapper-1">
			
			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header_view']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['sidebar_view']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

			<!-- Main Content -->
			<div class="main-content" style="z-index: +2;">
				<section class="section">
					<div class="section-body" style="margin-top: 50px;">

					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template_content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				</section>
			</div>

			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer_view']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php }
}
