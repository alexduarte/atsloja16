<?php /* Smarty version Smarty-3.1.14, created on 2014-07-21 16:23:54
         compiled from "C:\wamp\www\atsloja16\themes\default-bootstrap\order-carrier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:493153cd76da310559-39631075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbac4659522686ab87d692ec0231b9ba5ae2d172' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\themes\\default-bootstrap\\order-carrier.tpl',
      1 => 1405963728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '493153cd76da310559-39631075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opc' => 0,
    'multi_shipping' => 0,
    'link' => 0,
    'virtual_cart' => 0,
    'carriers' => 0,
    'HOOK_BEFORECARRIER' => 0,
    'isVirtualCart' => 0,
    'recyclablePackAllowed' => 0,
    'recyclable' => 0,
    'delivery_option_list' => 0,
    'id_address' => 0,
    'address_collection' => 0,
    'option_list' => 0,
    'key' => 0,
    'delivery_option' => 0,
    'option' => 0,
    'carrier' => 0,
    'cookie' => 0,
    'free_shipping' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'product' => 0,
    'HOOK_EXTRACARRIER_ADDR' => 0,
    'cart' => 0,
    'address' => 0,
    'giftAllowed' => 0,
    'gift_wrapping_price' => 0,
    'total_wrapping_tax_exc_cost' => 0,
    'total_wrapping_cost' => 0,
    'conditions' => 0,
    'cms_id' => 0,
    'checkedTOS' => 0,
    'link_conditions' => 0,
    'back' => 0,
    'is_guest' => 0,
    'currencySign' => 0,
    'currencyRate' => 0,
    'currencyFormat' => 0,
    'currencyBlank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53cd76da8df824_84150365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd76da8df824_84150365')) {function content_53cd76da8df824_84150365($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Shipping:'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->tpl_vars['current_step'] = new Smarty_variable('shipping', null, 0);?>
	<div id="carrier_area">
		<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Shipping:'),$_smarty_tpl);?>
</h1>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<form id="form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
" method="post" name="carrier_area">
<?php }else{ ?>
	<div id="carrier_area" class="opc-main-block">
		<h1 class="page-heading step-num"><span>2</span> <?php echo smartyTranslate(array('s'=>'Delivery methods'),$_smarty_tpl);?>
</h1>
			<div id="opc_delivery_methods" class="opc-main-block">
				<div id="opc_delivery_methods-overlay" class="opc-overlay" style="display: none;"></div>
<?php }?>
<div class="order_carrier_content box">
	<?php if (isset($_smarty_tpl->tpl_vars['virtual_cart']->value)&&$_smarty_tpl->tpl_vars['virtual_cart']->value){?>
		<input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
	<?php }else{ ?>
		<div id="HOOK_BEFORECARRIER">
			<?php if (isset($_smarty_tpl->tpl_vars['carriers']->value)&&isset($_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value)){?>
				<?php echo $_smarty_tpl->tpl_vars['HOOK_BEFORECARRIER']->value;?>

			<?php }?>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)&&$_smarty_tpl->tpl_vars['isVirtualCart']->value){?>
			<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No carrier is needed for this order.'),$_smarty_tpl);?>
</p>
		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value){?>
				<div class="checkbox">
					<label for="recyclable">
						<input type="checkbox" name="recyclable" id="recyclable" value="1" <?php if ($_smarty_tpl->tpl_vars['recyclable']->value==1){?>checked="checked"<?php }?> />
						<?php echo smartyTranslate(array('s'=>'I would like to receive my order in recycled packaging.'),$_smarty_tpl);?>
.
					</label>
				</div>
			<?php }?>
			<div class="delivery_options_address">
				<?php if (isset($_smarty_tpl->tpl_vars['delivery_option_list']->value)){?>
					<?php  $_smarty_tpl->tpl_vars['option_list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_list']->_loop = false;
 $_smarty_tpl->tpl_vars['id_address'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_list']->key => $_smarty_tpl->tpl_vars['option_list']->value){
$_smarty_tpl->tpl_vars['option_list']->_loop = true;
 $_smarty_tpl->tpl_vars['id_address']->value = $_smarty_tpl->tpl_vars['option_list']->key;
?>
						<p class="carrier_title">
							<?php if (isset($_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value])){?>
								<?php echo smartyTranslate(array('s'=>'Choose a shipping option for this address:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['address_collection']->value[$_smarty_tpl->tpl_vars['id_address']->value]->alias;?>

							<?php }else{ ?>
								<?php echo smartyTranslate(array('s'=>'Choose a shipping option'),$_smarty_tpl);?>

							<?php }?>
						</p>
						<div class="delivery_options">
							<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['option']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
 $_smarty_tpl->tpl_vars['option']->index++;
?>
								<div class="delivery_option item">
									<div>
										<table class="resume table table-bordered">
											<tr>
												<td class="delivery_option_radio">
													<input id="delivery_option_<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['option']->index;?>
" class="delivery_option_radio" type="radio" name="delivery_option[<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
]" data-key="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-id_address="<?php echo intval($_smarty_tpl->tpl_vars['id_address']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])&&$_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value]==$_smarty_tpl->tpl_vars['key']->value){?> checked="checked"<?php }?> />
												</td>
												<td class="delivery_option_logo">
													<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value){
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
?>
														<?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']){?>
															<img src="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>
"/>
														<?php }elseif(!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']){?>
															<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>

															<?php if (!$_smarty_tpl->tpl_vars['carrier']->last){?> - <?php }?>
														<?php }?>
													<?php } ?>
												</td>
												<td>
													<?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']){?>
														<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value){
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
?>
															<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>

														<?php } ?>
														<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang])){?>
															<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>

														<?php }?>
													<?php }?>
													<?php if (count($_smarty_tpl->tpl_vars['option_list']->value)>1){?>
														<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_grade']){?>
															<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']){?>
																<?php echo smartyTranslate(array('s'=>'The best price and speed'),$_smarty_tpl);?>

															<?php }else{ ?>
																<?php echo smartyTranslate(array('s'=>'The fastest'),$_smarty_tpl);?>

															<?php }?>
														<?php }else{ ?>
															<?php if ($_smarty_tpl->tpl_vars['option']->value['is_best_price']){?>
																<?php echo smartyTranslate(array('s'=>'The best price'),$_smarty_tpl);?>

															<?php }?>
														<?php }?>
													<?php }?>
												</td>
												<td class="delivery_option_price">
													<div class="delivery_option_price">
														<?php if ($_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']&&!$_smarty_tpl->tpl_vars['option']->value['is_free']&&(!isset($_smarty_tpl->tpl_vars['free_shipping']->value)||(isset($_smarty_tpl->tpl_vars['free_shipping']->value)&&!$_smarty_tpl->tpl_vars['free_shipping']->value))){?>
															<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value==1){?>
																<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
																	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>

																<?php }else{ ?>
																	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_with_tax']),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>

																<?php }?>
															<?php }else{ ?>
																<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['option']->value['total_price_without_tax']),$_smarty_tpl);?>

															<?php }?>
														<?php }else{ ?>
															<?php echo smartyTranslate(array('s'=>'Free'),$_smarty_tpl);?>

														<?php }?>
													</div>
												</td>
											</tr>
										</table>
										<table class="delivery_option_carrier <?php if (isset($_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value])&&$_smarty_tpl->tpl_vars['delivery_option']->value[$_smarty_tpl->tpl_vars['id_address']->value]==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']){?>not-displayable<?php }?>">
											<?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['carrier_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['carrier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['carrier']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value){
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier']->iteration++;
 $_smarty_tpl->tpl_vars['carrier']->last = $_smarty_tpl->tpl_vars['carrier']->iteration === $_smarty_tpl->tpl_vars['carrier']->total;
?>
												<tr>
													<?php if (!$_smarty_tpl->tpl_vars['option']->value['unique_carrier']){?>
														<td class="first_item">
															<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->id;?>
" name="id_carrier" />
															<?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']){?>
																<img src="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>
"/>
															<?php }?>
														</td>
														<td>
															<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->name;?>

														</td>
													<?php }?>
													<td <?php if ($_smarty_tpl->tpl_vars['option']->value['unique_carrier']){?>class="first_item" <?php }?>>
														<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->id;?>
" name="id_carrier" />
														<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang])){?>
															<i class="icon-info-sign"></i><?php echo $_smarty_tpl->tpl_vars['carrier']->value['instance']->delay[$_smarty_tpl->tpl_vars['cookie']->value->id_lang];?>

															<?php if (count($_smarty_tpl->tpl_vars['carrier']->value['product_list'])<=1){?>
																(<?php echo smartyTranslate(array('s'=>'Product concerned:'),$_smarty_tpl);?>

															<?php }else{ ?>
																(<?php echo smartyTranslate(array('s'=>'Products concerned:'),$_smarty_tpl);?>

															<?php }?>
															
															<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrier']->value['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
																<?php if ($_smarty_tpl->tpl_vars['product']->index==4){?>
																	<acronym title="
																<?php }?>
																<?php if ($_smarty_tpl->tpl_vars['product']->index>=4){?>
																	<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']){?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>
																	<?php if (!$_smarty_tpl->tpl_vars['product']->last){?>
																		,&nbsp;
																	<?php }else{ ?>
																		">&hellip;</acronym>)
																	<?php }?>
																<?php }else{ ?>
																	<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes'])&&$_smarty_tpl->tpl_vars['product']->value['attributes']){?> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>
																	<?php if (!$_smarty_tpl->tpl_vars['product']->last){?>
																		,&nbsp;
																	<?php }else{ ?>
																		)
																	<?php }?>
																<?php }?>
															<?php } ?>
														<?php }?>
													</td>
												</tr>
											<?php } ?>
										</table>
									</div>
								</div> <!-- end delivery_option -->
							<?php } ?>
						</div> <!-- end delivery_options -->
						<div class="hook_extracarrier" id="HOOK_EXTRACARRIER_<?php echo $_smarty_tpl->tpl_vars['id_address']->value;?>
">
							<?php if (isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value)&&isset($_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value])){?><?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRACARRIER_ADDR']->value[$_smarty_tpl->tpl_vars['id_address']->value];?>
<?php }?>
						</div>
						<?php }
if (!$_smarty_tpl->tpl_vars['option_list']->_loop) {
?>
							<p class="alert alert-warning" id="noCarrierWarning">
								<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value->getDeliveryAddressesWithoutCarriers(true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['address']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['address']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value){
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['address']->iteration++;
 $_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
?>
									<?php if (empty($_smarty_tpl->tpl_vars['address']->value->alias)){?>
										<?php echo smartyTranslate(array('s'=>'No carriers available.'),$_smarty_tpl);?>

									<?php }else{ ?>
										<?php echo smartyTranslate(array('s'=>'No carriers available for the address "%s".','sprintf'=>$_smarty_tpl->tpl_vars['address']->value->alias),$_smarty_tpl);?>

									<?php }?>
									<?php if (!$_smarty_tpl->tpl_vars['address']->last){?>
										<br />
									<?php }?>
								<?php }
if (!$_smarty_tpl->tpl_vars['address']->_loop) {
?>
									<?php echo smartyTranslate(array('s'=>'No carriers available.'),$_smarty_tpl);?>

								<?php } ?>
							</p>
						<?php } ?>
					<?php }?>
				</div> <!-- end delivery_options_address -->
				<div id="extra_carrier" style="display: none;"></div>
					<?php if ($_smarty_tpl->tpl_vars['giftAllowed']->value){?>
						<p class="carrier_title"><?php echo smartyTranslate(array('s'=>'Gift'),$_smarty_tpl);?>
</p>
						<p class="checkbox gift">
							<input type="checkbox" name="gift" id="gift" value="1" <?php if ($_smarty_tpl->tpl_vars['cart']->value->gift==1){?>checked="checked"<?php }?> />
							<label for="gift">
								<?php echo smartyTranslate(array('s'=>'I would like my order to be gift wrapped.'),$_smarty_tpl);?>

								<?php if ($_smarty_tpl->tpl_vars['gift_wrapping_price']->value>0){?>
									&nbsp;<i>(<?php echo smartyTranslate(array('s'=>'Additional cost of'),$_smarty_tpl);?>

									<span class="price" id="gift-price">
										<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_tax_exc_cost']->value),$_smarty_tpl);?>

										<?php }else{ ?>
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['total_wrapping_cost']->value),$_smarty_tpl);?>

										<?php }?>
									</span>
									<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value){?>
										<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==1){?>
											<?php echo smartyTranslate(array('s'=>'(tax excl.)'),$_smarty_tpl);?>

										<?php }else{ ?>
											<?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>

										<?php }?>
									<?php }?>)
									</i>
								<?php }?>
							</label>
						</p>
						<p id="gift_div" class="form-group">
							<label for="gift_message"><?php echo smartyTranslate(array('s'=>'If you\'d like, you can add a note to the gift:'),$_smarty_tpl);?>
</label>
							<textarea rows="5" cols="35" id="gift_message" class="form-control" name="gift_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value->gift_message, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</p>
					<?php }?>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['conditions']->value&&$_smarty_tpl->tpl_vars['cms_id']->value){?>
				<p class="carrier_title"><?php echo smartyTranslate(array('s'=>'Terms of service'),$_smarty_tpl);?>
</p>
				<p class="checkbox">
					<input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value){?>checked="checked"<?php }?> />
					<label for="cgv"><?php echo smartyTranslate(array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl);?>
</label>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow"><?php echo smartyTranslate(array('s'=>'(Read the Terms of Service)'),$_smarty_tpl);?>
</a>
				</p>
			<?php }?>
		</div> <!-- end delivery_options_address -->
		<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?>
				<p class="cart_navigation clearfix">
					<input type="hidden" name="step" value="3" />
					<input type="hidden" name="back" value="<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
" />
					<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value){?>
						<?php if ($_smarty_tpl->tpl_vars['back']->value){?>
							<a 
								href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=1&back=".((string)$_smarty_tpl->tpl_vars['back']->value)."&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
"
								title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
"
								class="button-exclusive btn btn-default">
								<i class="icon-chevron-left"></i>
								<?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>

							</a>
						<?php }else{ ?>
							<a
								href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"step=1&multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
"
								title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
"
								class="button-exclusive btn btn-default">
								<i class="icon-chevron-left"></i>
								<?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>

							</a>
						<?php }?>
					<?php }else{ ?>
						<a
							href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"multi-shipping=".((string)$_smarty_tpl->tpl_vars['multi_shipping']->value)), ENT_QUOTES, 'UTF-8', true);?>
"
							title="<?php echo smartyTranslate(array('s'=>'Previous'),$_smarty_tpl);?>
"
							class="button-exclusive btn btn-default">
							<i class="icon-chevron-left"></i>
							<?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>

						</a>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['virtual_cart']->value)&&$_smarty_tpl->tpl_vars['virtual_cart']->value||(isset($_smarty_tpl->tpl_vars['delivery_option_list']->value)&&!empty($_smarty_tpl->tpl_vars['delivery_option_list']->value))){?>
						<button type="submit" name="processCarrier" class="button btn btn-default standard-checkout button-medium">
							<span>
								<?php echo smartyTranslate(array('s'=>'Proceed to checkout'),$_smarty_tpl);?>

								<i class="icon-chevron-right right"></i>
							</span>
						</button>
					<?php }?>
				</p>
			</form>
	<?php }else{ ?>
		</div> <!-- end opc_delivery_methods -->
	<?php }?>
</div> <!-- end carrier_area -->
<?php if (!$_smarty_tpl->tpl_vars['opc']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('orderProcess'=>'order'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencySign'=>html_entity_decode($_smarty_tpl->tpl_vars['currencySign']->value,2,"UTF-8")),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyRate'=>floatval($_smarty_tpl->tpl_vars['currencyRate']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyFormat'=>intval($_smarty_tpl->tpl_vars['currencyFormat']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currencyBlank'=>intval($_smarty_tpl->tpl_vars['currencyBlank']->value)),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['virtual_cart']->value)&&!$_smarty_tpl->tpl_vars['virtual_cart']->value&&$_smarty_tpl->tpl_vars['giftAllowed']->value&&$_smarty_tpl->tpl_vars['cart']->value->gift==1){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('cart_gift'=>true),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('cart_gift'=>false),$_smarty_tpl);?>
<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('orderUrl'=>addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("order",true))),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProduct')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProduct'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'txtProducts')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Products','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'txtProducts'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'msg_order_carrier')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'msg_order_carrier'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You must agree to the terms of service before continuing.','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'msg_order_carrier'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }} ?>