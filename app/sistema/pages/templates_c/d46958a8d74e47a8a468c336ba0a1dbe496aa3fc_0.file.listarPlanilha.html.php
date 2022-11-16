<?php
/* Smarty version 4.0.0, created on 2022-11-12 22:29:23
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\arquivo\listarPlanilha.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_637010339e6ec1_53665327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd46958a8d74e47a8a468c336ba0a1dbe496aa3fc' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\arquivo\\listarPlanilha.html',
      1 => 1668288489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637010339e6ec1_53665327 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionPlanilha']->value, 'objPlanilha');
$_smarty_tpl->tpl_vars['objPlanilha']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objPlanilha']->value) {
$_smarty_tpl->tpl_vars['objPlanilha']->do_else = false;
?>
                 
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getCodigo();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getNome();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getDataInclusao();?>
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
<?php }
}
