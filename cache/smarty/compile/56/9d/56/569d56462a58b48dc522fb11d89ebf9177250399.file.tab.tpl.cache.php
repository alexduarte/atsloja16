<?php /* Smarty version Smarty-3.1.14, created on 2014-07-21 16:17:45
         compiled from "C:\wamp\www\atsloja16\themes\default-bootstrap\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2477153cd7569988a44-57684423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '569d56462a58b48dc522fb11d89ebf9177250399' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\themes\\default-bootstrap\\modules\\homefeatured\\tab.tpl',
      1 => 1405963728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2477153cd7569988a44-57684423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53cd7569a05679_75052624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd7569a05679_75052624')) {function content_53cd7569a05679_75052624($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\atsloja16\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>