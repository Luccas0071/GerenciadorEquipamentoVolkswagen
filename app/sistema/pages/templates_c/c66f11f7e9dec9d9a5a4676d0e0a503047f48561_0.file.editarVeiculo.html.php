<?php
/* Smarty version 4.0.0, created on 2022-11-26 15:31:18
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\veiculo\editarVeiculo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63822336477b56_10800519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c66f11f7e9dec9d9a5a4676d0e0a503047f48561' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\veiculo\\editarVeiculo.html',
      1 => 1669473073,
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
function content_63822336477b56_10800519 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function salvarVeiculo(){
        var acao = jQuery("#acao").val();

        if (acao == "I") {
			var urlAction = "index.php?do=veiculo&action=incluir";
		}else{
			var urlAction = "index.php?do=veiculo&action=alterar";
		}

        formDados = new FormData(document.getElementById('frmVeiculo'));

		jQuery.ajax({
			type: 'POST',
			url: urlAction,
			data: formDados,
			success: function (data) {
				console.log(data);
                redirecionar()
                if(acao == "I"){
                    alert("Veiculo Incluido com Sucesso !")
                }else{
                    alert("Veiculo Alterado com Sucesso !")
                }
			},
			cache: false,
			contentType: false,
			processData: false
		});
    }

    function redirecionar(){
        window.location = "index.php?do=veiculo&action=inicio";
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
                <h2>Cadastrar Veiculo</h2>
            </div>
        </div>

        <div class="col-1">
            <div class="padding-padrao texto-right">    
                <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary btn-sm" onclick="salvarVeiculo();">
                    <i class="fas fa-save"></i> Salvar
                </button>
            </div>
        </div>
    </div>
    <hr>

    <div class="row align-items-start">
        <div class="col-12">
            <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Veiculo !</p>	
        </div>  
    </div>
         
    <form name="frmVeiculo" id="frmVeiculo">
        <input type="hidden" name="acao" 			    id="acao" 				value="<?php echo $_smarty_tpl->tpl_vars['objVeiculoForm']->value->getAcao();?>
">
        <input type="hidden" name="codigoVeiculo" 	    id="codigoVeiculo" 		value="<?php echo $_smarty_tpl->tpl_vars['objVeiculoForm']->value->getCodigo();?>
">
        
    
        <div class="row align-items-start">
            <div class="col-3">
                <div class="padding-padrao">
                    <label for="nomeVeiculo" title="Código Unico" class="text-ellipsis">Nome:</label>
                    <input type="text" name="nomeVeiculo" id="nomeVeiculo" class="nomeVeiculo form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objVeiculoForm']->value->getNome();?>
" >
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="dataInclusaoVeiculo" title="Data Inclusão" class="text-ellipsis">Data Inclusão:</label>
                    <input type="date" name="dataInclusaoVeiculo" id="dataInclusaoVeiculo" class="dataInclusaoVeiculo form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objVeiculoForm']->value->getDataInclusao();?>
" >
                </div>
            </div>
        </div>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
