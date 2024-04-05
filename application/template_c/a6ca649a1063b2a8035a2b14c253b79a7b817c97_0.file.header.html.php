<?php
/* Smarty version 4.3.1, created on 2024-04-03 13:11:17
  from 'C:\xampp\htdocs\kantin\application\views\user\template\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660cf3053fd193_97328950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6ca649a1063b2a8035a2b14c253b79a7b817c97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\user\\template\\header.html',
      1 => 1712124675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660cf3053fd193_97328950 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navbar-bg" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/back-yellow-hd.png); background-size: cover; background-repeat: no-repeat;"></div>
  <nav class="navbar navbar-expand-lg main-navbar">
    <div class="mr-auto" style="margin-top: 15px; position: fixed;">
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>

        <li>
          <div class="cart-float" id="cart-notification">
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
          </div>
        </li>
      </ul>

      <!-- <ul class="navbar-nav navbar-right" style="margin-top: 15px; position: fixed;"></ul> -->
    </div>
  </nav><?php }
}
