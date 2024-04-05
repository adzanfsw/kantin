<?php
/* Smarty version 4.3.1, created on 2024-03-28 12:30:04
  from 'C:\xampp\htdocs\kantin\application\views\admin\menu\indexMenu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6605005cce8f52_32282393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '795e2a8f3837abfc82f97dba1d86b308899c8f08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\menu\\indexMenu.html',
      1 => 1711603802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6605005cce8f52_32282393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\kantin\\application\\third_party\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

  <h2 class="section-title">Menu</h2>
  <p class="section-lead">Daftar Menu Food Point Alma Ata</p>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/menu/addMenu" class="btn btn-warning">+ Tambah</a>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th></th>
                <th>Nama Menu</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Action</th>
              </tr>
            </thead>
            
            <tbody>
              <?php $_smarty_tpl->_assignInScope('no', 1);?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['daftarMenu']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr>
                  <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                  <td>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['img'] != NULL) {?>
                      <div style="width: 50px; height: 35px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/menu/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
); background-size: cover;"> </div>
                    <?php } else { ?>
                      <div style="width: 50px; height: 35px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/example-image.jpg); background-size: cover;"> </div>
                    <?php }?>
                  </td>
                  <td><?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['item']->value['deskripsi'];?>
</td>
                  <td>Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['harga'],0,',','.');?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['item']->value['stok'];?>
</td>
                  <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/menu/editMenu?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
" class="btn btn-success" style="line-height: 12px;">Edit</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/menu/delete?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_menu'];?>
"
                      class="btn btn-danger"
                      style="line-height: 12px;"
                      onclick="return confirm('Yakin hapus <?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
?!')"
                    >Hapus</a>
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
