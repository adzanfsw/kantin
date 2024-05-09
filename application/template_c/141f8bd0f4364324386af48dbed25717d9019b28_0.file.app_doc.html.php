<?php
/* Smarty version 4.3.1, created on 2024-04-24 08:36:23
  from '/var/www/html/life/application/views/user/template/app_doc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66286217406dd1_69157724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '141f8bd0f4364324386af48dbed25717d9019b28' => 
    array (
      0 => '/var/www/html/life/application/views/user/template/app_doc.html',
      1 => 1713922548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66286217406dd1_69157724 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>Digital Student Lounge</title>
  	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/food-icon.png" />

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

	<style>
		@media (max-width: 724px) {
			.qty-width {
				width:max-content;
			}
		}
	</style>
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
