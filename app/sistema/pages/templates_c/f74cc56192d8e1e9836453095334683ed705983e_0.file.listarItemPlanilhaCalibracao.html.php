<?php
/* Smarty version 4.0.0, created on 2022-11-26 17:57:18
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\planilhaCalibracao\listarItemPlanilhaCalibracao.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6382456e712577_94469418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f74cc56192d8e1e9836453095334683ed705983e' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\planilhaCalibracao\\listarItemPlanilhaCalibracao.html',
      1 => 1669481817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6382456e712577_94469418 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="p-5 mb-4 bg-light rounded-3">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Codigo</td>
                <th scope="col">Nome</td>
                <th scope="col">Data Inclusão</td>
                <th scope="col">Ação</td>
            </tr>
        </thead>
        <tdoby>
            <!-- <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionPlanilhaCalibracao']->value, 'objPlanilhaCalibracao');
$_smarty_tpl->tpl_vars['objPlanilhaCalibracao']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objPlanilhaCalibracao']->value) {
$_smarty_tpl->tpl_vars['objPlanilhaCalibracao']->do_else = false;
?>
                 
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracao']->value->getCodigo();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracao']->value->getNome();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracao']->value->getDataInclusao();?>
</td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="editarPlanilhaCalibracao('<?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracao']->value->getCodigo();?>
')">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger" onclick="excluirPlanilhaCalibracao('<?php echo $_smarty_tpl->tpl_vars['objPlanilhaCalibracao']->value->getCodigo();?>
')">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
        </tdoby>
    </table>
</div>
<?php }
}
