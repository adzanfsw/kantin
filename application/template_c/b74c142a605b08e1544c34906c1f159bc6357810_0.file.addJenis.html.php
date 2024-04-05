<?php
/* Smarty version 4.3.1, created on 2024-03-27 09:25:52
  from 'C:\xampp\htdocs\kantin\application\views\admin\jenis\addJenis.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6603d810db6929_55121371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b74c142a605b08e1544c34906c1f159bc6357810' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\jenis\\addJenis.html',
      1 => 1711527788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6603d810db6929_55121371 (Smarty_Internal_Template $_smarty_tpl) {
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
						<button type="submit" class="btn btn-warning">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
</div><?php }
}
