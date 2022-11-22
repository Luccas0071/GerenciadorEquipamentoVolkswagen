<?php
/* Smarty version 4.0.0, created on 2022-11-23 00:51:53
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\relatorio\pesquisarRelatorio.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_637d6099e68690_77388968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fa22a3b83700d8fad3bde73b02f9685dd21d00c' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\relatorio\\pesquisarRelatorio.html',
      1 => 1669161111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:relatorio/listarRelatorio.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_637d6099e68690_77388968 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function gerarRelatorio(){
        window.location = "index.php?do=relatorio&action=gerarRelatorio";
    }


<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-10">
            <h3>Relatorio</h3>
        </div>
        <div class="col-2 texto-right">
            <button type="button" class="btn btn-primary btn-sm" onclick="gerarRelatorio()">
                <i class="far fa-file-pdf"></i> Gerar Relatorio
            </button>
        </div>
        <hr>
        <p>Lista de Relatorios</p>
    </div>

        <div id="container">
            <div class="row">
                <div class="row align-items-start form-group">

                    <div class="col-3">
                        <div class="padding-padrao">
                            <label for="statos" title="Status" class="text-ellipsis">Veiculo:</label>
                            <select name="statos" id="statos" class="statos form-control form-control-sm">
                                <option value="" selected>Selecione</option>
                                <!-- <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
                            </select>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="padding-padrao">
                            <label for="statos" title="Status" class="text-ellipsis">Setor:</label>
                            <select name="statos" id="statos" class="statos form-control form-control-sm">
                                <option value="" selected>Selecione</option>
                                <!-- <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
                            </select>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="padding-padrao">
                            <label for="dataCalibragem" title="Data Calibragem" class="text-ellipsis">Periodo de:</label>
                            <input type="date" name="dataCalibragem" id="dataCalibragem" class="dataCalibragem form-control form-control-sm" value="">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="padding-padrao">
                            <label for="dataCalibragem" title="Data Calibragem" class="text-ellipsis">Até:</label>
                            <input type="date" name="dataCalibragem" id="dataCalibragem" class="dataCalibragem form-control form-control-sm" value="">
                        </div>
                    </div>

                    <div class="col-2"><br>
                        <button type="button" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-magnifying-glass"></i> Pesquisar
                        </button>
                    </div>
                </div>
            </div>
        </div>

          <br>
        <?php $_smarty_tpl->_subTemplateRender("file:relatorio/listarRelatorio.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>


<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
