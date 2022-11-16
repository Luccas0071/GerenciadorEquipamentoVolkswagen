<?php
/* Smarty version 4.0.0, created on 2022-11-15 02:03:33
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\equipamento\listarEquipamento.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6372e565374153_79388301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e66738b1bdef96b0ebcb12dbe2f48d7bf931d3aa' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\equipamento\\listarEquipamento.html',
      1 => 1668473890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6372e565374153_79388301 (Smarty_Internal_Template $_smarty_tpl) {
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
</div><?php }
}
