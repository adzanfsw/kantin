<?php
/* Smarty version 4.3.1, created on 2024-04-07 20:29:40
  from 'C:\xampp\htdocs\kantin\application\views\admin\order\ambilOrder.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66129fc4293f75_97867635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b04eec42978467a48a8574dea39a21e460ae0352' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\order\\ambilOrder.html',
      1 => 1712496578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66129fc4293f75_97867635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\kantin\\application\\third_party\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<h2 class="section-title">Ambil Order</h2>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Customer:</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" class="form-control" name="nama" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['pelanggan'];?>
" readonly>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Catatan:</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" class="form-control" name="nama" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['catatan'];?>
" readonly>
					</div>
				</div>
				
			</div>
		</div>

		<div class="card">
			<div class="card-body" style="padding: 20px 100px 0px 100px;">
				<table class="table" border="0" style="width: 100%;">
					<thead>
					  <tr>
						<th colspan="2" style="width: 50%; font-size: 18px;">Menu Dipesan</th>
						<th class="text-center" style="width: 15%;">Harga Satuan</th>
						<th class="text-center" style="width: 15%;">Jumlah</th>
						<th class="text-center" style="width: 20%;">Subtotal Menu</th>
					  </tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listItem']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<tr>
							<td style="width: 7%;">
								<?php if ($_smarty_tpl->tpl_vars['item']->value['img'] != NULL) {?>
								<div style="width: 50px; height: 35px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/menu/<?php echo $_smarty_tpl->tpl_vars['item']->value['img'];?>
); background-size: cover;"> </div>
								<?php } else { ?>
								<div style="width: 50px; height: 35px; background-image: url(<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/img/example-image.jpg); background-size: cover;"> </div>
								<?php }?>
							</td>
							<td class="text-left" style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
</td>
							<td class="text-center">Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['harga'],0,',','.');?>
</td>
							<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
							<td class="text-center"><b>Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['subtotal'],0,',','.');?>
</b></td>
						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<tr style="border-top: 2px dotted #FDC257; background-color: #FAFDFF;">
							<td colspan="3" style="padding: 20px 40px 0 40px; border-right: 2px dotted #d8d8d8;">
								<div class="form-group row mb-4"></div>
							</td>
							<td colspan="2" class="text-center">Total Pesanan (x Menu): &ensp;<span style="color: #FFA426; font-size: 20px; font-weight: bold;">Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['order']->value['total'],0,',','.');?>
</span></td>
						</tr>

						<tr style="border-top: 2px dotted #d8d8d8; background-color: #FAFDFF;">
							<td colspan="3" style="padding: 20px 40px 0 40px;"></td>
							<td colspan="2" class="text-center">
								<div class="form-group row mb-4" style="margin-top: 25px;">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
									<div class="col-sm-12 col-md-7">
										<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/order/setSelesai?id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order'];?>
" class="btn btn-md btn-primary"><i class="far fa-edit"></i> Order Selesai</a>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
					
				  </table>

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
