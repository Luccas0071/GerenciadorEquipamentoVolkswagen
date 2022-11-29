<?php
/* Smarty version 4.0.0, created on 2022-11-26 23:30:08
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\setor\listarSetor.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_638293704f9f03_62548376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18fdd7a1408dd6e436ff67d0ec0229e039a454d6' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\setor\\listarSetor.html',
      1 => 1669475501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638293704f9f03_62548376 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="p-5 mb-4 bg-light rounded-3">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Codigo</td>
                <th scope="col">Setor</td>
                <th scope="col">Veiculo</td>
                <th scope="col">Data Inclusão</td>
                <th scope="col">Ação</td>
            </tr>
        </thead>
        <tdoby>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionSetor']->value, 'objSetor');
$_smarty_tpl->tpl_vars['objSetor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objSetor']->value) {
$_smarty_tpl->tpl_vars['objSetor']->do_else = false;
?>

            <?php $_smarty_tpl->_assignInScope('objVeiculo', $_smarty_tpl->tpl_vars['objSetor']->value->getObjVeiculo());?>
                 
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['objSetor']->value->getCodigo();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objSetor']->value->getNome();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getNome();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objSetor']->value->getDataInclusao();?>
</td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="editarSetor('<?php echo $_smarty_tpl->tpl_vars['objSetor']->value->getCodigo();?>
')">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger" onclick="excluirSetor('<?php echo $_smarty_tpl->tpl_vars['objSetor']->value->getCodigo();?>
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
