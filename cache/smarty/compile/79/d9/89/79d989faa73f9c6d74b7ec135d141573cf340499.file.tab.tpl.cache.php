<?php /* Smarty version Smarty-3.1.14, created on 2014-07-09 13:51:10
         compiled from "C:\wamp\www\atsloja\themes\default-bootstrap\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1716553bd810ef2f3b5-43922891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d989faa73f9c6d74b7ec135d141573cf340499' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja\\themes\\default-bootstrap\\modules\\homefeatured\\tab.tpl',
      1 => 1399294042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1716553bd810ef2f3b5-43922891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53bd810f004514_00759040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bd810f004514_00759040')) {function content_53bd810f004514_00759040($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\atsloja\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>