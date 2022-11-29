<?php
/* Smarty version 4.0.0, created on 2022-11-27 21:32:07
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\relatorio\editarRelatorio.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6383c947abf773_37840888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85cbe1de9fb2043490373fdb9c7e24e24c0fdd0c' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\relatorio\\editarRelatorio.html',
      1 => 1669581106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:relatorio/listarRelatorioEquipamento.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_6383c947abf773_37840888 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function gerarRelatorio(){

        var veiculo = jQuery("#veiculo").val();
        var setor = jQuery("#setor").val();
        var dataInicio = jQuery("#dataInicio").val();
        var dataFinal = jQuery("#dataFinal").val();

        console.log(" | " + veiculo);
        console.log(" | " + setor);
        console.log(" | " + dataInicio);
        console.log(" | " + dataFinal);
        
        if(veiculo != "" || setor != "" || dataInicio != "" || dataFinal != "" ){
            window.location = "index.php?do=relatorio&action=gerarRelatorio&veiculo=" + veiculo + "&setor=" + setor + "&dataInicio=" + dataInicio + "&dataFinal=" + dataFinal;
        }else{
            alert("Utilize o filtro para buscar a lista de equipamentos !")
        }

    }

    // function redirecionar(){
    //     window.location = "index.php?do=colaborador&action=inicio";
    // }

    function pesquisarEquipamento(){
        var veiculo = jQuery("#veiculo").val();
        var setor = jQuery("#setor").val();
        var dataInicio = jQuery("#dataInicio").val();
        var dataFinal = jQuery("#dataFinal").val();

        window.location = "index.php?do=relatorio&action=pesquisarEquipamento&veiculo=" + veiculo + "&setor=" + setor + "&dataInicio=" + dataInicio + "&dataFinal=" + dataFinal;
    }



<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="padding-padrao">
                <h2>Gerar Relatório</h2>
            </div>
        </div>

        <div class="col-2">
            <div class="padding-padrao texto-right">    
                <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary btn-sm" onclick="gerarRelatorio();">
                    <i class="fas fa-save"></i> Gerar Relatório
                </button>
            </div>
        </div>
    </div>
    <hr>

    <div class="row align-items-start">
        <div class="col-12">
            <p class="font-weight-light">Utilize os filtros para gerar um relatório !</p>	
        </div>  
    </div>
         
    <form name="frmRelatorio" id="frmRelatorio">
        <input type="hidden" name="acao" 				id="acao" 				    value="<?php echo $_smarty_tpl->tpl_vars['objRelatorioForm']->value->getAcao();?>
">
        <input type="hidden" name="codigoRelatorio" 	id="codigoRelatorio" 		value="<?php echo $_smarty_tpl->tpl_vars['objRelatorioForm']->value->getCodigo();?>
">
        
        <div id="fade" style="display: none"></div>
        <div class="modal-body" style="display: none">
            <div class="row">
                <div class="col-3">
                    <div class="padding-padrao">
                        <label for="nome" title="Identificação" class="text-ellipsis">Identificação:</label>
                        <input type="text" name="nome" id="nome" class="nome form-control form-control-sm" value="" >
                    </div>
                </div>
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="dataInclusao" title="Data Inclusão" class="text-ellipsis">Data:</label>
                        <input type="date" name="dataInclusao" id="dataInclusao" class="dataInclusao form-control form-control-sm" value="" >
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-start">
            <div class="col-3">
                <div class="padding-padrao">
                    <label for="veiculo" title="Veiculo" class="text-ellipsis">Veiculo:</label>
                    <select name="veiculo" id="veiculo" class="veiculo form-control form-control-sm">
                        <option value="" selected>Selecione</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionVeiculo']->value, 'objVeiculo');
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objVeiculo']->value) {
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = false;
?>
                            <?php if (($_smarty_tpl->tpl_vars['objRelatorioForm']->value->getVeiculo() == $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo())) {?>
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

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="setor" title="Setor" class="text-ellipsis">Setor:</label>
                    <select name="setor" id="setor" class="setor form-control form-control-sm">
                        <option value="" selected>Selecione</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionSetor']->value, 'objSetor');
$_smarty_tpl->tpl_vars['objSetor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objSetor']->value) {
$_smarty_tpl->tpl_vars['objSetor']->do_else = false;
?>
                            <?php if (($_smarty_tpl->tpl_vars['objRelatorioForm']->value->getSetor() == $_smarty_tpl->tpl_vars['objSetor']->value->getCodigo())) {?>
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

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="dataInicio" title="Data Calibragem" class="text-ellipsis">Periodo de:</label>
                    <input type="date" name="dataInicio" id="dataInicio" class="dataInicio form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objRelatorioForm']->value->getDataInicio();?>
">
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="dataFinal" title="Data Calibragem" class="text-ellipsis">Até:</label>
                    <input type="date" name="dataFinal" id="dataFinal" class="dataFinal form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objRelatorioForm']->value->getDataFinal();?>
">
                </div>
            </div>

            <div class="col-2"><br>
                <button type="button" class="btn btn-primary btn-sm" onclick="pesquisarEquipamento()">
                    <i class="fa-solid fa-magnifying-glass"></i> Pesquisar
                </button>
            </div>

        </div>

   
            <div class="row">
                <div class="col-12"><br>
                    <?php $_smarty_tpl->_subTemplateRender("file:relatorio/listarRelatorioEquipamento.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        
        

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
