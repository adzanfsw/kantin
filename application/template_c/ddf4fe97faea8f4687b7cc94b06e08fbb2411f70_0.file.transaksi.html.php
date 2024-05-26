<?php
/* Smarty version 4.3.1, created on 2024-05-27 00:04:38
  from 'C:\xampp\htdocs\kantin\application\views\admin\transaksi.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66536ba6213586_33532244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf4fe97faea8f4687b7cc94b06e08fbb2411f70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\transaksi.html',
      1 => 1716743076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66536ba6213586_33532244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\kantin\\application\\third_party\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

<h2 class="section-title">Transaksi</h2>
<p class="section-lead">Data Transaksi Digital Student Lounge</p>

<div class="row">
<div class="col-12">
  <div class="card">
	<div class="card-header">
	  <div id="button-container" class="mb-3"></div>
	</div>

	<div class="card-body">
		<div class="form-group col-md-5">
			<div class="input-group mb-3">
				<input type="date" class="form-control" id="tanggal" name="tanggal">
				<div class="input-group-append">
					<button class="btn btn-primary" id="filterButton" type="button">Filter</button>
				</div>
			</div>
		</div>

	  <div class="table-responsive">
		<table class="table table-striped" id="tableTrans">
		  <thead>
			<tr>
			  <th class="text-center">#</th>
			  <th>Nama Menu</th>
			  <th>Terjual</th>
			  <th>Subtotal</th>
			</tr>
		  </thead>
		  
		  <tbody>
			<?php $_smarty_tpl->_assignInScope('no', 1);?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trans']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			  <tr>
				<td class="text-center"><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['total_qty'];?>
 pcs</td>
				<td>Rp <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['item']->value['total_subtotal'],0,',','.');?>
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
</div>

<?php echo '<script'; ?>
>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the elements
        const tanggalInput = document.getElementById('tanggal');
        const filterButton = document.getElementById('filterButton');

        // Add click event listener to the button
        filterButton.addEventListener('click', function() {
            // Get the value of the date input
            const inputValue = tanggalInput.value;

            // Construct the URL with the inputValue
            const url = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
admin/transaksi?date=" + inputValue;

            // Redirect to the constructed URL
            window.location.href = url;
        });
    });
<?php echo '</script'; ?>
><?php }
}
