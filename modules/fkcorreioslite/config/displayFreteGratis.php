<html>

    <form action="<?php echo Tools::htmlentitiesUTF8($_SERVER['REQUEST_URI'])?>&id_tab=8&section=configFreteGratis" method="post" class="form" id="configFreteGratisOpcoes">
        <div class="fkcorreios_opcoes">
            <input id="fkcorreios_submit_add" name="submitAdd" type="submit" value="">
            <p>Adicionar Região</p>

            <input id="fkcorreios_button_ajuda" name="fkcorreios_button_ajuda" type="button" value="" onClick="window.open('<?php echo _MODULE_DIR_?>/fkcorreioslite/ajuda/frete_gratis.html','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=700,height=500,left=500,top=150'); return false;">
            <p>Ajuda</p>
        </div>
    </form>

    <?php
    // Recupera os dados das regioes de frete gratis
    $sql_frete_gratis = 'SELECT * FROM `'._DB_PREFIX_.'fkcorreios_frete_gratis` WHERE `id_shop` = '.$this->context->shop->id;
    $frete_gratis = Db::getInstance()->executeS($sql_frete_gratis);

    foreach($frete_gratis as $reg_frete_gratis) {
    ?>

    <form action="<?php echo Tools::htmlentitiesUTF8($_SERVER['REQUEST_URI'])?>&id_tab=8&section=configFreteGratis&id_frete_gratis=<?php echo $reg_frete_gratis['id']?>" method="post" class="form" id="configFreteGratis">

        <div class="fkcorreios_margin_form" id="fkcorreios_frete_gratis">

            <div class="fkcorreios_toggle_titulo" onclick="fkcorreiosToggle('fkcorreios_frete_gratis_itens_<?php echo $reg_frete_gratis['id'];?>')">
                <?php echo $reg_frete_gratis['nome_regiao'];?>
            </div>

            <div class="fkcorreios_toggle_itens" id="fkcorreios_frete_gratis_itens_<?php echo $reg_frete_gratis['id'];?>">

                <div class="fkcorreios_form_group">
                    <label>Nome região:</label>
                    <input type="text" size="60" name="fkcorreios_frete_gratis_nome_regiao_<?php echo $reg_frete_gratis['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_frete_gratis_nome_regiao_'.$reg_frete_gratis['id']) ? $reg_frete_gratis['nome_regiao'] : Tools::getValue('fkcorreios_frete_gratis_nome_regiao_'.$reg_frete_gratis['id']));?>"/>
                </div>

                <div class="fkcorreios_form_group">
                    <label>Região ativa:</label>
                    <input type="checkbox" name="fkcorreios_frete_gratis_ativo_<?php echo $reg_frete_gratis['id'];?>" value="on" <?php echo ($reg_frete_gratis['ativo'] == 1 ? 'checked="checked"' : '');?>/>
                </div>

                <div class="fkcorreios_form_group">
                    <label><?php echo $this->l('Estados atendidos:')?></label>
                </div>

                <div class="fkcorreios_estados_atendidos">

                    <?php
                    $sql_estados = 'SELECT `estado` FROM `'._DB_PREFIX_.'fkcorreios_cadastro_cep` ORDER BY `estado`';
                    $estados = Db::getInstance()->executeS($sql_estados);
                    foreach($estados as $estado) {
                    ?>

                    <div>
                        <input disabled type="checkbox" class="fkcorreios_frete_gratis_uf_<?php echo $reg_frete_gratis['id'];?>" name="fkcorreios_frete_gratis_uf_<?php echo $reg_frete_gratis['id'].'[]';?>" value="<?php echo $estado['estado'];?>" checked="checked"><?php echo ' '.$estado['estado'];?>
                    </div>

                    <?php
                    }
                    ?>

                    <br><br>
                    <input disabled class="fkcorreios_button" name="button" type="button" value="<?php echo $this->l('Marcar todos');?>">
                    <input disabled class="fkcorreios_button" name="button" type="button" value="<?php echo $this->l('Desmarcar todos');?>">

                </div>

                <div class="fkcorreios_form_group">
                    <label><?php echo $this->l('Intervalo CEPs atendidos:')?></label>
                    <input disabled class="fkcorreios_text_cep" type="text" size="10" id="fkcorreios_frete_gratis_cep1_<?php echo $reg_frete_gratis['id'];?>" name="fkcorreios_frete_gratis_cep1_<?php echo $reg_frete_gratis['id'];?>" value=""/>
                    a
                    <input disabled class="fkcorreios_text_cep" type="text" size="10" id="fkcorreios_frete_gratis_cep2_<?php echo $reg_frete_gratis['id'];?>" name="fkcorreios_frete_gratis_cep2_<?php echo $reg_frete_gratis['id'];?>" value=""/>
                    <input disabled class="fkcorreios_button" name="button" type="button" value="<?php echo $this->l('Incluir');?>">
                </div>

                <div class="fkcorreios_form_group">
                    <label></label>
                    <textarea style="width: 492px;" disabled rows="4" id="fkcorreios_frete_gratis_intervalos_cep_<?php echo $reg_frete_gratis['id'];?>" name="fkcorreios_frete_gratis_intervalos_cep_<?php echo $reg_frete_gratis['id'];?>"><?php echo (!Tools::getValue('fkcorreios_frete_gratis_intervalos_cep_'.$reg_frete_gratis['id']) ? $reg_frete_gratis['regiao_cep'] : Tools::getValue('fkcorreios_frete_gratis_intervalos_cep_'.$reg_frete_gratis['id']));?></textarea>
                </div>

                <div class="fkcorreios_form_group">
                    <label><?php echo $this->l('Valor pedido:');?></label>
                    <input type="text" size="8" name="fkcorreios_frete_gratis_valor_pedido_<?php echo $reg_frete_gratis['id'];?>" value="<?php echo (!Tools::getValue('fkcorreios_frete_gratis_valor_pedido_'.$reg_frete_gratis['id']) ? $reg_frete_gratis['valor_pedido'] : Tools::getValue('fkcorreios_frete_gratis_valor_pedido_'.$reg_frete_gratis['id']));?>"/>
                </div>

                <div class="fkcorreios_form_group">
                    <label></label>
                    <span>Valor 0 (zero) indica que a região não será selecionada de acordo com o valor do pedido.</span>
                </div>

                <div class="fkcorreios_form_group">
                    <label><?php echo $this->l('Produtos:')?></label>
                    <input disabled style="width: 70px;" type="number" id="fkcorreios_frete_gratis_produto_<?php echo $reg_frete_gratis['id'];?>" name="fkcorreios_frete_gratis_produto_<?php echo $reg_frete_gratis['id'];?>" value=""/>
                    <input disabled class="fkcorreios_button" name="button" type="button" value="<?php echo $this->l('Incluir');?>">
                </div>

                <div class="fkcorreios_form_group">
                    <label></label>
                    <textarea style="width: 492px;" disabled rows="4" id="fkcorreios_frete_gratis_relacao_produtos_<?php echo $reg_frete_gratis['id'];?>" name="fkcorreios_frete_gratis_relacao_produtos_<?php echo $reg_frete_gratis['id'];?>"><?php echo (!Tools::getValue('fkcorreios_frete_gratis_relacao_produtos_'.$reg_frete_gratis['id']) ? $reg_frete_gratis['id_produtos'] : Tools::getValue('fkcorreios_frete_gratis_relacao_produtos_'.$reg_frete_gratis['id']));?></textarea>
                </div>

                <div class="fkcorreios_form_group">
                    <label><?php echo $this->l('Transportadora:')?></label>
                </div>

                <br>

                <?php
                $correios_transp = Db::getInstance()->executeS('SELECT `id`, `nome_carrier` FROM `'._DB_PREFIX_.'fkcorreios_correios_transp` WHERE `id_shop` = '.$this->context->shop->id.' ORDER BY `nome_carrier`');

                foreach($correios_transp as $reg_correios_transp) {
                ?>

                <div class="fkcorreios_form_group">
                    <label></label>
                    <input type="radio" name="fkcorreios_frete_gratis_servico_<?php echo $reg_frete_gratis['id'];?>" value="<?php echo $reg_correios_transp['id'];?>" <?php echo ($reg_frete_gratis['id_correios_transp'] == $reg_correios_transp['id'] ? 'checked="checked"' : '');?>><?php echo ' '.$reg_correios_transp['nome_carrier'];?>
                </div>

                <?php
                }
                ?>

                <div class="fkcorreios_div_button">
                    <input class="fkcorreios_button" name="submitSave" type="submit" value="<?php echo $this->l('Salvar');?>">

                    <div>
                        <input class="fkcorreios_button_warning" name="submitDel" type="submit" value="<?php echo $this->l('Excluir região');?>" onclick="return fkcorreiosExcluir('<?php echo $this->l('Confirma a exclusão da região?')?>');">
                    </div>
                </div>
            </div>
        </div>

    </form>

    <?php
    }
    ?>

</html>
