<?php /*%%SmartyHeaderCode:2296153cd7571ef49f3-90160611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff3c9d1dbf6ed0c45bafc0b55401bd5d5604f198' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\themes\\default-bootstrap\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1406027817,
      2 => 'file',
    ),
    '4249883343be96d1c3afb426de03f84631f08200' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\themes\\default-bootstrap\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1406027817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2296153cd7571ef49f3-90160611',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53ce487384dd58_64723992',
  'variables' => 
  array (
    'blockCategTree' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ce487384dd58_64723992')) {function content_53ce487384dd58_64723992($_smarty_tpl) {?><!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h2 class="title_block">
					Categorias
			</h2>
	<div class="block_content">
		<ul class="tree dhtml">
												
<li >
	<a 
	href="http://localhost/atsloja16/3-camisas" title="CAMISAS">
		CAMISAS
	</a>
			<ul>
												
<li >
	<a 
	href="http://localhost/atsloja16/5-feminino" title="">
		FEMININO
	</a>
	</li>

																
<li class="last">
	<a 
	href="http://localhost/atsloja16/6-masculino" title="MASCULINO">
		MASCULINO
	</a>
	</li>

									</ul>
	</li>

																
<li class="last">
	<a 
	href="http://localhost/atsloja16/7-calcas" title="CALÇAS">
		CALÇAS
	</a>
			<ul>
												
<li >
	<a 
	href="http://localhost/atsloja16/8-feminino" title="FEMININO">
		FEMININO
	</a>
	</li>

																
<li class="last">
	<a 
	href="http://localhost/atsloja16/10-masculino" title="">
		MASCULINO
	</a>
	</li>

									</ul>
	</li>

									</ul>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>