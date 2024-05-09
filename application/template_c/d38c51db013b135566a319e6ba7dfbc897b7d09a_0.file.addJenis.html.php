<?php
/* Smarty version 4.3.1, created on 2024-04-23 16:21:09
  from '/var/www/html/life/application/views/admin/jenis/addJenis.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66277d859b7083_05895215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd38c51db013b135566a319e6ba7dfbc897b7d09a' => 
    array (
      0 => '/var/www/html/life/application/views/admin/jenis/addJenis.html',
      1 => 1713863862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66277d859b7083_05895215 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="col-12">
	<div class="card">
		<div class="card-header">
		<h4>Tambah Jenis Menu</h4>
		</div>

		<div class="card-body">
			<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/jenis/processAdd" method="post">
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Jenis Menu</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" class="form-control" name="namaJenis" required>
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
