<?php
/* Smarty version 4.0.0, created on 2022-03-13 19:40:48
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\colaborador\pesquisarColaborador.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_622e3ab004ce03_30778161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6f3ff76171cb8363400a3ebc4ac06aa3b296daa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\colaborador\\pesquisarColaborador.html',
      1 => 1647196552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622e3ab004ce03_30778161 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function incluir() {
        window.location = "index.php?do=colaborador&action=editar&acao=I";
    }

    function exibir(codigo) {
        window.location = "index.php?do=colaborador&action=editar&acao=E&codigo="+codigo;
    }

    function alterar(codigo) {
        window.location = "index.php?do=colaborador&action=editar&acao=A&codigo="+codigo;
    }

    function excluir(codigo) {
        window.location = "index.php?do=colaborador&action=editar&acao=D&codigo="+codigo;
    }

<?php echo '</script'; ?>
>


<div class="container">
    <div class="row align-items-start">
      <div class="col-11">
          <div class="padding-padrao">
              <h1>Colaborador</h1>
          </div>
      </div>
      <div class="col-1">
        <div class="padding-padrao">    
            <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary" onclick="incluir();">
                <i class="fas fa-plus"></i> INCLUIR
            </button>
        </div>
      </div>
    </div>
    <hr>
    <div class="row align-items-start">
        <div class="col-4">
            <div class="padding-padrao">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pesquisar Colaborador">
                    <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary" onclick="incluir();">
                        <i class="fas fa-plus"></i> Pesquisar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Função</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colectionColaborador']->value, 'objColaborador');
$_smarty_tpl->tpl_vars['objColaborador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objColaborador']->value) {
$_smarty_tpl->tpl_vars['objColaborador']->do_else = false;
?>

            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo();?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getNome();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getObjCargo();?>
</td>
                <td>(<?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getDddCelular();?>
) <?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCelular();?>
</td>
                <td>
                    <button type="button" title="Exibir" class="btn btn-primary btn-sm" onclick="javascript: exibir('<?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo();?>
');">
                        <span class="material-icons">search</span>
                    </button>
                    <button type="button" title="Alterar" class="btn btn-warning btn-sm" onclick="javascript: alterar('<?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo();?>
')">
                        <span class="material-icons">edit</span>
                    </button>
                    <button type="button" title="excluir" class="btn btn-danger btn-sm" onclick="javascript: excluir('<?php echo $_smarty_tpl->tpl_vars['objColaborador']->value->getCodigo();?>
')">
                        <span class="material-icons">delete_outline</span>
                    </button>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php }
}
