<?php /*%%SmartyHeaderCode:1058753bd810e204aa0-78858076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '944d20c6d54e852e9f4275c0ad0dbceb0aca9a19' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1399294042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1058753bd810e204aa0-78858076',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53bd810e295168_39079750',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bd810e295168_39079750')) {function content_53bd810e295168_39079750($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://localhost/atsloja/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Busca" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Busca</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>