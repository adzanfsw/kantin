<?php
/* Smarty version 4.3.1, created on 2024-04-24 14:47:01
  from '/var/www/html/life/application/views/register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6628b8f55e4980_78247892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01df9a47d2ae3914f7c3a04ee2306edda71c9582' => 
    array (
      0 => '/var/www/html/life/application/views/register.html',
      1 => 1713944790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6628b8f55e4980_78247892 (Smarty_Internal_Template $_smarty_tpl) {
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
assets/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/izitoast/css/iziToast.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/css/components.css">

  <style>
    @media (max-width: 724px) {
        body {
            background-image: url('<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/back-yellow-port.png');
            background-size: cover;
            background-repeat: no-repeat;

            margin-top: 125px;
        }
    }

    @media (min-width: 725px) {
        body {
            background-image: url('<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/back-yellow.png');
            background-size: cover;
            background-repeat: no-repeat;
        }
    }
  </style>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div style="width: 600px; margin: 0 auto;">
            <div class="login-brand">
              <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/food-corner.png" alt="logo" width="200">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Tambah Admin Baru!</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
auth/register" novalidate="">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Nama Admin</label>
                            <input id="nama" type="nama" class="form-control" name="nama" tabindex="1" placeholder="Please fill in your name" required autofocus>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Username</label>
                            <input id="uname" type="uname" class="form-control" name="uname" tabindex="1" placeholder="Please fill in your username" required>
                        </div>
                    </div>
  
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password1" type="password" class="form-control" name="password1" placeholder="**********" tabindex="2" required>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="d-block">
                                <label for="password" class="control-label">Confirm Password</label>
                            </div>
                            <input id="password2" type="password" class="form-control" name="password2" placeholder="**********" tabindex="2" required>
                        </div>
                    </div>
  
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                          Buat Akun
                        </button>
                    </div>
                </form>
              </div>
            </div>

            <div class="simple-footer" style="color: #0B5E91;">
              Copyright &copy; 2024 <div class="bullet"></div> Digital Student Lounge
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
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/izitoast/js/iziToast.min.js"><?php echo '</script'; ?>
>

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

  <?php if ((isset($_smarty_tpl->tpl_vars['notifApp']->value)) && $_smarty_tpl->tpl_vars['notifApp']->value != NULL) {?>
    <?php echo '<script'; ?>
>
        var pesan	= "<?php echo $_smarty_tpl->tpl_vars['notifApp']->value['message'];?>
";
        var warna	= "<?php echo $_smarty_tpl->tpl_vars['notifApp']->value['color'];?>
";
        var type	= '';
        
        if (warna == 'red') {
            type = 'error';
        } else {
            type = 'success';
        }

        // Automatically show iziToast notification when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            iziToast[type]({
            message: pesan, // Use the JavaScript variable here
            position: 'topCenter',
            color: warna,
            });
        });
    <?php echo '</script'; ?>
>
  <?php }?>

</body>
</html><?php }
}
