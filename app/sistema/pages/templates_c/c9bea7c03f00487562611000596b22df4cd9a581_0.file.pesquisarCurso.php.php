<?php
/* Smarty version 4.0.0, created on 2022-03-01 16:52:44
  from 'C:\xampp atualizado\htdocs\mmSistema\sistema\pages\templates\curso\pesquisarCurso.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_621e414c679078_53897910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9bea7c03f00487562611000596b22df4cd9a581' => 
    array (
      0 => 'C:\\xampp atualizado\\htdocs\\mmSistema\\sistema\\pages\\templates\\curso\\pesquisarCurso.php',
      1 => 1646149961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:editarCurso.html' => 1,
  ),
),false)) {
function content_621e414c679078_53897910 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function incluir() {
        window.location = "index.php?do=curso&action=editar&acao=I";
    }

    function alterar(codigo) {
        window.location = "index.php?do=curso&action=editar&acao=A&codigo="+codigo;
    }

<?php echo '</script'; ?>
>

<div class="container">
    <div class="row align-items-start">
      <div class="col-11">
          <div class="padding-padrao">
              <h1>Curso</h1>
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
                    <input type="text" class="form-control" placeholder="Pesquisar Curso">
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
            <th scope="col">Codigo</th>
            <th scope="col">Nome</th>
            <th scope="col">Carga horaria</th>
            <th scope="col">Emissor</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
            <?php echo '<?php'; ?>

                foreach ($colectionCurso as $objCurso){
            <?php echo '?>'; ?>

                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</th>
                    <td><?php echo '<?'; ?>
= $objCurso->getNome(); <?php echo '?>'; ?>
</td>
                    <td><?php echo '<?'; ?>
= $objCurso->getCargaHoraria(); <?php echo '?>'; ?>
 Horas</td>
                    <td><?php echo '<?'; ?>
= $objCurso->getEmissor(); <?php echo '?>'; ?>
</td>
                    <td>
                        <button type="button" title="Exibir" class="btn btn-primary btn-sm" onclick="javascript: exibir();">
                            <span class="material-icons">search</span>
                        </button>
                        <button type="button" title="Alterar" class="btn btn-warning btn-sm" onclick="javascript: alterar(<?php echo '<?'; ?>
= $objCurso->getCodigo(); <?php echo '?>'; ?>
)">
                            <span class="material-icons">edit</span>
                        </button>
                        <button type="button" title="excluir" class="btn btn-danger btn-sm" onclick="javascript: excluir()">
                            <span class="material-icons">delete_outline</span>
                        </button>
                    </td>
                </tr>
            <?php echo '<?php'; ?>

                }
            <?php echo '?>'; ?>

        </tbody>
    </table>

    <?php $_smarty_tpl->_subTemplateRender("file:editarCurso.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
