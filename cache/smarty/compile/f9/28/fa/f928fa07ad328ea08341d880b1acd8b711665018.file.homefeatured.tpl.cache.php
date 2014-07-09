<?php /* Smarty version Smarty-3.1.14, created on 2014-07-09 13:51:11
         compiled from "C:\wamp\www\atsloja\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1299453bd810f066ca1-60185582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f928fa07ad328ea08341d880b1acd8b711665018' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1399294042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1299453bd810f066ca1-60185582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53bd810f0a04a5_52541769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bd810f0a04a5_52541769')) {function content_53bd810f0a04a5_52541769($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\atsloja\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php }else{ ?>
<ul id="homefeatured" class="homefeatured tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1){?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>