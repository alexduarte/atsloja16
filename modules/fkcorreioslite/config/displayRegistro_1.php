<html>
<form action="<?php echo Tools::htmlentitiesUTF8($_SERVER['REQUEST_URI'])?>&id_tab=1&section=configRegistro_1" method="post" class="form" id="configRegistro_1">

	<div class="fkcorreios_opcoes">
		<input id="fkcorreios_button_ajuda" name="fkcorreios_button_ajuda" type="button" value="" onClick="window.open('<?php echo _MODULE_DIR_?>/fkcorreioslite/ajuda/registro_licenca.html','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=700,height=500,left=500,top=150'); return false;">
		<p>Ajuda</p>
	</div>
	
	<div class="fkcorreios_margin_form" id="fkcorreios_registro_1">
	
        <div class="fkcorreios_form_group">
            <label><?php echo $this->l('Referência do pedido:');?></label>
            <input type="text" name="fkcorreios_referencia" value="<?php echo (!Tools::getValue('fkcorreios_referencia') ? Configuration::get('FKCORREIOS_REFERENCIA') : Tools::getValue('fkcorreios_referencia'));?>">
        </div>

        <div class="fkcorreios_form_group">
            <label><?php echo $this->l('Domínio licenciado:');?></label>
            <input disabled type="text" name="fkcorreios_proprietario" size="40" maxlength="100" value="<?php echo Tools::getShopDomain(false,true)?>">
        </div>

        <div class="fkcorreios_form_group">
            <label><?php echo $this->l('Proprietário do domínio:');?></label>
            <input type="text" name="fkcorreios_proprietario" size="40" maxlength="100" value="<?php echo (!Tools::getValue('fkcorreios_proprietario') ? Configuration::get('FKCORREIOS_PROPRIETARIO') : Tools::getValue('fkcorreios_proprietario'));?>">
        </div>

        <div class="fkcorreios_div_button">
            <input class="fkcorreios_button" name="submitSave" type="submit" value="<?php echo $this->l('Enviar');?>">
        </div>

	</div>

</form>
</html>