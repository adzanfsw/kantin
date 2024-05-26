<?php
/* Smarty version 4.3.1, created on 2024-05-27 00:48:35
  from 'C:\xampp\htdocs\kantin\application\views\user\cart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_665375f39a7b81_16989115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92a60e806675a930f206d337e02272aae1973bee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\user\\cart.html',
      1 => 1716745713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665375f39a7b81_16989115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\kantin\\application\\third_party\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>
<h2 class="section-title">Checkout</h2>

<div class="row">
	<div class="col-12">
		<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/order/makeOrder" method="post" enctype="multipart/form-data">
		<div class="card">
			<div class="card-body">
				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Namamu</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" class="form-control" name="nama" placeholder="Input nama kakak ya .." required>
					</div>
				</div>

				<div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Makan Dimana?</label>
					<div class="selectgroup col-sm-12 col-md-7">
						<label class="selectgroup-item">
							<input type="radio" name="dimana" value="Dine in" class="selectgroup-input" required>
							<span class="selectgroup-button">Dine in</span>
						</label>
						<label class="selectgroup-item">
							<input type="radio" name="dimana" value="Takeaway" class="selectgroup-input" required>
							<span class="selectgroup-button">Takeaway</span>
						</label>
					</div>
				</div>

				<!-- <div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Catatan</label>
					<div class="col-sm-12 col-md-7">
						<input type="text" class="form-control" name="catatan" placeholder="(Opsional) Tuliskan catatan pesanan kakak disini ya ..">
					</div>
				</div> -->

				<!-- <div class="form-group row mb-4">
					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
					<div class="col-sm-12 col-md-7">
						<textarea class="form-control" name="catatan" placeholder="Tuliskan catatan pesanan kakak disini ya .." required></textarea>
					</div>
				</div> -->
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<table class="table" border="0" style="width: 100%;">
					<thead>
					  <tr>
						<th colspan="2" style="font-size: 18px;">Menu Dipesan</th>
						<th class="text-center">Harga Satuan</th>
						<th class="text-center qty-width">Jumlah</th>
						<th class="text-center">Subtotal Menu</th>
						<th class="text-center"></th>
					  </tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['isiCart']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<tr>
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
							<td class="text-left" style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
							<td class="text-center">Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['price'],0,',','.');?>
</td>
							<td class="text-center">
								<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/cart/min?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['rowid'];?>
" class="btn btn-icon btn-sm btn-light"><i class="fas fa-minus"></i></a>
									&ensp; <?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>

								&ensp;<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/cart/plus?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['rowid'];?>
" class="btn btn-icon btn-sm btn-light"><i class="fas fa-plus"></i></a>
							</td>
							<td class="text-center"><b>Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['subtotal'],0,',','.');?>
</b></td>
							<td><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
user/cart/remove?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['rowid'];?>
" class="btn btn-icon btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>

							<!-- form data post -->
							<input style="display: none !important;" id="jalur" type="text" name="idMenu[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
							<input style="display: none !important;" id="jalur" type="text" name="qty[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
">
							<input style="display: none !important;" id="jalur" type="text" name="subtotal[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['subtotal'];?>
">
						</tr>
						<tr>
							<td></td>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['item']->value['jenis'] == 'Minuman') {?>
									<div class="form-group">
										<div class="selectgroup">
											<label class="selectgroup-item">
												<input type="radio" name="catatan_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="Es" class="selectgroup-input" required>
												<span class="selectgroup-button">Es</span>
											</label>
											<label class="selectgroup-item">
												<input type="radio" name="catatan_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="Panas" class="selectgroup-input" required>
												<span class="selectgroup-button">Panas</span>
											</label>
											<label class="selectgroup-item">
												<input type="radio" name="catatan_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="Hangat" class="selectgroup-input" required>
												<span class="selectgroup-button">Hangat</span>
											</label>
										</div>
									</div>
								<?php } else { ?>
									<input type="text" class="form-control" name="catatan_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" placeholder="(Opsional) Tuliskan catatan pesanan kakak disini ya ..">
								<?php }?>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<tr style="border-top: 2px dotted #0B5E91; background-color: #FAFDFF;">
							<td colspan="3" style="padding: 20px 40px 0 40px; border-right: 2px dotted #d8d8d8;">
								
							</td>
							<td colspan="3" class="text-center">Total Pesanan (<?php echo $_smarty_tpl->tpl_vars['totalCart']->value;?>
 Menu): <br><span style="color: #0B5E91; font-size: 20px; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span></td>
							<input style="display: none !important;" id="jalur" type="text" name="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
						</tr>

						<tr style="border-top: 2px dotted #d8d8d8; background-color: #FAFDFF;">
							<td colspan="3" style="padding: 20px 40px 0 40px;"></td>
							<td colspan="3" class="text-center">
								<div class="form-group row mb-4" style="margin-top: 25px;">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
									<div class="col-sm-12 col-md-7">
										<button type="submit" class="btn btn-lg btn-primary" <?php if ($_smarty_tpl->tpl_vars['totalCart']->value == 0) {?> disabled <?php }?>><i class="far fa-edit"></i> Buat Pesanan</button>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
					
				  </table>

			</div>
		</div>

		</form>
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
>

<?php if ((isset($_smarty_tpl->tpl_vars['notifApp']->value)) && $_smarty_tpl->tpl_vars['notifApp']->value != NULL) {
echo '<script'; ?>
>
  var pesan	= "<?php echo $_smarty_tpl->tpl_vars['notifApp']->value['message'];?>
";
  var warna	= "<?php echo $_smarty_tpl->tpl_vars['notifApp']->value['color'];?>
";
  var type	= '';
  
  if (warna == 'red') {
    type = 'error';
  } else {
    type = 'success';
  }

  // Automatically show iziToast notification when the page loads
  document.addEventListener('DOMContentLoaded', function() {
    iziToast[type]({
      message: pesan, // Use the JavaScript variable here
      position: 'topCenter',
      color: warna,
    });
  });
<?php echo '</script'; ?>
>
<?php }
}
}
