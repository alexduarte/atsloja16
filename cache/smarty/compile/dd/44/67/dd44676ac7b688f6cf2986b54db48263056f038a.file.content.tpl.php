<?php /* Smarty version Smarty-3.1.14, created on 2014-07-22 08:37:38
         compiled from "C:\wamp\www\atsloja16\admin6383\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:332353ce5b12a3a356-87434228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd44676ac7b688f6cf2986b54db48263056f038a' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\admin6383\\themes\\default\\template\\content.tpl',
      1 => 1406028791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '332353ce5b12a3a356-87434228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ce5b12a90163_10840846',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ce5b12a90163_10840846')) {function content_53ce5b12a90163_10840846($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>