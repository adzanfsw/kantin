<?php
/* Smarty version 4.3.1, created on 2024-04-05 17:49:49
  from 'C:\xampp\htdocs\kantin\application\views\welcome_message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660fd74d12f2c0_57044283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc038adb132b6e7c49fe2a994766066f189cf7c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\welcome_message.html',
      1 => 1712126055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660fd74d12f2c0_57044283 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Food Point Alma Ata</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/css/components.css">
</head>

<body style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/back-yellow.png); background-size: cover; background-repeat: no-repeat;">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/food-corner.png" alt="logo" width="200">
            </div>

            <div class="card card-warning">
              <div class="card-header"><h4>Selamat Datang,</h4></div>

              <div class="card-body">

                  <div class="form-group">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/menu" type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
                      Pesan Menu
                    </a>
                  </div>

              </div>
            </div>

            <div class="simple-footer" style="color: white;">
              Copyright &copy; 2024 <br>
              Design By <a href="https://nauval.in/">Stisla</a> <div class="bullet"></div> Graphic By <a href="https://www.freepik.com/">Freepik</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/popper.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/tooltip.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/nicescroll/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/moment.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/js/stisla.js"><?php echo '</script'; ?>
>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/js/scripts.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/js/custom.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
