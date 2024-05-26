<?php
/* Smarty version 4.3.1, created on 2024-05-27 00:24:01
  from 'C:\xampp\htdocs\kantin\application\views\admin\template\footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_665370313a1062_12748099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '042399c72cf7ad436d840a2abebbfc9deed8884d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kantin\\application\\views\\admin\\template\\footer.html',
      1 => 1716744239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665370313a1062_12748099 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="main-footer">
	<div class="footer-left">
	  Copyright &copy; 2024 <div class="bullet"></div> Digital Student Lounge
	</div>
	<div class="footer-right">
	  
	</div>
  </footer>
</div>
</div>

<!-- General JS Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/popper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/tooltip.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/nicescroll/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/js/stisla.js"><?php echo '</script'; ?>
>

<!-- JS Libraies -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/datatables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/jquery-selectric/jquery.selectric.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/modules/izitoast/js/iziToast.min.js"><?php echo '</script'; ?>
>

<!-- DataTables Buttons JS -->
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.flash.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"><?php echo '</script'; ?>
>

<!-- Page Specific JS File -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/js/page/modules-datatables.js"><?php echo '</script'; ?>
>

<!-- Template JS File -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/js/scripts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/js/custom.js"><?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['notifApp']->value)) && $_smarty_tpl->tpl_vars['notifApp']->value != NULL) {?>
	<?php echo '<script'; ?>
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
<?php }?>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        // Function to get the URL parameter
        function getUrlParameter(name) {
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        };

        // Get the date parameter from the URL
        let date = getUrlParameter('date');

        // If no date parameter is provided, use today's date
        if (!date) {
            let today = new Date();
            date = today.getFullYear() + '-' + String(today.getMonth() + 1).padStart(2, '0') + '-' + String(today.getDate()).padStart(2, '0');
        }

        // Initialize the DataTable with export buttons
        var table = $("#tableTrans").DataTable({
            dom: 'Blfrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'Laporan Penjualan Digital Student Lounge | ' + date,
                    className: 'btn btn-success',
                    text: 'Export to Excel'
                },
                {
                    extend: 'csvHtml5',
                    title: 'Laporan Penjualan Digital Student Lounge | ' + date,
                    className: 'btn btn-warning',
                    text: 'Export to CSV'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Laporan Penjualan Digital Student Lounge | ' + date,
                    className: 'btn btn-danger',
                    text: 'Export to PDF',
                    customize: function (doc) {
                        // Full-width table in PDF
                        doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

                        // Center-align table content
                        var objLayout = {};
                        objLayout['hLineWidth'] = function(i) { return .5; };
                        objLayout['vLineWidth'] = function(i) { return .5; };
                        objLayout['hLineColor'] = function(i) { return '#aaa'; };
                        objLayout['vLineColor'] = function(i) { return '#aaa'; };
                        objLayout['paddingLeft'] = function(i) { return 4; };
                        objLayout['paddingRight'] = function(i) { return 4; };
                        objLayout['paddingTop'] = function(i) { return 2; };
                        objLayout['paddingBottom'] = function(i) { return 2; };
                        objLayout['default'] = false;
                        doc.content[1].layout = objLayout;

                        // Center-align table headers and body
                        doc.styles.tableHeader.alignment = 'center';
                        doc.styles.tableBodyOdd.alignment = 'center';
                        doc.styles.tableBodyEven.alignment = 'center';
                    }
                }
            ]
        });

        // Move the buttons to the desired container
        table.buttons().container().appendTo('#button-container');
    });
<?php echo '</script'; ?>
>


</body>
</html><?php }
}
