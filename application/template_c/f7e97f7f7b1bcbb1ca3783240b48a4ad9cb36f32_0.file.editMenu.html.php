<?php
/* Smarty version 4.3.1, created on 2024-04-29 08:08:15
  from '/var/www/html/life/application/views/admin/menu/editMenu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_662ef2ffd38995_68205479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7e97f7f7b1bcbb1ca3783240b48a4ad9cb36f32' => 
    array (
      0 => '/var/www/html/life/application/views/admin/menu/editMenu.html',
      1 => 1714352861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662ef2ffd38995_68205479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/life/application/third_party/smarty/libs/plugins/modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<div class="row">
	<div class="col-12">
	<div class="card">
		<div class="card-header">
		<h4>Tambah Menu</h4>
		</div>

		<div class="card-body">
			<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/master/menu/processEdit?id=<?php echo $_smarty_tpl->tpl_vars['menu']->value['id_menu'];?>
" method="post" enctype="multipart/form-data">
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Menu</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" class="form-control" name="namaMenu" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['menu'];?>
" required>
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
							
							<input type="text" class="form-control" name="harga" id="hargaInput" value="<?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['menu']->value['harga'],0,',','.');?>
" required>
						</div>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Diskon</label>
					<div class="col-sm-12 col-md-3">
						<div class="input-group">
							<?php if ($_smarty_tpl->tpl_vars['menu']->value['diskon'] != NULL) {?>
								<input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="<?php echo ($_smarty_tpl->tpl_vars['menu']->value['diskon']/$_smarty_tpl->tpl_vars['menu']->value['harga'])*100;?>
" name="diskon">
							<?php } else { ?>
								<input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="diskon">
							<?php }?>

							<div class="input-group-append">
								<div class="input-group-text">
									%
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control" name="deskripsi" required><?php echo $_smarty_tpl->tpl_vars['menu']->value['deskripsi'];?>
</textarea>
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
" <?php if ($_smarty_tpl->tpl_vars['item']->value['id_jenis'] == $_smarty_tpl->tpl_vars['menu']->value['jenis_id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['jenis'];?>
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
						<input type="radio" name="stok" value="Tersedia" class="selectgroup-input" <?php if ($_smarty_tpl->tpl_vars['menu']->value['stok'] == 'Tersedia') {?> checked <?php }?>>
						<span class="selectgroup-button">Tersedia</span>
					</label>
					<label class="selectgroup-item">
						<input type="radio" name="stok" value="Habis" class="selectgroup-input" <?php if ($_smarty_tpl->tpl_vars['menu']->value['stok'] == 'Habis') {?> checked <?php }?>>
						<span class="selectgroup-button">Habis</span>
					</label>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Menu</label>
					<div class="col-sm-12 col-md-7">
						<?php if ($_smarty_tpl->tpl_vars['menu']->value['img'] != NULL) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/menu/<?php echo $_smarty_tpl->tpl_vars['menu']->value['img'];?>
" style="width: 100px;" alt="">
							<p></p>
							<span>Ganti Foto:</span>
							<input id="imgMenu" type="file" class="form-control" name="imgMenu" accept="image/png, image/jpeg">
						<?php } else { ?>
							<input id="imgMenu" type="file" class="form-control" name="imgMenu" accept="image/png, image/jpeg">
						<?php }?>
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
