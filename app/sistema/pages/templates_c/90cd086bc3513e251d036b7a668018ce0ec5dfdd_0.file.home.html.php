<?php
/* Smarty version 4.0.0, created on 2022-11-15 21:18:44
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6373f424e53c60_55298464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90cd086bc3513e251d036b7a668018ce0ec5dfdd' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\home.html',
      1 => 1668543523,
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
function content_6373f424e53c60_55298464 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Modal -->
<!-- <div id="fade" style="display: none"></div>
<div id="modal" style="display: none">
    <div class="modal-header">
        <h2>Conteudo Arquivo</h2>
        <button id="import-modal" class="btn btn-primary" onclick="mostrarAquivo()"><i class="fa-sharp fa-solid fa-file-export"></i></button>
        <button id="close-modal" class="btn btn-danger" onclick="removerModal()"><i class="fa-regular fa-circle-xmark"></i></button>
    </div>
    <div id="dadosArquivoModal" class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aliquam ea, quibusdam ipsa est labore adipisci ducimus exercitationem molestias vitae ut voluptate itaque animi facere officiis aliquid totam velit praesentium.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui vel dolorum, laborum cupiditate veniam, nemo veritatis labore, deserunt rem asperiores amet excepturi! Velit officiis in quia quidem soluta repellat quod!
    </div>
</div> -->


<!-- Conteudo -->
<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <h3>Pesquisar</h3>
            <select class="form-select" aria-label="Default select example">
                <option selected>Veiculos</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionVeiculo']->value, 'objVeiculo');
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objVeiculo']->value) {
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = false;
?>										
                    <option value="<?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo();?>
"><?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getNome();?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="col-md-6" id="importarArquivo">
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

<div class="container p-1">
    <div class="row">
        <div class="col-md-5">
            <div class="h-100 p-3 bg-light border rounded-3" style="text-align: center;">
                <h2>Informações de Ferramentas</h2>
                <div id="piechart" style="width: 500px; height: 250px;"></div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="h-100 p-3 bg-light border rounded-3" style="text-align: center;">
                <h2>Proxima da Calibragem</h2>
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
            </div>
        </div>
    </div>

    <!-- <div class="p-5 mb-4 bg-light rounded-3">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tacto</td>
                    <th scope="col">Modelo</td>
                    <th scope="col">N° Serie</td>
                    <th scope="col">Vencimento</td>
                    <th scope="col">Data Calibração</td>
                    <th scope="col">Status</td>
                    <th scope="col">Torque</td>
                    <th scope="col">Ação</td>
                </tr>
            </thead>
            <tdoby>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionPlanilha']->value, 'objPlanilha');
$_smarty_tpl->tpl_vars['objPlanilha']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objPlanilha']->value) {
$_smarty_tpl->tpl_vars['objPlanilha']->do_else = false;
?>
                     
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getTacto();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getModelo();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getNumeroSerie();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getVenciamento();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getDataCalibracao();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getStatus();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getTorque();?>
</td>
                        <td>
                            <button type="button" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tdoby>
        </table>
    </div> -->

    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
