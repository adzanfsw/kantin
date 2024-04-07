<?php
/* Smarty version 4.3.1, created on 2024-04-07 18:41:19
  from 'C:\xampp\htdocs\kantin\application\views\user\payment.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6612865f870331_48295891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f82979bc25ced600c9c5620e25357c486140c5b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\user\\payment.html',
      1 => 1712490077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6612865f870331_48295891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\kantin\\application\\third_party\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
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
assets/img/food-corner.png" alt="logo" width="100">
            </div>

            <div class="card card-warning text-center" style="text-align: center;">
              <div class="card-header"><h4>Order Payment</h4></div>

              <div class="card-body">
                <div class="text-center">
                  <h3 style="color: #FFA426;">Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['order']->value['total'],0,',','.');?>
</h3>
                </div>

                <img src="https://actv.bloods-industries.co/wp-content/uploads/2020/12/Qris-Bloods-Industries-768x1055.png" alt="qris" width="200">

                <div class="form-group mt-4">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/menu" type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
                    Selesai
                  </a>
                </div>

              </div>
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
