<?php
/* Smarty version 4.3.1, created on 2024-03-28 11:03:12
  from 'C:\xampp\htdocs\kantin\application\views\admin\menu\addMenu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6604ec005d54e2_28473179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '467bae1c09267538011b17b1b6ff0b723a21e2bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\menu\\addMenu.html',
      1 => 1711598586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6604ec005d54e2_28473179 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="col-12">
	<div class="card">
		<div class="card-header">
		<h4>Tambah Menu</h4>
		</div>

		<div class="card-body">
			<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/menu/processAdd" method="post" enctype="multipart/form-data">
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Menu</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" class="form-control" name="namaMenu" required>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
					<div class="col-sm-12 col-md-7">
						<div class="input-group">
							<div class="input-group-prepend">
							<div class="input-group-text">
								Rp
							</div>
							</div>
							
							<input type="text" class="form-control" name="harga" id="hargaInput" required>
						</div>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control" name="deskripsi" required></textarea>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Menu</label>
					<div class="col-sm-12 col-md-7">
						<select class="form-control selectric" name="jenis" id="jenis" required>
							<option value="" disabled selected hidden>-- Pilih Jenis Menu --</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jenisMenu']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id_jenis'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['jenis'];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok</label>
					<div class="selectgroup col-sm-12 col-md-7">
					<label class="selectgroup-item">
						<input type="radio" name="stok" value="Tersedia" class="selectgroup-input">
						<span class="selectgroup-button">Tersedia</span>
					</label>
					<label class="selectgroup-item">
						<input type="radio" name="stok" value="Habis" class="selectgroup-input">
						<span class="selectgroup-button">Habis</span>
					</label>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Menu</label>
					<div class="col-sm-12 col-md-7">
						<input id="imgMenu" type="file" class="form-control" name="imgMenu" accept="image/png, image/jpeg">
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
</div>

<?php echo '<script'; ?>
>
	document.getElementById('hargaInput').addEventListener('input', function(event) {
		// Get the entered value
		let inputValue = event.target.value;
		
		// Remove any non-numeric characters
		inputValue = inputValue.replace(/\D/g, '');
		
		// Convert the number to IDR currency format
		inputValue = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0, maximumFractionDigits: 0 }).format(inputValue);
		
		// Remove the "Rp" prefix
		inputValue = inputValue.replace(/^Rp\s*/, '');

		// Update the input value
		event.target.value = inputValue;
	});
<?php echo '</script'; ?>
><?php }
}
