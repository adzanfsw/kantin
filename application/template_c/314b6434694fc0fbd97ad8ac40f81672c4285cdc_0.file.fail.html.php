<?php
/* Smarty version 4.3.1, created on 2024-04-24 08:19:31
  from '/var/www/html/life/application/views/admin/order/fail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66285e23e3ea12_12038313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '314b6434694fc0fbd97ad8ac40f81672c4285cdc' => 
    array (
      0 => '/var/www/html/life/application/views/admin/order/fail.html',
      1 => 1713920098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66285e23e3ea12_12038313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/life/application/third_party/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

<h2 class="section-title">Order Batal</h2>

<div class="row">
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="table-1">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>ID Order</th>
              <th>Nama Customer</th>
              <th>Total</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          
          <tbody>
            <?php $_smarty_tpl->_assignInScope('no', 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
              <tr>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pelanggan'];?>
</td>
                <td>Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['total'],0,',','.');?>
</td>
                <td><div class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</div></td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/order/checkOrder?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
" class="btn btn-outline-info" style="line-height: 12px;">Cek Order</a>
                </td>
              </tr>
              <?php $_smarty_tpl->_assignInScope('no', $_smarty_tpl->tpl_vars['no']->value+1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<?php }
}
