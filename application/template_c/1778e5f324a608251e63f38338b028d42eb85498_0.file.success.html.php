<?php
/* Smarty version 4.3.1, created on 2024-05-10 12:48:23
  from 'C:\xampp\htdocs\kantin\application\views\admin\order\success.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_663db5276975a0_53181726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1778e5f324a608251e63f38338b028d42eb85498' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\order\\success.html',
      1 => 1713920115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663db5276975a0_53181726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\kantin\\application\\third_party\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

<h2 class="section-title">Order Selesai</h2>

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
                <td><div class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
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
