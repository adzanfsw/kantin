<?php
/* Smarty version 4.3.1, created on 2024-04-07 20:51:18
  from 'C:\xampp\htdocs\kantin\application\views\admin\template\app_doc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6612a4d6d5e0a5_31777335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f717b394adbde77d5d7834dc274b3417a48e8c2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\template\\app_doc.html',
      1 => 1712497836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6612a4d6d5e0a5_31777335 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Food Point Alma Ata</title>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/web-icon.png" />

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
