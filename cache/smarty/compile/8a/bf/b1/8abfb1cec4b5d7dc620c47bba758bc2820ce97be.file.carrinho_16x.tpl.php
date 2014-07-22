<?php /* Smarty version Smarty-3.1.14, created on 2014-07-21 16:19:19
         compiled from "C:\wamp\www\atsloja16\modules\fkcorreioslite\views\carrinho_16x.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164853cd75c7894b52-67430639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8abfb1cec4b5d7dc620c47bba758bc2820ce97be' => 
    array (
      0 => 'C:\\wamp\\www\\atsloja16\\modules\\fkcorreioslite\\views\\carrinho_16x.tpl',
      1 => 1405963721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164853cd75c7894b52-67430639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fkcorreios_cep_msg' => 0,
    'fkcorreios_cep' => 0,
    'fkcorreios_cep_frete' => 0,
    'opcoes' => 0,
    'frete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53cd75c78fc4b7_00891510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd75c78fc4b7_00891510')) {function content_53cd75c78fc4b7_00891510($_smarty_tpl) {?>
<div class="fkcorreios_calculo_cep">

    <div class="opc-main-block">
        <div class="order_carrier_content box">
            <div class="delivery_options_address">
                <h3>
                    <?php echo smartyTranslate(array('s'=>'Informe o CEP para cálculo do frete do pedido','mod'=>'fkcorreioslite'),$_smarty_tpl);?>

                </h3>
                <div id="fkcorreios_cep_msg">
                    <?php echo $_smarty_tpl->tpl_vars['fkcorreios_cep_msg']->value['msg'];?>

                </div>
                <div class="delivery_options">
                    <div id="fkcorreios_cep_form">
                        <form action="#" method="post">
                            <input type="text" class="fkcorreios_text_cep" size="10" name="fkcorreios_cep_carrinho" value="<?php echo $_smarty_tpl->tpl_vars['fkcorreios_cep']->value;?>
"/>
                            <input type="submit" class="btn btn-default button button-medium" value="<?php echo smartyTranslate(array('s'=>'Calcular frete','mod'=>'fkcorreioslite'),$_smarty_tpl);?>
" name="submitCarrinho"/>
                        </form>
                    </div>

                    <?php if (isset($_smarty_tpl->tpl_vars['fkcorreios_cep_frete']->value)){?>
                        <table>
                            <?php  $_smarty_tpl->tpl_vars['opcoes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['opcoes']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fkcorreios_cep_frete']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['opcoes']->key => $_smarty_tpl->tpl_vars['opcoes']->value){
$_smarty_tpl->tpl_vars['opcoes']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['opcoes']->key;
?>
                                <?php  $_smarty_tpl->tpl_vars['frete'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frete']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['opcoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['frete']->key => $_smarty_tpl->tpl_vars['frete']->value){
$_smarty_tpl->tpl_vars['frete']->_loop = true;
?>
                                    <tr>
                                        <td id="fkcorreios_cep_img">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['frete']->value['url_imagem'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['frete']->value['nome_carrier'];?>
"/>
                                        </td>
                                        <td id="fkcorreios_cep_nome">
                                            <b><?php echo $_smarty_tpl->tpl_vars['frete']->value['nome_carrier'];?>
</b>
                                            <br>
                                            <?php echo smartyTranslate(array('s'=>'Prazo de entrega:','mod'=>'fkcorreioslite'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['frete']->value['prazo_entrega'];?>

                                        </td>
                                        <td id="fkcorreios_cep_valor">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['frete']->value['valor_frete']),$_smarty_tpl);?>

                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>
                        </table>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

</div><?php }} ?>