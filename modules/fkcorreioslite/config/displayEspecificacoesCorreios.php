<html>

	<div class="fkcorreios_opcoes">
		<input id="fkcorreios_button_ajuda" name="fkcorreios_button_ajuda" type="button" value="" onClick="window.open('<?php echo _MODULE_DIR_?>/fkcorreioslite/ajuda/especificacoes_correios.html','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=700,height=500,left=500,top=150'); return false;">
		<p>Ajuda</p>
	</div>

	<?php
    // Verifica se existem especificacoes cadastrados para o shop, se nao existir cria
    $esp_correios = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'fkcorreios_especificacoes_correios` WHERE `id_shop` = '.$this->context->shop->id);

    if (!$esp_correios) {

        $sql = "INSERT INTO `"._DB_PREFIX_."fkcorreios_especificacoes_correios` (`id_shop`, `id_interno`, `servico`, `cod_servico`, `cod_administrativo`, `senha`, `comprimento_min`, `comprimento_max`, `largura_min`, `largura_max`, `altura_min`, `altura_max`, `somatoria_dimensoes_max`, `peso_estadual_max`, `peso_nacional_max`, `intervalo_pesos_estadual`, `intervalo_pesos_nacional`, `cubagem_max_isenta`, `cubagem_base_calculo`, `mao_propria_valor`, `aviso_recebimento_valor`, `valor_declarado_percentual`, `valor_declarado_max`, `seguro_automatico_valor`) VALUES
			('".$this->context->shop->id."', '2', 'PAC', 		'41106', '', '', '16', '105', '11', '105', '2', '105', '200', '30', '30', '1/2/3/4/5/6/7/8/9/10/11/12/13/14/15/16/17/18/19/20/21/22/23/24/25/26/27/28/29/30', 	    '1/2/3/4/5/6/7/8/9/10/11/12/13/14/15/16/17/18/19/20/21/22/23/24/25/26/27/28/29/30',     '0',        '6000',		'4', '3', '1', '10000', '50'),
			('".$this->context->shop->id."', '3', 'SEDEX', 		'40010', '', '', '16', '105', '11', '105', '2', '105', '200', '30', '30', '0.3/1/2/3/4/5/6/7/8/9/10/11/12/13/14/15/16/17/18/19/20/21/22/23/24/25/26/27/28/29/30', 	'0.3/1/2/3/4/5/6/7/8/9/10/11/12/13/14/15/16/17/18/19/20/21/22/23/24/25/26/27/28/29/30', '60000',    '6000', 	'4', '3', '1', '10000', '50');";

        Db::getInstance()->execute($sql);
    }

	$esp_correios = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'fkcorreios_especificacoes_correios` WHERE `id_shop` = '.$this->context->shop->id.' ORDER BY `servico`');
	foreach($esp_correios as $reg) {
	?>

	<form action="<?php echo Tools::htmlentitiesUTF8($_SERVER['REQUEST_URI'])?>&id_tab=6&section=configEspecifCorreios&id_esp_correios=<?php echo $reg['id']?>" method="post" class="form" id="configEspecifCorreios">
	
		<div class="fkcorreios_margin_form" id="fkcorreios_especificacoes_correios">
			
			<div class="fkcorreios_toggle_titulo" onclick="fkcorreiosToggle('fkcorreios_especificacoes_correios_itens_<?php echo $reg['id'];?>')">
                <?php echo $reg['servico'];?>
			</div>
			
			<div class="fkcorreios_toggle_itens" id="fkcorreios_especificacoes_correios_itens_<?php echo $reg['id'];?>">

                <div class="fkcorreios_form_group">
                    <label>Código serviço:</label>
                    <input disabled type="text" size="6" name="fkcorreios_cod_servico_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_cod_servico_'.$reg['id']) ? $reg['cod_servico'] : Tools::getValue('fkcorreios_cod_servico_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Código administrativo:</label>
                    <input disabled type="text" size="30" name="fkcorreios_cod_administrativo_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_cod_administrativo_'.$reg['id']) ? $reg['cod_administrativo'] : Tools::getValue('fkcorreios_cod_administrativo_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Senha:</label>
                    <input disabled type="password" size="10" maxlength="10" name="fkcorreios_senha_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_senha_'.$reg['id']) ? $reg['senha'] : Tools::getValue('fkcorreios_senha_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Comprimento mínimo:</label>
                    <input type="text" size="6" name="fkcorreios_comprimento_min_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_comprimento_min_'.$reg['id']) ? $reg['comprimento_min'] : Tools::getValue('fkcorreios_comprimento_min_'.$reg['id']));?>"/>
                    <label>Comprimento máximo:</label>
                    <input type="text" size="6" name="fkcorreios_comprimento_max_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_comprimento_max_'.$reg['id']) ? $reg['comprimento_max'] : Tools::getValue('fkcorreios_comprimento_max_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Largura mínima:</label>
                    <input type="text" size="6" name="fkcorreios_largura_min_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_largura_min_'.$reg['id']) ? $reg['largura_min'] : Tools::getValue('fkcorreios_largura_min_'.$reg['id']));?>"/>
                    <label>Largura máxima:</label>
                    <input type="text" size="6" name="fkcorreios_largura_max_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_largura_max_'.$reg['id']) ? $reg['largura_max'] : Tools::getValue('fkcorreios_largura_max_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Altura mínima:</label>
                    <input type="text" size="6" name="fkcorreios_altura_min_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_altura_min_'.$reg['id']) ? $reg['altura_min'] : Tools::getValue('fkcorreios_altura_min_'.$reg['id']));?>"/>
                    <label>Altura máxima:</label>
                    <input type="text" size="6" name="fkcorreios_altura_max_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_altura_max_'.$reg['id']) ? $reg['altura_max'] : Tools::getValue('fkcorreios_altura_max_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Somatória dimensões:</label>
                    <input type="text" size="6" name="fkcorreios_somatoria_dimensoes_max_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_somatoria_dimensoes_max_'.$reg['id']) ? $reg['somatoria_dimensoes_max'] : Tools::getValue('fkcorreios_somatoria_dimensoes_max_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Peso máximo - Estadual:</label>
                    <input type="text" size="6" name="fkcorreios_peso_estadual_max_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_peso_estadual_max_'.$reg['id']) ? $reg['peso_estadual_max'] : Tools::getValue('fkcorreios_peso_estadual_max_'.$reg['id']));?>"/>
                    <label>Peso máximo - Nacional:</label>
                    <input type="text" size="6" name="fkcorreios_peso_nacional_max_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_peso_nacional_max_'.$reg['id']) ? $reg['peso_nacional_max'] : Tools::getValue('fkcorreios_peso_nacional_max_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Intervalo de pesos - Estadual:</label>
                    <textarea style="width: 450px" disabled rows="2" name="fkcorreios_intervalo_pesos_estadual_<?php echo $reg['id'];?>"><?php echo (!Tools::getValue('fkcorreios_intervalo_pesos_estadual_'.$reg['id']) ? $reg['intervalo_pesos_estadual'] : Tools::getValue('fkcorreios_intervalo_pesos_estadual_'.$reg['id']));?></textarea>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Intervalo de pesos - Nacional:</label>
                    <textarea style="width: 450px"  disabled rows="2" name="fkcorreios_intervalo_pesos_nacional_<?php echo $reg['id'];?>"><?php echo (!Tools::getValue('fkcorreios_intervalo_pesos_nacional_'.$reg['id']) ? $reg['intervalo_pesos_nacional'] : Tools::getValue('fkcorreios_intervalo_pesos_nacional_'.$reg['id']));?></textarea>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Cubagem max isenta:</label>
                    <input disabled type="text" size="12" name="fkcorreios_cubagem_max_isenta_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_cubagem_max_isenta_'.$reg['id']) ? $reg['cubagem_max_isenta'] : Tools::getValue('fkcorreios_cubagem_max_isenta_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Cubagem base cálculo:</label>
                    <input disabled type="text" size="10" name="fkcorreios_cubagem_base_calculo_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_cubagem_base_calculo_'.$reg['id']) ? $reg['cubagem_base_calculo'] : Tools::getValue('fkcorreios_cubagem_base_calculo_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Valor Mão Própria:</label>
                    <input disabled type="text" size="6" name="fkcorreios_mao_propria_valor_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_mao_propria_valor_'.$reg['id']) ? $reg['mao_propria_valor'] : Tools::getValue('fkcorreios_mao_propria_valor_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Valor Aviso Recebimento:</label>
                    <input disabled type="text" size="6" name="fkcorreios_aviso_recebimento_valor_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_aviso_recebimento_valor_'.$reg['id']) ? $reg['aviso_recebimento_valor'] : Tools::getValue('fkcorreios_aviso_recebimento_valor_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Percentual Valor Declarado:</label>
                    <input disabled type="text" size="6" name="fkcorreios_valor_declarado_percentual_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_valor_declarado_percentual_'.$reg['id']) ? $reg['valor_declarado_percentual'] : Tools::getValue('fkcorreios_valor_declarado_percentual_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Máximo Valor Declarado:</label>
                    <input disabled type="text" size="9" name="fkcorreios_valor_declarado_max_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_valor_declarado_max_'.$reg['id']) ? $reg['valor_declarado_max'] : Tools::getValue('fkcorreios_valor_declarado_max_'.$reg['id']));?>"/>
                </div>
                <div class="fkcorreios_form_group">
                    <label>Seguro automático:</label>
                    <input disabled type="text" size="6" name="fkcorreios_seguro_automatico_valor_<?php echo $reg['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_seguro_automatico_valor_'.$reg['id']) ? $reg['seguro_automatico_valor'] : Tools::getValue('fkcorreios_seguro_automatico_valor_'.$reg['id']));?>"/>
                </div>

				<div class="fkcorreios_div_button">
						<input class="fkcorreios_button" name="submitSave" type="submit" value="<?php echo $this->l('Salvar');?>">
				</div>
				
			</div>
				
		</div>
		
	</form>
	
	<?php 		
	}
	?>

</html>