<?php /* Smarty version Smarty-3.1.14, created on 2014-07-09 13:51:27
         compiled from "C:\wamp\www\atsloja\admin6383\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44653bd811fe21db6-36211275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dd258f196ab18dfc6931e2d6011892682257eda' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja\\admin6383\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1403371074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44653bd811fe21db6-36211275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53bd811fe32b07_39833364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bd811fe32b07_39833364')) {function content_53bd811fe32b07_39833364($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>