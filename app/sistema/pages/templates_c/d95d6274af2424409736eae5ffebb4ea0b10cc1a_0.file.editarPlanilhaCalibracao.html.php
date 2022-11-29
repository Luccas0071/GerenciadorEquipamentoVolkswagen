<?php
/* Smarty version 4.0.0, created on 2022-11-27 00:07:19
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\planilhaCalibracao\editarPlanilhaCalibracao.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63829c27a242c9_34714855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd95d6274af2424409736eae5ffebb4ea0b10cc1a' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\planilhaCalibracao\\editarPlanilhaCalibracao.html',
      1 => 1669504035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:planilhaCalibracao/itemPlanilhaCalibracaoBase.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_63829c27a242c9_34714855 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    indice = 0;
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
        window.location = "index.php?do=planilhaCalibracao&action=inicio";
    }

    function listarItemPlanilhaCalibracao(){
        let codigoPlanilhaCalibracao = jQuery("#codigoPlanilhaCalibracao").val();

        if(codigoPlanilhaCalibracao != "") {
            jQuery.ajax({
                type: 'GET',
                url: 'index.php?do=planilhaCalibracao&action=listarItemPlanilhaCalibracao',
                data: {
                    'codigoPlanilhaCalibracao': codigoPlanilhaCalibracao
                },
                success: function(data) {
                    // console.log(data);
                    let arrayPlanilhaCalibracao = JSON.parse(data);
                    processaItemPlanilhaCalibracao(arrayPlanilhaCalibracao);
                }
            });
        }
    }

    function processaItemPlanilhaCalibracao(arrayPlanilhaCalibracao) {
        console.log(arrayPlanilhaCalibracao);
        arrayPlanilhaCalibracao.forEach((itemPlanilhaCalibracao) => {
            var e = jQuery("#editaPlanilhaCalibracao");
			var base = jQuery("#itemPlanilhaCalibracaoBase-base").html();
			base = base.replace(/\-i\-/g, indice);
            base = base.replace(/\-sequencia\-/g, indice);
			e.append(base);

            jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".indice").val(indice);	
            jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".codigoItemPlanilhaCalibracao").val(itemPlanilhaCalibracao['codigo_item_planilha_calibracao']);	
            jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".codigoPlanilhaCalibracao").val(itemPlanilhaCalibracao['codigo_planilha_calibracao']);

            jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".location").val(itemPlanilhaCalibracao['location']);	
            jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".description").val(itemPlanilhaCalibracao['description']);	
            jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".folder").val(itemPlanilhaCalibracao['folder']);	
            jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".testType").val(itemPlanilhaCalibracao['test_type']);	
            jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".measure").val(itemPlanilhaCalibracao['measure']);	
            // jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".nextCheck").val(itemPlanilhaCalibracao['next_check']);	
            jQuery("#itemPlanilhaCalibracaoBase" + indice).find(".observacao").val(itemPlanilhaCalibracao['observacao']);	

            if (itemPlanilhaCalibracao['observacao'] == 'Não enc.') {
                jQuery("#itemPlanilhaCalibracaoBase" + indice).find('#borda_item').addClass('border-danger')
            }

            indice++
        });
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
        <input type="hidden" name="acao" 				        id="acao" 				        value="<?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracaoForm']->value->getAcao();?>
">
        <input type="hidden" name="codigoPlanilhaCalibracao" 	id="codigoPlanilhaCalibracao" 	value="<?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracaoForm']->value->getCodigo();?>
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
" readonly>
                </div>
            </div>
        </div>

        <br>
            <div class="row align-items-start">
                <div class="col-12">
                    <h5>Itens Calibragem</h5>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-start">
                    <div class="col-12">
                        <div id="editaPlanilhaCalibracao"></div>
                    </div>
                </div>
            </div>
      
        <br>
        <?php $_smarty_tpl->_subTemplateRender("file:planilhaCalibracao/itemPlanilhaCalibracaoBase.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    listarItemPlanilhaCalibracao();
<?php echo '</script'; ?>
><?php }
}
