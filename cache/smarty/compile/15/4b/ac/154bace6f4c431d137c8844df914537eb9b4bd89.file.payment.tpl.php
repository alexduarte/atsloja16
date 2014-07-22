<?php /* Smarty version Smarty-3.1.14, created on 2014-07-21 16:24:20
         compiled from "C:\wamp\www\atsloja16\modules\pagseguro\views\templates\hook\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1925953cd76f4346e19-34575167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154bace6f4c431d137c8844df914537eb9b4bd89' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\modules\\pagseguro\\views\\templates\\hook\\payment.tpl',
      1 => 1405963723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1925953cd76f4346e19-34575167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53cd76f4387f00_16926968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd76f4387f00_16926968')) {function content_53cd76f4387f00_16926968($_smarty_tpl) {?><p class="payment_module">
	<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?fc=module&module=pagseguro&controller=payment" title="<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>
" />
		<?php echo smartyTranslate(array('s'=>'Pague com PagSeguro e parcele em até 18 vezes','mod'=>'pagseguro'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>