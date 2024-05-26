<?php
/* Smarty version 4.3.1, created on 2024-05-25 15:35:44
  from 'C:\xampp\htdocs\kantin\application\views\user\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6651a2e0643754_40117297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bd5c64873cb544464a66197360721819827e37d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\user\\menu.html',
      1 => 1716626128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6651a2e0643754_40117297 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <h2 class="section-title">Daftar Menu</h2>
        <p class="section-lead">Silahkan pilih menu di bawah ..</p>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jenis']->value, 'jen');
$_smarty_tpl->tpl_vars['jen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jen']->value) {
$_smarty_tpl->tpl_vars['jen']->do_else = false;
?>
                <li class="nav-item">
                <a <?php if ($_smarty_tpl->tpl_vars['jen']->value['jenis'] == 'Makanan') {?> class="nav-link active" <?php } else { ?> class="nav-link" <?php }?> id="<?php echo $_smarty_tpl->tpl_vars['jen']->value['jenis'];?>
-tab" data-toggle="tab" href="#<?php echo $_smarty_tpl->tpl_vars['jen']->value['jenis'];?>
" role="tab" aria-controls="<?php echo $_smarty_tpl->tpl_vars['jen']->value['jenis'];?>
" aria-selected="true"><?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['jen']->value['jenis'] ?? '', 'UTF-8');?>
</a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <div class="tab-content" id="myTabContent">
            <?php echo $_smarty_tpl->tpl_vars['daftarMenu']->value;?>

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
