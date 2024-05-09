<?php
/* Smarty version 4.3.1, created on 2024-05-09 07:53:59
  from 'C:\xampp\htdocs\kantin\application\views\user\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_663c1ea75d2704_50578702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bd5c64873cb544464a66197360721819827e37d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\user\\menu.html',
      1 => 1714353653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663c1ea75d2704_50578702 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['img'] != NULL) {?>
                            <div class="article-image" data-background="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/menu/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
">
                        <?php } else { ?>
                            <div class="article-image" data-background="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/example-image.jpg">
                        <?php }?>
                    </div>
                    <div class="article-title">
                        <h2><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
</a></h2>
                    </div></div>

                    <div class="article-details">
                        <div class="article-title">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['diskon'] == NULL) {?>
                                <h4>Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['harga'],0,',','.');?>
</h4>
                            <?php } else { ?>
                                <span style="text-decoration: line-through;">Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['harga'],0,',','.');?>
</span><h4>Rp <?php echo smarty_modifier_number_format(($_smarty_tpl->tpl_vars['item']->value['harga']-$_smarty_tpl->tpl_vars['item']->value['diskon']),0,',','.');?>
</h4>
                            <?php }?>
                        </div>

                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['deskripsi'];?>
</p>

                        <div class="article-cta">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['diskon'] == NULL) {?>
                                <button class="btn btn-primary add-to-cart" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
" data-qty="1" data-price="<?php echo $_smarty_tpl->tpl_vars['item']->value['harga'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
">+ Order</button>
                            <?php } else { ?>
                                <button class="btn btn-primary add-to-cart" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
" data-qty="1" data-price="<?php echo $_smarty_tpl->tpl_vars['item']->value['harga']-$_smarty_tpl->tpl_vars['item']->value['diskon'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
" data-img="<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
">+ Order</button>
                            <?php }?>
                        </div>
                    </div>
                </article>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

</div>

<div class="section-header" style="position: sticky; bottom: 0; background-color: #fff; z-index: 1000;">
    <div class="section-header-breadcrumb">
        <span style="color: #0B5E91;">Keranjang:</span>
        <div class="cart-float section-header-breadcrumb" id="cart-notification">
            <div style="display: flex; flex-basis: 15%; padding: 10px; color: #0B5E91; align-items: center; justify-content: center;">
                <div class="cart-icon">
                  <i class="fas fa-shopping-basket" style="font-size: 28px;"></i>
                  <span id="cart-items-count" class="cart-count"></span>
                </div>
            </div>
            <div id="cart-subtotal" style="display: flex; flex-basis: 50%; align-items: center; color: #0B5E91; justify-content: center;">
                
            </div>
            <a id="checkout-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/cart" class="btn btn-primary" style="display: flex; flex-basis: 35%; color: white; align-items: center; justify-content: center;">
                Checkout
            </a>
        </div>
    </div>
</div>

<!-- <div class="cart-float" id="cart-notification">
    <div style="display: flex; flex-basis: 15%; padding: 10px; color: #0B5E91; align-items: center; justify-content: center;">
        <div class="cart-icon">
        <i class="fas fa-shopping-basket" style="font-size: 28px;"></i>
        <span id="cart-items-count" class="cart-count"></span>
        </div>
    </div>
    <div id="cart-subtotal" style="display: flex; flex-basis: 50%; align-items: center; color: #0B5E91; justify-content: center;">
        
    </div>
    <a id="checkout-link" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/cart" class="btn btn-warning" style="display: flex; flex-basis: 35%; color: white; align-items: center; justify-content: center;">
        Checkout
    </a>
</div> --><?php }
}
