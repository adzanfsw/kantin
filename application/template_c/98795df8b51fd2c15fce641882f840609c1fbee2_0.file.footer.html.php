<?php
/* Smarty version 4.3.1, created on 2024-04-24 08:09:18
  from '/var/www/html/life/application/views/admin/template/footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66285bbeed77c4_27473313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98795df8b51fd2c15fce641882f840609c1fbee2' => 
    array (
      0 => '/var/www/html/life/application/views/admin/template/footer.html',
      1 => 1713919986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66285bbeed77c4_27473313 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="main-footer">
    <div class="footer-left">
      Copyright &copy; 2024 <div class="bullet"></div> Digital Student Lounge
    </div>
    <div class="footer-right">
      
    </div>
  </footer>
</div>
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
assets/modules/datatables/datatables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/jquery-selectric/jquery.selectric.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/izitoast/js/iziToast.min.js"><?php echo '</script'; ?>
>

<!-- Page Specific JS File -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/js/page/modules-datatables.js"><?php echo '</script'; ?>
>

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
