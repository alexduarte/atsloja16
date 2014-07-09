<?php /* Smarty version Smarty-3.1.14, created on 2014-07-09 14:48:51
         compiled from "C:\wamp\www\atsloja\admin6383\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:497553bd8e93a2c384-57138435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efeeccb89733d99c9d06fe1caea92c3284e3546d' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja\\admin6383\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1403371074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '497553bd8e93a2c384-57138435',
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
  'unifunc' => 'content_53bd8e93ad1013_73814819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bd8e93ad1013_73814819')) {function content_53bd8e93ad1013_73814819($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>