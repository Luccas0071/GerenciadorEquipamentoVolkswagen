<?php
/* Smarty version 4.0.0, created on 2022-11-27 21:23:23
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\templateRelatorios\pdfRelatorioEquipamento.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6383c73bb0ec40_03010224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ea488f9e66ae851be462899322d0302f82543e4' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\templateRelatorios\\pdfRelatorioEquipamento.html',
      1 => 1669580599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6383c73bb0ec40_03010224 (Smarty_Internal_Template $_smarty_tpl) {
?>

<table>
    <tr >
        <th><img src="img/logoPdf.png" style="width: 15%;"></th>
        <th style="padding-left: 50px;">
            <h2>Relatório Equipamentos Volkswagen</h2>
        </th>
    </tr>
</table>
<hr>

<br>

<div>
    <table border="2"  style="text-align: center;">
        <thead>
            <tr>
                <th style="padding-left: 20px;">Codigo</td>
                <th style="padding-left: 20px;">Modelo</td>
                <th style="padding-left: 20px;">N° Série</td>
                <th style="padding-left: 20px;">Data Vencimento</td>
                <th style="padding-left: 20px;">Status</td>
                <th style="padding-left: 20px;">Data Calibração</td>
            </tr>
        </thead>
        <tdoby> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['objPagina']->value->getRegistros(), 'objEquipamento');
$_smarty_tpl->tpl_vars['objEquipamento']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objEquipamento']->value) {
$_smarty_tpl->tpl_vars['objEquipamento']->do_else = false;
?>
                
                <?php $_smarty_tpl->_assignInScope('objStatus', $_smarty_tpl->tpl_vars['objEquipamento']->value->getObjStatus());?>

                <tr >
                    <td style="padding-left: 20px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getCodigo();?>
</td>
                    <td style="padding-left: 20px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getModelo();?>
</td>
                    <td style="padding-left: 20px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getNumeroSerie();?>
</td>
                    <td style="padding-left: 20px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getDataVencimento();?>
</td>
                    <td style="padding-left: 20px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['objStatus']->value->getdescricao();?>
</td>
                    <td style="padding-left: 20px; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['objEquipamento']->value->getDataCalibragem();?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tdoby>
    </table>
</div>



















<?php }
}
