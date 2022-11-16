<?php
/* Smarty version 4.0.0, created on 2022-03-13 19:18:21
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\colaborador\editarColaborador.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_622e356dcb0219_30556272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e856dd8d14b078a08b307e890713630b990c0fc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\colaborador\\editarColaborador.html',
      1 => 1647195460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:colaborador/item/itemCursosBase.html' => 1,
  ),
),false)) {
function content_622e356dcb0219_30556272 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();
    indice = 0;

    function salvar() {
        jQuery("#qtdCurso").val(indice);
	
        var acao = jQuery("#acao").val();

        if (acao == "A") {
            var urlAction = "index.php?do=colaborador&action=alterar";
        }

        if (acao == "I") {
            var urlAction = "index.php?do=colaborador&action=incluir";
        }

		formDados = new FormData(document.getElementById('frmColaborador'));

		jQuery.ajax({
			type: 'POST',
			url: urlAction,
			data: formDados,
			success: function (data) {
				console.log(data);

				redirecionar();
			},
			cache: false,
			contentType: false,
			processData: false
		});
	}

    function redirecionar() {
        window.location = "index.php?do=colaborador&action=inicio";
        alert ("Colaborador Incluido com Sucesso !");
    }

    function incluirCurso() {
		var e = jQuery("#editarItemCurso");
		var base = jQuery("#itemCursosBase-base").html();
		base = base.replace(/\-i\-/g, indice);
		base = base.replace(/\-sequencia\-/g, indice);
		e.append(base);
		indice++;
	}

    function listarItemColaborador() {
        let codigoColaborador = jQuery("#codigoColaborador").val();

        if(codigoColaborador != "") {
            jQuery.ajax({
                type: 'GET',
                url: 'index.php?do=colaborador&action=listarItemColaborador',
                data: {
                    'codigoColaborador': codigoColaborador
                },
                success: function(data) {
                    console.log(data);
                    
                    // let arrayItemColaborador = JSON.parse(data);
                    // console.log(arrayItemColaborador);
                    // processaItemColaborador();
                    // console.log("bbbbb"); 
                }
            });
        }
    }

	function processaItemColaborador(arrayItemColaborador =  ''){
        console.log("Entrou aq ");
        var acao = jQuery("#acao").val();
        console.log(arrayItemColaborador);

        arrayItemColaborador.forEach((itemColaborador) => {
            var e = jQuery("#editarItemCurso");
            var base = jQuery("#itemCursosBase-base").html();
            base = base.replace(/\-i\-/g, indice);
            base = base.replace(/\-sequencia\-/g, indice);
            e.append(base);

			// jQuery("#itemCursosBase" + indice).find(".codigoItemCurso").val(itemNegocio['codigoItemNegocio']); 
			// jQuery("#itemCursosBase" + indice).find(".curso").val(itemNegocio['patrimonio']);				
			// jQuery("#itemCursosBase" + indice).find(".dataConclusao").val(itemNegocio['projeto']);						
			// jQuery("#itemCursosBase" + indice).find(".valor").val(itemNegocio['composicao']);				
			// jQuery("#itemCursosBase" + indice).find(".observacao").val(itemNegocio['descricao']);  				
		
            indice++;
        });
    }

    function excluirItemCurso(element) {
        console.log(element);
        jQuery(element).closest('.itemCursosBase-i').remove();
    }

    function voltar() {
        console.log("Entrou no Voltar");
        window.location = "index.php?do=colaborador&action=inicio";
    }

    function mascaraMoeda(valor) {
        console.log("Entrou no mascara");
        valor = parseFloat(valor);
        return valor.toLocaleString('PT-BR', { minimumFractionDigits: 2 });
    }

    function exibeColaborador() {
        jQuery("#colaborador").slideDown();
        jQuery("#itemCurso").slideUp();

        jQuery("#linkColaborador").removeClass("inativo").addClass("ativo");
        jQuery("#linkItemCurso").removeClass("ativo").addClass("inativo");
    }

    function exibeItemCurso() {
        jQuery("#colaborador").slideUp();
        jQuery("#itemCurso").slideDown();

        jQuery("#linkColaborador").removeClass("ativo").addClass("inativo");
        jQuery("#linkItemCurso").removeClass("inativo").addClass("ativo");
    }

<?php echo '</script'; ?>
>



<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="padding-padrao">
                <?php if ($_smarty_tpl->tpl_vars['objColaboradorForm']->value->getAcao() == "A") {?>
                        <h1>Alterar Colaborador</h1>
					<?php } else { ?> 
                        <h1>Incluir Colaborador</h1>
					<?php }?>
                
            </div>
        </div>

    
        <div class="col-2">
            <div class="padding-padrao">    
                <button type="button" name="btn-salvar" id="btn-incluir" class="btn btn-primary" onclick="salvar();">
                    <i class="fas fa-plus"></i> SALVAR
                </button>

                <button type="button" name="btn-voltar" id="btn-incluir" class="btn btn-primary" onclick="voltar();">
                    <i class="fas fa-plus"></i> VOLTAR
                </button>
            </div>
        </div>
    </div>
    <hr>
    <form name="frmColaborador" id="frmColaborador" method="POST">
        <input type="hidden" name="acao" 		        id="acao" 					value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getAcao();?>
">
        <input type="hidden" name="codigoColaborador" 	id="codigoColaborador" 		value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getCodigo();?>
">
        <input type="hidden" name="qtdCurso"            id="qtdCurso">

        <div class="row align-items-start">
            <div class="col-12">
                <ul class="aba-escolha">
                    <li class="ativo" id="linkColaborador" onclick="exibeColaborador();">
                        <a href="#"><span class="material-icons">engineering</span> Colaborador</a> 
                    </li>
                    <li class="inativo" id="linkItemCurso" onclick="exibeItemCurso();">
                        <a href="#"><span class="material-icons">menu_book</span> Cursos</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Colaborador -->
        <div id="colaborador">
            <div class="row align-items-start">
                <div class="col-12">
                    <div class="padding-padrao">
                        <h2><span class="material-icons">engineering</span>Incluir Colaborador</h2>
                    </div>
                    <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Colaborador !</p>	
                </div>  
            </div>
        
            <div class="row align-items-start">
                <div class="col-4">
                    <div class="padding-padrao">
                        <label for="nome" title="Nome" class="text-ellipsis">Nome:</label>
                        <input type="text" name="nome" id="nome" class="nome form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getNome();?>
" >
                    </div>
                </div>

                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="cpf" title="CPF" class="text-ellipsis">CPF:</label>
                        <input type="text" name="cpf" id="cpf" class="cpf form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getCpf();?>
" >
                    </div>
                </div>

                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="rg" title="Rg" class="text-ellipsis">Rg:</label>
                        <input type="text" name="rg" id="rg" class="rg form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getRg();?>
" >
                    </div>
                </div>
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="cargo" title="Cargo" class="text-ellipsis">Cargo:</label>
                        <select name="cargo" id="cargo" class="cargo form-select form-select-sm">
                            <option value="" selected>Selecione</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionCargo']->value, 'objCargo');
$_smarty_tpl->tpl_vars['objCargo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objCargo']->value) {
$_smarty_tpl->tpl_vars['objCargo']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['objCargo']->value->getCodigo()) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['objCargo']->value->getCodigo();?>
" selected><?php echo $_smarty_tpl->tpl_vars['objCargo']->value->getDescricao();?>
</option>
                                <?php } else { ?>											
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['objCargo']->value->getCodigo();?>
"><?php echo $_smarty_tpl->tpl_vars['objCargo']->value->getDescricao();?>
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
                        <label for="dataNascimento" title="Data" class="text-ellipsis">Data Nascimento:</label>
                        <input type="date" name="data" id="data" class="dataNascimento form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getDataNascimento();?>
" >
                    </div>
                </div>
            </div>

            <div class="row align-items-start">
                <div class="col-3">
                    <div class="row align-items-start">
                        <div class="col-3">
                            <div class="padding-padrao">
                                <label for="dddTelefone" title="DDD" class="text-ellipsis">DDD:</label>
                                <input type="dddTelefone" MaxLength="2" name="dddTelefone" id="dddTelefone" class="dddTelefone form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getDddTelefone();?>
" >
                            </div>
                        </div>
            
                        <div class="col-9">
                            <div class="padding-padrao">
                                <label for="telefone" title="Telefone" class="text-ellipsis">Telefone:</label>
                                <input type="text" name="telefone" id="telefone" class="telefone form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getTelefone();?>
" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row align-items-start">
                        <div class="col-3">
                            <div class="padding-padrao">
                                <label for="dddCelular" title="DDD" class="text-ellipsis">DDD:</label>
                                <input type="text" MaxLength="2" name="dddCelular" id="dddCelular" class="dddCelular form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getDddCelular();?>
" >
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="padding-padrao">
                                <label for="celular" title="Celular" class="text-ellipsis">Celular:</label>
                                <input type="text" name="celular" id="celular" class="celular form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getCelular();?>
" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="padding-padrao">
                        <label for="email" title="E-Mail" class="text-ellipsis">E-Mail:</label>
                        <input type="text" name="email" id="email" class="email form-control form-control-sm" onkeypress="mascaraMoeda(this)" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getEmail();?>
" >
                    </div>
                </div>
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="salario" title="Salário" class="text-ellipsis">Salário:</label>
                        <input type="text" name="salario" id="salario" class="salario form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getSalario();?>
" >
                    </div>
                </div>
            </div>

            <div class="row align-items-start">
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="cep" title="Cep" class="text-ellipsis">CEP:</label>
                        <input type="text" name="cep" id="cep" class="cep form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getCep();?>
" >
                    </div>
                </div>

                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="endereco" title="Endereco" class="text-ellipsis">Endereço:</label>
                        <input type="text" name="endereco" id="endereco" class="endereco form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getRua();?>
" >
                    </div>
                </div>

                <div class="col-1">
                    <div class="padding-padrao">
                        <label for="numero" title="Numero" class="text-ellipsis">N°:</label>
                        <input type="text" name="numero" id="numero" class="numero form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getNumero();?>
" >
                    </div>
                </div>
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="bairro" title="bairro" class="text-ellipsis">Bairro:</label>
                        <input type="text" name="bairro" id="bairro" class="bairro form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getBairro();?>
" >
                    </div>
                </div>
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="complemento" title="complemento" class="text-ellipsis">Complemento:</label>
                        <input type="text" name="complemento" id="complemento" class="complemento form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getComplemento();?>
" >
                    </div>
                </div>
                <div class="col-1">
                    <div class="padding-padrao">
                        <label for="uf" title="Uf" class="text-ellipsis">Uf:</label>
                        <input type="text" name="uf" id="uf" class="uf form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getUf();?>
" >
                    </div>
                </div>
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="municipio" title="municipio" class="text-ellipsis">Municipio:</label>
                        <input type="text" name="municipio" id="municipio" class="municipio form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getMunicipio();?>
" >
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Item Curso -->
        <div id="itemCurso" style="display: none;">
            <div class="row">
                <div class="col-11" id="legend">
                    <div class="padding-padrao">
                        <h2><span class="material-icons">menu_book</span> Item Curso</h2>
                        <p>Preencha os campos abaixo para vincular um curso ao colaborador !</p>	
                    </div>
                </div>
            
                <div class="col-1">
                    <div class="padding-padrao">
                        <button type="button" name="btn-incluir-curso" id="btn-incluir-curso"
                            class="btn btn-primary" onclick="incluirCurso();">
                            INCLUIR
                        </button>
                    </div>
                </div>
            </div>
            <div id="editarItemCurso"></div>
        </div>
    </form>
    <?php $_smarty_tpl->_subTemplateRender("file:colaborador/item/itemCursosBase.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <br>
</div>

<?php echo '<script'; ?>
>		
	listarItemColaborador();
<?php echo '</script'; ?>
> <?php }
}
