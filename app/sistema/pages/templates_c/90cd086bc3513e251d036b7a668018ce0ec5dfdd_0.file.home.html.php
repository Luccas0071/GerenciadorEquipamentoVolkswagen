<?php
/* Smarty version 4.0.0, created on 2022-11-21 01:20:58
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_637ac46ae66d56_94933148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90cd086bc3513e251d036b7a668018ce0ec5dfdd' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\home.html',
      1 => 1668990055,
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
function content_637ac46ae66d56_94933148 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
   
    function mostrarAquivo(){

        formDados = new FormData(document.getElementById('arquivoForm'));
       
        jQuery.ajax({
            type: "POST",
            url: 'index.php?do=index&action=mostrarArquivo',
            data: formDados,
            success: function (data) {
                console.log(data);
                alert("Planilha Incluido com Sucesso !")
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }

    function processarArquivo(element){
        let arquivo = element.files[0];
        let nomeArquivo = jQuery("#nomeArquivo");
        
        let reader = new FileReader();
        
        reader.onload = function() {
            let img = jQuery(element).closest("#importarArquivo").find(".previewImg").first();

            nomeArquivo.attr('href', reader.result);
            // nomeArquivo.text(arquivo.name);
            
            jQuery(img).attr("src", reader.result);
            jQuery(img).show();


        }
        reader.readAsDataURL(arquivo);
    }



    function exibirModal(){
        jQuery("#modal").slideDown("slow");;
        jQuery("#fade").show()
    }

    function removerModal(){
        jQuery("#modal").hide();
        jQuery("#fade").slideUp("hide");
    }

    function pesquisarInfoVeiculo(element){
        var codigoVeiculo = jQuery(element).val();
        window.location = "index.php?do=index&action=inicio&codigoVeiculo=" + codigoVeiculo;
    }

<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<input type="hidden" name="qtdEmCalibracao" 	id="qtdEmCalibracao"    value="<?php echo $_smarty_tpl->tpl_vars['qtdEmCalibracao']->value;?>
">
<input type="hidden" name="qtdCalibrado" 	    id="qtdCalibrado" 		value="<?php echo $_smarty_tpl->tpl_vars['qtdCalibrado']->value;?>
">
<input type="hidden" name="qtdNaoEncontrado" 	id="qtdNaoEncontrado"   value="<?php echo $_smarty_tpl->tpl_vars['qtdNaoEncontrado']->value;?>
">

<!-- Conteudo -->
<div class="container py-4">
    <div class="row">
        <div class="col-md-5">
            <h3>Pesquisar</h3>
            <select class="form-select" aria-label="Default select example" onchange="pesquisarInfoVeiculo(this)">
                <option value="0" selected>Selecione:</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionVeiculo']->value, 'objVeiculo');
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objVeiculo']->value) {
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = false;
?>			
                    <?php if (($_smarty_tpl->tpl_vars['objVeiculoForm']->value->getCodigo() == $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo())) {?>
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
        <div class="col-md-7" id="importarArquivo">
            <form action="" name="arquivoForm" id="arquivoForm">
                <h3>Arquivo</h3>
                <div class="input-group mb-3">
                    <input type="file" name="arquivo" class="form-control" id="arquivo" placeholder="arquivo" aria-label="Recipient's username" aria-describedby="basic-addon2" onchange="processarArquivo(this)">
                    <div class="input-group-append">
                        <a href="" target="_blank" id="nomeArquivo" class="text-ellipsis" type="hidden"></a>
                        <button type="button" class="btn btn-outline-secondary" onclick="mostrarAquivo()">
                            <i class="fa-sharp fa-solid fa-file-export"></i> Importar Arquivo
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php $_smarty_tpl->_assignInScope('collectionEquipamento', $_smarty_tpl->tpl_vars['objPagina']->value->getRegistros());?>

<div class="container p-1">
    <div class="row">
        <div class="col-md-5">
            <div class="h-100 p-3 bg-light border rounded-3" style="text-align: center;">
                <h2>Informações de Ferramentas</h2>
                <div id="piechart" style="width: 500px; height: 250px;"></div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="h-100 p-3 bg-light border rounded-3">
                <div class="row">
                    <div class="col-md-9">
                        <h3>Proxima da Calibragem  </h3>
                    </div>
                    <div  class="col-md-3 text-end">
                        <button type="button" class="btn btn-outline-primary">Quantidade : <?php echo $_smarty_tpl->tpl_vars['objPagina']->value->getQtdTotalRegistro();?>
</button>
                    </div>
                </div>
                <br>
                <?php if ($_smarty_tpl->tpl_vars['objPagina']->value->getRegistros() != 0) {?>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Modela</td>
                                <th scope="col">N° Série</td>
                                <th scope="col">Data Calibragem</td>
                                <th scope="col">Data Vencimento</td>
                            </tr>
                        </thead>
                        <tdoby>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionEquipamento']->value, 'objEquipamento');
$_smarty_tpl->tpl_vars['objEquipamento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objEquipamento']->value) {
$_smarty_tpl->tpl_vars['objEquipamento']->do_else = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getModelo();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getNumeroSerie();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getDataCalibragem();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getDataVencimento();?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tdoby>
                    </table>
                <?php } else { ?>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Modela</td>
                                <th scope="col">N° Série</td>
                                <th scope="col">Data Calibragem</td>
                                <th scope="col">Data Vencimento</td>
                            </tr>
                        </thead>
                        <tdoby>
                            <tr>
                                <td>Nenhum registro encontrado !</td>
                            </tr>
                        </tdoby>
                    </table>
                <?php }?>
            </div>
        </div>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- GRAFICO -->

<?php echo '<script'; ?>
 src="https://www.gstatic.com/charts/loader.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        google.charts.load('current', {'packages':['corechart']});
    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var qtdEmCalibracao   = parseInt(jQuery("#qtdEmCalibracao").val());
        var qtdCalibrado      = parseInt(jQuery("#qtdCalibrado").val());
        var qtdNaoEncontrado  = parseInt(jQuery("#qtdNaoEncontrado").val());

        // console.log(qtdEmCalibracao);
        // console.log(qtdCalibrado);
        // console.log(qtdNaoEncontrado);

        // var qtdEmCalibracao   = 1;
        // var qtdCalibrado      = 2;
        // var qtdNaoEncontrado  = 3;

        var data = google.visualization.arrayToDataTable([
            ['Status', 'Status'],
            ['Em Calibragem',   qtdEmCalibracao],
            ['Calibrado',       qtdCalibrado],
            ['Não Encontrado',  qtdNaoEncontrado]
        ]);

        var options = {
            backgroundColor: '#f8f9fa',
            fontFamily: '102px',
            is3D: true,

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
<?php echo '</script'; ?>
><?php }
}
