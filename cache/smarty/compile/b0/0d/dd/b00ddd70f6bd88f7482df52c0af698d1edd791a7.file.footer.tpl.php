<?php /* Smarty version Smarty-3.1.14, created on 2014-07-09 13:51:12
         compiled from "C:\wamp\www\atsloja\themes\default-bootstrap\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242953bd81104152b2-68706420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b00ddd70f6bd88f7482df52c0af698d1edd791a7' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja\\themes\\default-bootstrap\\footer.tpl',
      1 => 1403371074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242953bd81104152b2-68706420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53bd8110446cd1_87347237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bd8110446cd1_87347237')) {function content_53bd8110446cd1_87347237($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)){?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer"  class="container">
					<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</body>
</html><?php }} ?>