<?php
/* Smarty version 4.3.1, created on 2024-04-30 11:46:17
  from '/var/www/html/life/application/views/admin/jenis/editJenis.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_663077997e0499_86145724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4794f5ff1cd74a3eb4fe810d3a356f9298ec059c' => 
    array (
      0 => '/var/www/html/life/application/views/admin/jenis/editJenis.html',
      1 => 1713863880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663077997e0499_86145724 (Smarty_Internal_Template $_smarty_tpl) {
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
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
</div><?php }
}
