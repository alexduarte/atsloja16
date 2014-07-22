
<div class="fkcorreios_calculo_cep">

    <div class="opc-main-block">
        <div class="order_carrier_content box">
            <div class="delivery_options_address">
                <h3>
                    {l s='Informe o CEP para cálculo do frete do pedido' mod='fkcorreioslite'}
                </h3>
                <div id="fkcorreios_cep_msg">
                    {$fkcorreios_cep_msg['msg']}
                </div>
                <div class="delivery_options">
                    <div id="fkcorreios_cep_form">
                        <form action="#" method="post">
                            <input type="text" class="fkcorreios_text_cep" size="10" name="fkcorreios_cep_carrinho" value="{$fkcorreios_cep}"/>
                            <input type="submit" class="btn btn-default button button-medium" value="{l s='Calcular frete' mod='fkcorreioslite'}" name="submitCarrinho"/>
                        </form>
                    </div>

                    {if isset($fkcorreios_cep_frete)}
                        <table>
                            {foreach $fkcorreios_cep_frete as $key => $opcoes}
                                {foreach $opcoes as $frete}
                                    <tr>
                                        <td id="fkcorreios_cep_img">
                                            <img src="{$frete['url_imagem']}" alt="{$frete['nome_carrier']}"/>
                                        </td>
                                        <td id="fkcorreios_cep_nome">
                                            <b>{$frete['nome_carrier']}</b>
                                            <br>
                                            {l s='Prazo de entrega:' mod='fkcorreioslite'} {$frete['prazo_entrega']}
                                        </td>
                                        <td id="fkcorreios_cep_valor">
                                            {convertPrice price=$frete['valor_frete']}
                                        </td>
                                    </tr>
                                {/foreach}
                            {/foreach}
                        </table>
                    {/if}
                </div>
            </div>
        </div>
    </div>

</div>