<?php
/* Smarty version 4.0.0, created on 2022-11-15 21:45:30
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\relatorio\listarRelatorio.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6373fa6a7846e1_37281255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5cbb24391df65a9395e8462aec1c706bfa569b' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\relatorio\\listarRelatorio.html',
      1 => 1668545127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6373fa6a7846e1_37281255 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="p-5 mb-4 bg-light rounded-3">
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
        <tdoby>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionEquipamento']->value, 'objEquipamento');
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
    </table>
</div><?php }
}
