<?php /* Smarty version Smarty-3.1.14, created on 2014-07-09 13:51:02
         compiled from "C:\wamp\www\atsloja\admin6383\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2485053bd810685b9b3-15429624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e11cf92fece19777c90baed835e45e74a2e00956' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja\\admin6383\\themes\\default\\template\\content.tpl',
      1 => 1403371074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2485053bd810685b9b3-15429624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53bd810686e777_21748610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bd810686e777_21748610')) {function content_53bd810686e777_21748610($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>