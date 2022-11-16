<?php
/* Smarty version 4.0.0, created on 2022-10-17 00:30:37
  from 'C:\xampp7\htdocs\ControleManutencaoVolkswagen\sistema\pages\templates\home.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_634c860db9e638_91805031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '614db9bcb8148296be8ade66358310ebb7d7cf68' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ControleManutencaoVolkswagen\\sistema\\pages\\templates\\home.php',
      1 => 1665959434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c860db9e638_91805031 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container py-4">
    <div class="p-5 mb-4 bg-light rounded-3">
        <table>
            <thead>
                <tr>
                    <td>Identificação</td>
                    <td>Cliente</td>
                    <td>Tipo Negocio</td>
                    <td>Situação</td>
                    <td>Definição</td>
                    <td>Valor</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tdoby>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, 'collectionPlanilha', 'objPlanilha');
$_smarty_tpl->tpl_vars['objPlanilha']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objPlanilha']->value) {
$_smarty_tpl->tpl_vars['objPlanilha']->do_else = false;
?>
                    
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getTacto();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getTacto();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getTacto();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getTacto();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getTacto();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getTacto();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objPlanilha']->value->getTacto();?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tdoby>
        </table>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Change the background</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Add borders</h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                <button class="btn btn-outline-secondary" type="button">Example button</button>
            </div>
        </div>
    </div>
</div><?php }
}
