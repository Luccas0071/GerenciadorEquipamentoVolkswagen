<?php
/* Smarty version 4.0.0, created on 2022-11-22 01:00:26
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\veiculo\listarVeiculo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_637c111a55db45_95278995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3546bcd205908b5ebbd0ec7940e7395feda79d3' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\veiculo\\listarVeiculo.html',
      1 => 1669074680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637c111a55db45_95278995 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionVeiculo']->value, 'objVeiculo');
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objVeiculo']->value) {
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = false;
?>
                 
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getNome();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getDataInclusao();?>
</td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="editarVeiculo('<?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo();?>
')">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger" onclick="excluirVeiculo('<?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo();?>
')">
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
