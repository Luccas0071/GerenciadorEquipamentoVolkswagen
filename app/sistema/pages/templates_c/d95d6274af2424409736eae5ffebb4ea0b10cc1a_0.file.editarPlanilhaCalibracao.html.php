<?php
/* Smarty version 4.0.0, created on 2022-11-26 17:58:10
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\planilhaCalibracao\editarPlanilhaCalibracao.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_638245a2e9af46_70867172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd95d6274af2424409736eae5ffebb4ea0b10cc1a' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\planilhaCalibracao\\editarPlanilhaCalibracao.html',
      1 => 1669481887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:planilhaCalibracao/listarItemPlanilhaCalibracao.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_638245a2e9af46_70867172 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function salvarPlanilhaCalibracao(){
        var acao = jQuery("#acao").val();

        if (acao == "I") {
			var urlAction = "index.php?do=planilhaCalibracao&action=incluir";
		}else{
			var urlAction = "index.php?do=planilhaCalibracao&action=alterar";
		}

        formDados = new FormData(document.getElementById('frmColaborador'));

		jQuery.ajax({
			type: 'POST',
			url: urlAction,
			data: formDados,
			success: function (data) {
				console.log(data);
                redirecionar()
                if(acao == "I"){
                    alert("Planilha Calibracao Incluido com Sucesso !")
                }else{
                    alert("Planilha Calibracao Alterado com Sucesso !")
                }
			},
			cache: false,
			contentType: false,
			processData: false
		});
    }

    function redirecionar(){
        window.location = "index.php?do=colaborador&action=inicio";
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
                <h2>Alterar Planilha Calibragem</h2>
            </div>
        </div>

        <div class="col-1">
            <div class="padding-padrao texto-right">    
                <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary btn-sm" onclick="salvarPlanilhaCalibracao();">
                    <i class="fas fa-save"></i> Salvar
                </button>
            </div>
        </div>
    </div>
    <hr>

    <div class="row align-items-start">
        <div class="col-12">
            <p class="font-weight-light">Preencha os campos abaixo para alterar a planilha calibragem !</p>	
        </div>  
    </div>
         
    <form name="frmColaborador" id="frmColaborador">
        <input type="hidden" name="acao" 				id="acao" 				    value="<?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracaoForm']->value->getAcao();?>
">
        <input type="hidden" name="codigoColaborador" 	id="codigoColaborador" 		value="<?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracaoForm']->value->getCodigo();?>
">
        
    
        <div class="row align-items-start">
            <div class="col-4">
                <div class="padding-padrao">
                    <label for="nome" title="Código Unico" class="text-ellipsis">Nome:</label>
                    <input type="text" name="nome" id="nome" class="nome form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracaoForm']->value->getNome();?>
" >
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="dataInclusao" title="Data Admissão" class="text-ellipsis">Data Inclusao:</label>
                    <input type="date" name="dataInclusao" id="dataInclusao" class="dataInclusao form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracaoForm']->value->getDataInclusao();?>
" >
                </div>
            </div>
        </div>

        <br>
        <?php $_smarty_tpl->_subTemplateRender("file:planilhaCalibracao/listarItemPlanilhaCalibracao.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
