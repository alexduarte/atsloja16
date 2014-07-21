<html>

<form action="<?php echo Tools::htmlentitiesUTF8($_SERVER['REQUEST_URI'])?>&id_tab=4&section=configPrazoEntrega" method="post" class="form" id="configPrazoEntrega">

	<div class="fkcorreios_opcoes">
		<input id="fkcorreios_button_ajuda" name="fkcorreios_button_ajuda" type="button" value="" onClick="window.open('<?php echo _MODULE_DIR_?>/fkcorreioslite/ajuda/prazos_entrega.html','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=700,height=500,left=500,top=150'); return false;">
		<p>Ajuda</p>
	</div>
	
	<?php 
		// Verifica se existem prazos de entrega cadastrados para o shop, se nao existir cria
		$prazos_entrega = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'fkcorreios_prazos_entrega WHERE `id_shop` = '.$this->context->shop->id);
	
		if (!$prazos_entrega) {

			$estados = Db::getInstance()->executeS('SELECT `estado` FROM `'._DB_PREFIX_.'fkcorreios_cadastro_cep` ORDER BY `estado`');
			foreach($estados as $estado) {

				$dados = array(
					'id_shop' 			=> $this->context->shop->id,
					'estado' 			=> $estado['estado'],
					'correios_capital' 	=> '0',
					'correios_interior' => '0'
				);

				Db::getInstance()->insert('fkcorreios_prazos_entrega', $dados);
			}
		}
	?>
	
	<div class="fkcorreios_margin_form" id="fkcorreios_prazo_entrega">
		<table>
	    	<tr>
	        	<th><?php echo $this->l('Estado');?></th>
	            <th><?php echo $this->l('Capital');?></th>
	            <th><?php echo $this->l('Interior');?></th>
	         </tr>
	         
	         <?php 
		         $prazos_entrega = Db::getInstance()->executeS('SELECT * FROM '._DB_PREFIX_.'fkcorreios_prazos_entrega WHERE `id_shop` = '.$this->context->shop->id.' ORDER BY `estado` ASC');
		         foreach ($prazos_entrega as $reg) {
		     ?>
		         
		     <tr>
		     <td><?php echo $reg['estado'];?></td>
		     <td><input disabled type="number" name="fkcorreios_correios_capital_<?php echo $reg['id'];?>" size="2" value="<?php echo (!Tools::getValue('fkcorreios_correios_capital_'.$reg['id']) ? $reg['correios_capital'] : Tools::getValue('fkcorreios_correios_capital_'.$reg['id']));?>"/></td>
		     <td><input disabled type="number" name="fkcorreios_correios_interior_<?php echo $reg['id'];?>" size="2" value="<?php echo (!Tools::getValue('fkcorreios_correios_interior_'.$reg['id']) ? $reg['correios_interior'] : Tools::getValue('fkcorreios_correios_interior_'.$reg['id']));?>"/></td>
		     </tr>
		         	
		     <?php    
		         }
	         ?>
		</table>
		
		<div class="fkcorreios_div_button">
			<input disabled class="fkcorreios_button" name="submitSave" type="submit" value="<?php echo $this->l('Salvar');?>">
		</div>
	
	</div>
</form>

</html>