<?php
/* Smarty version 4.3.1, created on 2024-04-03 13:12:00
  from 'C:\xampp\htdocs\kantin\application\views\user\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660cf33078dcd8_41748688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bd5c64873cb544464a66197360721819827e37d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\user\\menu.html',
      1 => 1712124718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660cf33078dcd8_41748688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\kantin\\application\\third_party\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

        <h2 class="section-title">Daftar Menu</h2>
        <p class="section-lead">Silahkan pilih menu di bawah ..</p>

    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['daftarMenu']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                    <div class="article-header">
                        <div class="article-image" data-background="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/menu/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
">
                    </div>
                    <div class="article-title">
                        <h2><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
</a></h2>
                    </div></div>

                    <div class="article-details">
                        <div class="article-title">
                            <h4>Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['harga'],0,',','.');?>
</h4>
                        </div>

                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['deskripsi'];?>
</p>

                        <div class="article-cta">
                            <button class="btn btn-warning add-to-cart" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
" data-qty="1" data-price="<?php echo $_smarty_tpl->tpl_vars['item']->value['harga'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
">+ Order</button>
                        </div>
                    </div>
                </article>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

</div>

<!-- <div class="cart-float" id="cart-notification">
    <div style="display: flex; flex-basis: 15%; padding: 10px; color: #ffa426; align-items: center; justify-content: center;">
        <div class="cart-icon">
        <i class="fas fa-shopping-basket" style="font-size: 28px;"></i>
        <span id="cart-items-count" class="cart-count"></span>
        </div>
    </div>
    <div id="cart-subtotal" style="display: flex; flex-basis: 50%; align-items: center; color: #ffa426; justify-content: center;">
        
    </div>
    <a id="checkout-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/cart" class="btn btn-warning" style="display: flex; flex-basis: 35%; color: white; align-items: center; justify-content: center;">
        Checkout
    </a>
</div> --><?php }
}
