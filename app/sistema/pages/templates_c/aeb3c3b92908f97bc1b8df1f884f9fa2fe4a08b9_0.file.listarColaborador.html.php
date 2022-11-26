<?php
/* Smarty version 4.0.0, created on 2022-11-26 14:29:09
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\colaborador\listarColaborador.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_638214a5d52660_52429284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeb3c3b92908f97bc1b8df1f884f9fa2fe4a08b9' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\colaborador\\listarColaborador.html',
      1 => 1669469346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638214a5d52660_52429284 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="p-5 mb-4 bg-light rounded-3">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Codigo</td>
                <th scope="col">Nome</td>
                <th scope="col">Data Adimissão</td>
                <th scope="col">Cargo</td>
                <th scope="col">Ação</td>
            </tr>
        </thead>
        <tdoby>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionColaborador']->value, 'objColaborador');
$_smarty_tpl->tpl_vars['objColaborador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objColaborador']->value) {
$_smarty_tpl->tpl_vars['objColaborador']->do_else = false;
?>
                 
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getNome();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getDataAdmissao();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getFuncao();?>
</td>
                    <td>
                        <button type="button" class="btn btn-warning" onclick="editarColaborador('<?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo();?>
')">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger" onclick="excluirColaborador('<?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo();?>
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
