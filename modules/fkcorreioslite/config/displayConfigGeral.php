<html>

<form action="<?php echo Tools::htmlentitiesUTF8($_SERVER['REQUEST_URI'])?>&id_tab=2&section=configGeral" method="post" class="form" id="configGeral">

	<div class="fkcorreios_opcoes">
		<input id="fkcorreios_button_ajuda" name="fkcorreios_button_ajuda" type="button" value="" onClick="window.open('<?php echo _MODULE_DIR_?>/fkcorreioslite/ajuda/config_gerais.html','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=700,height=500,left=500,top=150'); return false;">
		<p>Ajuda</p>
	</div>
	
	<div class="fkcorreios_margin_form" id="fkcorreios_config_geral">
	
        <div class="fkcorreios_divisao">
            <div><?php echo $this->l('Meu CEP');?></div>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input class="fkcorreios_text_cep" type="text" size="10" name="fkcorreios_meu_cep" value="<?php echo (!Tools::getValue('fkcorreios_meu_cep') ? Configuration::get('FKCORREIOS_MEU_CEP') : Tools::getValue('fkcorreios_meu_cep'));?>"/>
        </div>

        <div class="fkcorreios_divisao">
            <div><?php echo $this->l('CEP da minha cidade');?></div>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled class="fkcorreios_text_cep" type="text" size="10" id="fkcorreios_cidade_cep1" name="fkcorreios_cidade_cep1" value=""/>
            a
            <input disabled class="fkcorreios_text_cep" type="text" size="10" id="fkcorreios_cidade_cep2" name="fkcorreios_cidade_cep2" value=""/>
            <input disabled class="fkcorreios_button" name="button" type="button" value="<?php echo $this->l('Incluir');?>">
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <textarea disabled rows="2" id="fkcorreios_cep_cidade" name="fkcorreios_cep_cidade"><?php echo (!Tools::getValue('fkcorreios_cep_cidade') ? Configuration::get('FKCORREIOS_CEP_CIDADE') : Tools::getValue('fkcorreios_cep_cidade'));?></textarea>
        </div>

        <div class="fkcorreios_divisao">
            <div><?php echo $this->l('Correios');?></div>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled type="checkbox" name="fkcorreios_offline" value="on" <?php echo ((Configuration::get('FKCORREIOS_OFFLINE') == 'on') ? 'checked="checked"' : '')?>/> <?php echo $this->l('Cálculo com base somente nas tabelas offline');?>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled type="checkbox" name="fkcorreios_mao_propria" value="on" <?php echo ((Configuration::get('FKCORREIOS_MAO_PROPRIA') == 'on') ? 'checked="checked"' : '')?>/> <?php echo $this->l('Mão própria');?>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled type="checkbox" name="fkcorreios_valor_declarado" value="on" <?php echo ((Configuration::get('FKCORREIOS_VALOR_DECLARADO') == 'on') ? 'checked="checked"' : '')?>/> <?php echo $this->l('Valor declarado');?>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled type="checkbox" name="fkcorreios_aviso_recebimento" value="on" <?php echo ((Configuration::get('FKCORREIOS_AVISO_RECEBIMENTO') == 'on') ? 'checked="checked"' : '')?>/> <?php echo $this->l('Aviso de recebimento');?>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled value="0" name="fkcorreios_calculo_serv_adic" type="radio" <?php echo (Configuration::get('FKCORREIOS_CALCULO_SERV_ADIC') == '0' ? 'checked="checked" ' : '')?>> <?php echo $this->l('Considerar embalagem');?>
        </div>
        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled value="1" name="fkcorreios_calculo_serv_adic" type="radio" <?php echo (Configuration::get('FKCORREIOS_CALCULO_SERV_ADIC') == '1' ? 'checked="checked" ' : '')?>> <?php echo $this->l('Considerar pedido');?>
        </div>


        <div class="fkcorreios_divisao">
            <div><?php echo $this->l('Frete e envio');?></div>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled type="number" name="fkcorreios_tempo_preparacao" value="<?php echo (!Tools::getValue('fkcorreios_tempo_preparacao') ? Configuration::get('FKCORREIOS_TEMPO_PREPARACAO') : Tools::getValue('fkcorreios_tempo_preparacao'));?>"/> <?php echo $this->l('Tempo de preparação em dias');?>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled type="text" size="10" name="fkcorreios_custos_envio" value="<?php echo (!Tools::getValue('fkcorreios_custos_envio') ? Configuration::get('FKCORREIOS_CUSTOS_ENVIO') : Tools::getValue('fkcorreios_custos_envio'));?>"/> <?php echo $this->l('Custos de envio');?>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input value="1" name="fkcorreios_embalagem" type="radio" <?php echo (Configuration::get('FKCORREIOS_EMBALAGEM') == '1' ? 'checked="checked" ' : '')?>> <?php echo $this->l('Utilizar embalagens padrões');?>
        </div>
        <div class="fkcorreios_form_group">
            <label></label>
            <input value="0" name="fkcorreios_embalagem" type="radio" <?php echo (Configuration::get('FKCORREIOS_EMBALAGEM') == '0' ? 'checked="checked" ' : '');?>> <?php echo $this->l('Utilizar embalagens individuais')?>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled type="checkbox" name="fkcorreios_frete_gratis_transp" value="on" <?php echo ((Configuration::get('FKCORREIOS_FRETE_GRATIS_TRANSP') == 'on') ? 'checked="checked"' : '')?>/> <?php echo $this->l('Quando frete grátis, disponibilizar demais transportadoras com valores');?>
        </div>
        <div class="fkcorreios_form_group">
            <label></label>
            <input disabled type="checkbox" name="fkcorreios_calculo_logado" value="on" <?php echo ((Configuration::get('FKCORREIOS_CALCULO_LOGADO') == 'on') ? 'checked="checked"' : '')?>/> <?php echo $this->l('Calcular frete (carrinho de compras) somente com o cliente logado');?>
        </div>

        <div class="fkcorreios_divisao">
            <div><?php echo $this->l('Bloco de informações');?></div>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input type="checkbox" name="fkcorreios_bloco_produto" value="on" <?php echo ((Configuration::get('FKCORREIOS_BLOCO_PRODUTO') == 'on') ? 'checked="checked"' : '');?>/> <?php echo $this->l('Produto')?>
        </div>

        <div class="fkcorreios_form_group">
            <label></label>
            <input type="checkbox" name="fkcorreios_bloco_carrinho" value="on" <?php echo ((Configuration::get('FKCORREIOS_BLOCO_CARRINHO') == 'on') ? 'checked="checked"' : '');?>/> <?php echo $this->l('Carrinho')?>
        </div>

        <div class="fkcorreios_div_button">
            <input class="fkcorreios_button" name="submitSave" type="submit" value="<?php echo $this->l('Salvar');?>">

            <div>
                <input class="fkcorreios_button_warning" name="submitCache" type="submit" value="<?php echo $this->l('Limpar cache');?>" onclick="return fkcorreiosExcluir('<?php echo $this->l('Confirma a exclusão do cache?')?>');">
            </div>
        </div>

    </div>

</form>

</html>
