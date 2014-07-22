<?php /* Smarty version Smarty-3.1.14, created on 2014-07-22 08:37:33
         compiled from "C:\wamp\www\atsloja16\admin6383\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2878653ce5b0d221e19-11210443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e220c6fa6fbc037f02eebf8c4ab1cff0997452' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\admin6383\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1406028793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2878653ce5b0d221e19-11210443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ce5b0d228132_57864394',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ce5b0d228132_57864394')) {function content_53ce5b0d228132_57864394($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>