<?php /* Smarty version Smarty-3.1.14, created on 2014-07-09 13:51:10
         compiled from "C:\wamp\www\atsloja\themes\default-bootstrap\modules\homeslider\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10653bd810e1209f9-32611441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab8d350b6763a8871117c89304d7597f5f3d70fb' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja\\themes\\default-bootstrap\\modules\\homeslider\\header.tpl',
      1 => 1399294042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10653bd810e1209f9-32611441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53bd810e178d54_50635787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bd810e178d54_50635787')) {function content_53bd810e178d54_50635787($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)){?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>$_smarty_tpl->tpl_vars['homeslider']->value['loop']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>$_smarty_tpl->tpl_vars['homeslider']->value['width']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>$_smarty_tpl->tpl_vars['homeslider']->value['speed']),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>$_smarty_tpl->tpl_vars['homeslider']->value['pause']),$_smarty_tpl);?>

<?php }?><?php }} ?>