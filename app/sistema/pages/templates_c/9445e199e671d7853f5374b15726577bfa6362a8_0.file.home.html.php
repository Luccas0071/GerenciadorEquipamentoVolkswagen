<?php
/* Smarty version 4.0.0, created on 2022-11-08 00:53:12
  from 'C:\xampp7\htdocs\ControleManutencaoVolkswagen\sistema\pages\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63699a68f15954_41932439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9445e199e671d7853f5374b15726577bfa6362a8' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ControleManutencaoVolkswagen\\sistema\\pages\\templates\\home.html',
      1 => 1667865180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63699a68f15954_41932439 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    function importarAquivo(){

        formDados = new FormData(document.getElementById('arquivoForm'));

        jQuery.ajax({
            type: "POST",
            url: 'index.php?do=index&action=incluirArquivo',
            data: formDados,
            success: function (data) {
                console.log(data);
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
            nomeArquivo.text(arquivo.name);
            
            jQuery(img).attr("src", reader.result);
            jQuery(img).show();
        }
        reader.readAsDataURL(arquivo);
    }

<?php echo '</script'; ?>
>
<div class="container py-4">
    <div class="row">
        <div class="col-md-6">
            <h3>Pesquisar</h3>
            <select class="form-select" aria-label="Default select example">
                <option selected>Arquivos</option>
                <option value="1">LISTA DE FERRAMENTAS - T-CROSS ATUAL (1)</option>
                <option value="2">LISTA DE FERRAMENTAS AUDI Q3</option>
            </select>
        </div>
        <div class="col-md-6" id="importarArquivo">
            <form action="" name="arquivoForm" id="arquivoForm" method="post">
                <h3>Arquivo</h3>
                <div class="input-group mb-3">
                    <input type="file" name="arquivo" class="form-control" id="arquivo" placeholder="arquivo" aria-label="Recipient's username" aria-describedby="basic-addon2" onchange="processarArquivo(this)">
                    <div class="input-group-append">
                        <a href="" target="_blank" id="nomeArquivo" class="text-ellipsis" type="hidden"></a>
                        <button type="button" class="btn btn-outline-secondary" onclick="importarAquivo()">
                            <i class="fa-sharp fa-solid fa-file-export"></i> Importar Arquivo
                        </button>
                        <!-- <input type="submit" Value="Enviar"> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Informações de Ferramentas</h2>
                <div id="piechart" style="width: 550px; height: 400px;"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Proxima da Calibragem</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Modela</td>
                            <th scope="col">Data Vencimento</td>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getModelo();?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getDataCalibracao();?>
</td>
                                <td> 
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-exchange-alt"></i>
                                </button>
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
    <br>
    <div class="p-5 mb-4 bg-light rounded-3">
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
    </div>

    
</div><?php }
}
