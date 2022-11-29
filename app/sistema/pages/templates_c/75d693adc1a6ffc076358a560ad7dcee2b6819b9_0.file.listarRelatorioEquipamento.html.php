<?php
/* Smarty version 4.0.0, created on 2022-11-30 00:32:51
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\relatorio\listarRelatorioEquipamento.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_638696a35556b8_21982494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75d693adc1a6ffc076358a560ad7dcee2b6819b9' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\relatorio\\listarRelatorioEquipamento.html',
      1 => 1669764232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638696a35556b8_21982494 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div >
    <div class="row">
        <div class="col-6">
            <span class="border rounded-top" style="padding: 3px">Quantidade: <?php echo $_smarty_tpl->tpl_vars['objPagina']->value->getQtdTotalRegistro();?>
</span>
        </div>
    </div>
</div>

<div class="p-2 mb-6 bg-light rounded-3">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Codigo</td>
                <th scope="col">Modelo</td>
                <th scope="col">N° Série</td>
                <th scope="col">Data Vencimento</td>
                <th scope="col">Status</td>
                <th scope="col">Data Calibração</td>
                <th scope="col">Ação</td>
            </tr>
        </thead>
        <?php if ($_smarty_tpl->tpl_vars['objPagina']->value->getQtdTotalRegistro() != 0) {?>
            <tdoby> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['objPagina']->value->getRegistros(), 'objEquipamento');
$_smarty_tpl->tpl_vars['objEquipamento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objEquipamento']->value) {
$_smarty_tpl->tpl_vars['objEquipamento']->do_else = false;
?>
                    
                    <?php $_smarty_tpl->_assignInScope('objStatus', $_smarty_tpl->tpl_vars['objEquipamento']->value->getObjStatus());?>

                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getCodigo();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getModelo();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getNumeroSerie();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getDataVencimento();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objStatus']->value->getdescricao();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getDataCalibragem();?>
</td>
                        <td>
                            <button type="button" class="btn btn-primary">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tdoby>
        <?php } else { ?>
            <tdoby> 
                    <tr>
                        <td class="text-center text-danger" colspan="7">
                            <button type="button" class="btn btn-outline-primary" disabled>
                                Nenhum Registro encontrado !
                            </button>
                        </td>
                    </tr>
            </tdoby>
        <?php }?>
    </table>
</div><?php }
}
