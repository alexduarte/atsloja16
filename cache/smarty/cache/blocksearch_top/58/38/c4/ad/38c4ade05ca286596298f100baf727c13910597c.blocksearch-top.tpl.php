<?php /*%%SmartyHeaderCode:2411953cd752d42ef94-56271367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38c4ade05ca286596298f100baf727c13910597c' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1405963728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2411953cd752d42ef94-56271367',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53cd752d4d62b0_24235762',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd752d4d62b0_24235762')) {function content_53cd752d4d62b0_24235762($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://localhost/atsloja16/search" >
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