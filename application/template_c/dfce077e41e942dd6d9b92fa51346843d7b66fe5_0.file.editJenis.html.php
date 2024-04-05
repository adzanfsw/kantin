<?php
/* Smarty version 4.3.1, created on 2024-03-27 16:07:13
  from 'C:\xampp\htdocs\kantin\application\views\admin\jenis\editJenis.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6603e1c1bb10f4_88963623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfce077e41e942dd6d9b92fa51346843d7b66fe5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\jenis\\editJenis.html',
      1 => 1711530373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6603e1c1bb10f4_88963623 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="col-12">
	<div class="card">
		<div class="card-header">
		<h4>Edit Jenis Menu</h4>
		</div>

		<div class="card-body">
			<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/jenis/processEdit" method="post">

				<input style="display: none !important;" type="text" class="form-control" name="idJenis" value="<?php echo $_smarty_tpl->tpl_vars['jenisMenu']->value['id_jenis'];?>
" required>
				
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Jenis Menu</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" class="form-control" name="namaJenis" value="<?php echo $_smarty_tpl->tpl_vars['jenisMenu']->value['jenis'];?>
" required>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
					<div class="col-sm-12 col-md-7">
						<button type="submit" class="btn btn-warning">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
</div><?php }
}
