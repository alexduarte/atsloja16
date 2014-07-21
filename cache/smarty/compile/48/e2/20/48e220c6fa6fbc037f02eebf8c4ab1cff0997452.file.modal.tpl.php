<?php /* Smarty version Smarty-3.1.14, created on 2014-07-21 16:11:37
         compiled from "C:\wamp\www\atsloja16\admin6383\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136053cd73f9bbee69-26170838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e220c6fa6fbc037f02eebf8c4ab1cff0997452' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\admin6383\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1405963698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136053cd73f9bbee69-26170838',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53cd73f9bc4ef9_91723584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd73f9bc4ef9_91723584')) {function content_53cd73f9bc4ef9_91723584($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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