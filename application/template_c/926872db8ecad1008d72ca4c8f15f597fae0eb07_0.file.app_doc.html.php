<?php
/* Smarty version 4.3.1, created on 2024-04-03 08:49:23
  from 'C:\xampp\htdocs\kantin\application\views\user\template\app_doc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660cb5a3564901_98775311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926872db8ecad1008d72ca4c8f15f597fae0eb07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\user\\template\\app_doc.html',
      1 => 1712108823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660cb5a3564901_98775311 (Smarty_Internal_Template $_smarty_tpl) {
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
assets/modules/jquery-selectric/selectric.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/izitoast/css/iziToast.min.css">
  
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
			<div class="main-content">
				<section class="section">
					<!-- Main Content -->
					<div class="section-body" style="margin-top: 50px;">

					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template_content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				</section>
			</div>

			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer_view']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php }
}
