<?php
/* Smarty version 4.3.1, created on 2024-05-10 13:54:45
  from 'C:\xampp\htdocs\kantin\application\views\user\template\footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_663dc4b5b464e0_49855572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c39b1916b84ad1c280b6a84972ccb5274c79770' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\user\\template\\footer.html',
      1 => 1715324056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663dc4b5b464e0_49855572 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- <footer class="main-footer">
  <div class="footer-left">
    Copyright &copy; 2024 <div class="bullet"></div> Design By <a href="https://nauval.in/">Stisla</a> <div class="bullet"></div> Graphic By <a href="https://www.freepik.com/">Freepik</a>
  </div>
  <div class="footer-right">
    
  </div>
</footer> -->
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

<?php echo '<script'; ?>
>
  $(document).ready(function() {
      // Add to cart
      $('.add-to-cart').click(function() {
          var data = {
              id: $(this).data('id'),
              qty: $(this).data('qty'),
              price: $(this).data('price'),
              name: $(this).data('name'),
              img: $(this).data('img'),
              jenis: $(this).data('jenis')
          };

          $.post('<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/cart/add', data, function(response) {
              var cartData = JSON.parse(response);

              // Check if subtotal value is present
              if (cartData && cartData.subtotal !== undefined) {
                  // Update cart notification with subtotal and items count
                  $('#cart-subtotal').text(cartData.subtotal);
                  $('#cart-items-count').text(cartData.itemsCount);
              } else {
                  // Handle case where subtotal value is not present or invalid
                  console.error('Subtotal value is missing or invalid');
              }
          });
      });
  
      // Update cart
      $('.update-cart').click(function() {
          var data = {
              rowid: $(this).data('rowid'),
              qty: $(this).data('qty')
          };
          $.post('/cart/update', data, function(response) {
              // Handle response if needed
              console.log(response);
          });
      });
  
      // Remove from cart
      $('.remove-from-cart').click(function() {
          var data = {
              rowid: $(this).data('rowid')
          };
          $.post('/cart/remove', data, function(response) {
              // Handle response if needed
              console.log(response);
          });
      });
  });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
