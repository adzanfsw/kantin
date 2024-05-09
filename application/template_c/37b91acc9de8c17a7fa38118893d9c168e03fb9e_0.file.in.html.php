<?php
/* Smarty version 4.3.1, created on 2024-04-23 18:26:24
  from '/var/www/html/life/application/views/admin/order/in.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66279ae0af7e83_45548026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b91acc9de8c17a7fa38118893d9c168e03fb9e' => 
    array (
      0 => '/var/www/html/life/application/views/admin/order/in.html',
      1 => 1713864175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66279ae0af7e83_45548026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/life/application/third_party/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

<h2 class="section-title">Order Masuk</h2>

<div class="row">
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <button onclick="location.reload()" class="btn btn-primary">Refresh</button>
    </div>

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
              <th></th>
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
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 'Order Masuk') {?>
                    <div class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</div>
                  <?php } else { ?>
                    <div class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</div>
                  <?php }?></td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 'Order Masuk') {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/order/setDiproses?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
" class="btn btn-outline-info" style="line-height: 12px;">Ambil Order</a>
                  <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/order/takeOrder?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
" class="btn btn-outline-info" style="line-height: 12px;">Ambil Order</a>
                  <?php }?>
                </td>
                <td>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/order/setBatal?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
"
                    class="btn btn-outline-danger"
                    style="line-height: 12px;"
                    onclick="return confirm('Yakin batal order <?php echo $_smarty_tpl->tpl_vars['item']->value['id_order'];?>
?!')"
                  >Order Batal</a>
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
</div><?php }
}
