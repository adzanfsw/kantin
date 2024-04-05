<?php
/* Smarty version 4.3.1, created on 2024-03-28 10:47:29
  from 'C:\xampp\htdocs\kantin\application\views\admin\jenis\indexJenis.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6604e8515dc517_31891553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6812275e9a7ab354aa8229ee4b9ded06bbdbe969' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\jenis\\indexJenis.html',
      1 => 1711597590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604e8515dc517_31891553 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2 class="section-title">Jenis Menu</h2>
<p class="section-lead">Daftar Jenis Menu Food Point Alma Ata</p>

<div class="row">
	<div class="col-12">
	<div class="card">
		<div class="card-header">
		<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/jenis/addJenis" class="btn btn-warning">+ Tambah</a>
		</div>

		<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped" id="table-1">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th>Jenis Menu</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
				<?php $_smarty_tpl->_assignInScope('counter', 1);?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jenisMenu']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
					<tr>
						<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['item']->value['jenis'];?>
</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/jenis/editJenis?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_jenis'];?>
" class="btn btn-success" style="line-height: 12px;">Edit</a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/jenis/delete?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_jenis'];?>
"
								class="btn btn-danger"
								style="line-height: 12px;"
								onclick="return confirm('Yakin hapus <?php echo $_smarty_tpl->tpl_vars['item']->value['jenis'];?>
?!')"
							>Hapus</a>
						</td>
					</tr>
					<?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);?>
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
