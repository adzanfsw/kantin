<?php
/* Smarty version 4.3.1, created on 2024-04-24 15:24:25
  from '/var/www/html/life/application/views/auth.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6628c1b9b1e215_64939450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e31286b739c3b30793abde737d58346cb251bd5b' => 
    array (
      0 => '/var/www/html/life/application/views/auth.html',
      1 => 1713947025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6628c1b9b1e215_64939450 (Smarty_Internal_Template $_smarty_tpl) {
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

            margin-top: 150px;
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
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/food-corner.png" alt="logo" width="200">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Selamat Datang, Admin DiSEL!</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
auth/logging_in" novalidate="">
                    <div class="form-group">
                        <label for="email">Username</label>
                        <input id="uname" type="text" class="form-control" name="uname" tabindex="1" placeholder="Please fill in your username" required>
                    </div>
  
                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" placeholder="**********" tabindex="2" required>
                    </div>
  
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                          Masuk
                        </button>
                    </div>
                  </form>

                  <div class="mt-5 text-muted text-center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
auth/addAdmin">Tambah Admin Baru</a>
                  </div>
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
