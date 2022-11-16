<?php
/* Smarty version 4.0.0, created on 2022-11-15 17:17:22
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\equipamento\editarEquipamento.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6373bb92693836_36636580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75bcd4787ae2851f142b22d2117d573859d7b961' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\equipamento\\editarEquipamento.html',
      1 => 1668529038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_6373bb92693836_36636580 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function salvarEquipamento(){
        var acao = jQuery("#acao").val();

        if (acao == "I") {
			var urlAction = "index.php?do=equipamento&action=incluir";
		}else{
			var urlAction = "index.php?do=equipamento&action=alterar";
		}

        formDados = new FormData(document.getElementById('frmEquipamento'));

		jQuery.ajax({
			type: 'POST',
			url: urlAction,
			data: formDados,
			success: function (data) {
				console.log(data);
                // redirecionar()
                // alert("Equipamento Incluido com Sucesso !")
			},
			cache: false,
			contentType: false,
			processData: false
		});
    }

    function salvarVeiculo(){
        var acao = jQuery("#acao").val();
        var codigoVeiculo = jQuery("#codigoVeiculo").val();
        var nomeVeiculo = jQuery("#veiculo").val();
        var dataVeiculo = jQuery("#dataInclusaoVeiculo").val();
        var controle = 0;

        if(nomeVeiculo == ""){
            alert("Preencha o campo: Veiculo !");
            controle = 1;
        }

        if(dataVeiculo == ""){
            alert("Preencha o campo: Data !")
            controle = 1;
        }

        if(controle == 0){
            var urlAction = "index.php?do=veiculo&action=incluir";
        
            jQuery.ajax({
                type: 'POST',
                url: urlAction,
                data: {
                    'codigoVeiculo':codigoVeiculo,
                    'nomeVeiculo':nomeVeiculo,
                    'dataVeiculo':dataVeiculo
                },
                success: function (data) {
                    console.log(data);
                    window.location = "index.php?do=equipamento&action=editar&acao=I";
                    alert("Veiculo Incluido com Sucesso !")
                }
            });
        }
    }

    function salvarSetor(){
        var acao = jQuery("#acao").val();
        var codigoSetor = jQuery("#codigoSetor").val();
        var nomeSetor = jQuery("#nomeSetor").val();
        var dataSetor = jQuery("#dataInclusaoSetor").val();
        var controle = 0;

        if(nomeSetor == ""){
            alert("Preencha o campo: Setor !");
            controle = 1;
        }

        if(dataSetor == ""){
            alert("Preencha o campo: Data !")
            controle = 1;
        }

        if(controle == 0){
            var urlAction = "index.php?do=setor&action=incluir";
        
            jQuery.ajax({
                type: 'POST',
                url: urlAction,
                data: {
                    'codigoSetor':codigoSetor,
                    'nomeSetor':nomeSetor,
                    'dataSetor':dataSetor
                },
                success: function (data) {
                    console.log(data);
                    window.location = "index.php?do=equipamento&action=editar&acao=I";
                    alert("Setor Incluido com Sucesso !")
                }
            });
        }
    }

    function redirecionar(){
        window.location = "index.php?do=equipamento&action=inicio";
    }

    function calculaDataVencimento(element){
        
        // var dataCalibragem = new Data();
        // var qtdDias = jQuery(element).val();
        // var data = dataCalibragem.getDate();

        // console.log(dataCalibragem);
        // console.log(" / ");
        // console.log(qtdDias);

    }

    function exibirModalVeiculo(){
        jQuery("#modalVeiculo").slideDown("slow");;
        jQuery("#fade").show()
    }

    function ocultarModalVeiculo(){
        jQuery("#modalVeiculo").hide();
        jQuery("#fade").slideUp("hide");
    }

    function exibirModalSetor(){
        jQuery("#modalSetor").slideDown("slow");;
        jQuery("#fade").show()
    }

    function ocultarModalSetor(){
        jQuery("#modalSetor").hide();
        jQuery("#fade").slideUp("hide");
    }


<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-11">
            <div class="padding-padrao">
                <h2>Cadastrar Equipamento</h2>
            </div>
        </div>

        <div class="col-1">
            <div class="padding-padrao texto-right">    
                <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary btn-sm" onclick="salvarEquipamento();">
                    <i class="fas fa-save"></i> Salvar
                </button>
            </div>
        </div>
    </div>
    <hr>
    <form name="frmEquipamento" id="frmEquipamento">
        <input type="hidden" name="acao" 				id="acao" 				    value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getAcao();?>
">
        <input type="hidden" name="codigoEquipamento" 	id="codigoEquipamento" 		value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getCodigo();?>
">
        <input type="hidden" name="codigoVeiculo" 	    id="codigoVeiculo" 		    value="">
        <input type="hidden" name="codigoSetor" 	    id="codigoSetor" 		    value="">
        

        <div class="col-10">
            <div class="padding-padrao">
                <h5>Linha de Montagem</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="padding-padrao">
                    <label for="codigoVeiculo" title="Veiculo" class="text-ellipsis">Veiculo:</label>
                    <select name="codigoVeiculo" id="codigoVeiculo" class="codigoVeiculo form-control form-control-sm">
                        <option value="" selected>Selecione</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionVeiculo']->value, 'objVeiculo');
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objVeiculo']->value) {
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = false;
?>
                            <?php if (($_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getVeiculo() == $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo())) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo();?>
" selected><?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getNome();?>
</option>
                            <?php } else { ?>											
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo();?>
"><?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getNome();?>
</option>
                            <?php }?> 
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div class="col-1"><br>
                <button type="button" name="btn-incluir"  id="btn-incluir" class="btn btn-primary btn-sm" onclick="exibirModalVeiculo();">
                    <i class="fa-solid fa-plus"></i> Veiculo
                </button>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="codigoSetor" title="Setor" class="text-ellipsis">Setor:</label>
                    <select name="codigoSetor" id="codigoSetor" class="codigoSetor form-control form-control-sm">
                        <option value="" selected>Selecione</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionSetor']->value, 'objSetor');
$_smarty_tpl->tpl_vars['objSetor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objSetor']->value) {
$_smarty_tpl->tpl_vars['objSetor']->do_else = false;
?>
                            <?php if (($_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getSetor() == $_smarty_tpl->tpl_vars['objSetor']->value->getCodigo())) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objSetor']->value->getCodigo();?>
" selected><?php echo $_smarty_tpl->tpl_vars['objSetor']->value->getNome();?>
</option>
                            <?php } else { ?>											
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objSetor']->value->getCodigo();?>
"><?php echo $_smarty_tpl->tpl_vars['objSetor']->value->getNome();?>
</option>
                            <?php }?> 
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div class="col-1"><br>    
                <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary btn-sm" onclick="exibirModalSetor();">
                    <i class="fa-solid fa-plus"></i> Setor
                </button>
            </div>
        </div>
        <hr>
        <div class="col-10">
            <div class="padding-padrao">
                <h5>Equipamento</h5>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-12">
                <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Equipamento !</p>	
            </div>  
        </div>
         
        <div id="fade" style="display: none"></div>

        <!--=========================== 
                    Modal Veiculo 
        ============================--> 
        
        <div id="modalVeiculo" style="display: none">
            <div class="row">
                <div class="modal-header">
                    <div class="col-11">
                        <div class="padding-padrao">
                            <h2>Cadastro de Veiculo</h2>
                        </div>
                    </div>
                    <div class="col-1">
                        <button type="button" id="import-modal" class="btn btn-primary" onclick="salvarVeiculo()">
                            <i class="fas fa-save"></i>
                        </button>
                        <button type="button" id="close-modal" class="btn btn-danger" onclick="ocultarModalVeiculo()">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
          
            <div class="modal-body">
                <div class="row">
                    <div class="col-3">
                        <div class="padding-padrao">
                            <label for="veiculo" title="Veiculo" class="text-ellipsis">Veiculo:</label>
                            <input type="text" name="veiculo" id="veiculo" class="veiculo form-control form-control-sm" value="" >
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="padding-padrao">
                            <label for="dataInclusaoVeiculo" title="Data Inclusão" class="text-ellipsis">Data:</label>
                            <input type="date" name="dataInclusaoVeiculo" id="dataInclusaoVeiculo" class="dataInclusaoVeiculo form-control form-control-sm" value="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=========================== 
                    Modal Setor 
        ============================--> 
        <div id="modalSetor" style="display: none">
            <div class="row">
                <div class="modal-header">
                    <div class="col-11">
                        <div class="padding-padrao">
                            <h2>Cadastro de Setor</h2>
                        </div>
                    </div>
                    <div class="col-1">
                        <button type="button" id="import-modal" class="btn btn-primary" onclick="salvarSetor()">
                            <i class="fas fa-save"></i>
                        </button>
                        <button type="button" id="close-modal" class="btn btn-danger" onclick="ocultarModalSetor()">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
          
            <div class="modal-body">
                <div class="row">
                    <div class="col-3">
                        <div class="padding-padrao">
                            <label for="nomeSetor" title="Setor" class="text-ellipsis">Setor:</label>
                            <input type="text" name="nomeSetor" id="nomeSetor" class="nomeSetor form-control form-control-sm" value="" >
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="padding-padrao">
                            <label for="dataInclusaoSetor" title="Data Inclusão" class="text-ellipsis">Data:</label>
                            <input type="date" name="dataInclusaoSetor" id="dataInclusaoSetor" class="dataInclusaoSetor form-control form-control-sm" value="" >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-start">

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="tacto" title="Tacto" class="text-ellipsis">Tacto:</label>
                    <input type="text" name="tacto" id="tacto" class="tacto form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getTacto();?>
" >
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="tipoFrequencia" title="Tipo Frequencia" class="text-ellipsis">Tipo Frequencia:</label>
                    <input type="text" name="tipoFrequencia" id="tipoFrequencia" class="tipoFrequencia form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getTipoFrequencia();?>
" >
                </div>
            </div>

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="modelo" title="Modelo" class="text-ellipsis">Modelo:</label>
                    <input type="text" name="modelo" id="modelo" class="modelo form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getModelo();?>
" >
                </div>
            </div>

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="numeroSerie" title="Numero Série" class="text-ellipsis">N° Serie:</label>
                    <input type="text" name="numeroSerie" id="numeroSerie" class="numeroSerie form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getNumeroSerie();?>
" >
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="dataCalibragem" title="Data Calibragem" class="text-ellipsis">Data Calibragem:</label>
                    <input type="date" name="dataCalibragem" id="dataCalibragem" class="dataCalibragem form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getDataCalibragem();?>
">
                </div>
            </div>

        </div>
  
        <div class="row align-items-start">

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="statos" title="Status" class="text-ellipsis">Status:</label>
                    <select name="statos" id="statos" class="statos form-control form-control-sm">
                        <option value="" selected>Selecione</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionStatus']->value, 'objStatus');
$_smarty_tpl->tpl_vars['objStatus']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objStatus']->value) {
$_smarty_tpl->tpl_vars['objStatus']->do_else = false;
?>
                            <?php if (($_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getStatus() == $_smarty_tpl->tpl_vars['objStatus']->value->getCodigo())) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objStatus']->value->getCodigo();?>
" selected><?php echo $_smarty_tpl->tpl_vars['objStatus']->value->getDescricao();?>
</option>
                            <?php } else { ?>											
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objStatus']->value->getCodigo();?>
"><?php echo $_smarty_tpl->tpl_vars['objStatus']->value->getDescricao();?>
</option>
                            <?php }?> 
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="descricaoOperacao" title="Descrição Operação" class="text-ellipsis">Descrição Operação:</label>
                    <input type="text" name="descricaoOperacao" id="descricaoOperacao" class="descricaoOperacao form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getDescricaoOperacao();?>
" >
                </div>
            </div>

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="colaborador" title="Técnico" class="text-ellipsis">Técnico:</label>
                    <select name="colaborador" id="colaborador" class="colaborador form-control form-control-sm">
                        <option value="" selected>Selecione</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionColaborador']->value, 'objColaborador');
$_smarty_tpl->tpl_vars['objColaborador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objColaborador']->value) {
$_smarty_tpl->tpl_vars['objColaborador']->do_else = false;
?>
                            <?php if (($_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getColaborador() == $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo())) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo();?>
" selected><?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getNome();?>
</option>
                            <?php } else { ?>											
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo();?>
"><?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getNome();?>
</option>
                            <?php }?> 
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="quantidadeDiasVencimento" title="Numero Série" class="text-ellipsis">Quantidade Dias:</label>
                    <input type="text" name="quantidadeDiasVencimento" id="quantidadeDiasVencimento" class="quantidadeDiasVencimento form-control form-control-sm" onblur="calculaDataVencimento(this)" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getNumeroSerie();?>
" >
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="dataVencimento" title="Data Vencimento" class="text-ellipsis">Data Vencimento:</label>
                    <input type="date" name="dataVencimento" id="dataVencimento" class="dataVencimento form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getDataVencimento();?>
">
                </div>
            </div>
        </div>
        
        <div class="row align-items-start">
            <div class="col-3">
                <div class="padding-padrao">
                    <label for="dadosUtimaCalibragem" title="Dados Utima Calibragem" class="text-ellipsis">Dados Utima Calibragem:</label>
                    <input type="text" name="dadosUtimaCalibragem" id="dadosUtimaCalibragem" class="dadosUtimaCalibragem form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getDadosUtimaCalibragem();?>
" >
                </div>
            </div>

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="media" title="Media" class="text-ellipsis">Media:</label>
                    <input type="text" name="media" id="media" class="media form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getMedia();?>
" >
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="torque" title="Torque" class="text-ellipsis">Torque:</label>
                    <input type="text" name="torque" id="torque" class="torque form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getTorque();?>
" >
                </div>
            </div>

            <div class="col-1">
                <div class="padding-padrao">
                    <label for="dispersao" title="Dispersão" class="text-ellipsis">Dispersão:</label>
                    <input type="text" name="dispersao" id="dispersao" class="dispersao form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getDispersao();?>
" >
                </div>
            </div>

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="observacao" title="Observação" class="text-ellipsis">Observação:</label>
                    <input type="text" name="observacao" id="observacao" class="observacao form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objEquipamentoForm']->value->getObservacao();?>
" >
                </div>
            </div>
        </div>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
