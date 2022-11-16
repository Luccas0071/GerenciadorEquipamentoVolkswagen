<?php
/* Smarty version 4.0.0, created on 2022-02-28 21:20:12
  from 'C:\xampp atualizado\htdocs\mmSistema\sistema\pages\templates\colaborador\pesquisarColaborador.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_621d2e7c649d30_60769281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94d82addeec5374233ff4d315bd3ca24ba448770' => 
    array (
      0 => 'C:\\xampp atualizado\\htdocs\\mmSistema\\sistema\\pages\\templates\\colaborador\\pesquisarColaborador.php',
      1 => 1646079488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621d2e7c649d30_60769281 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function incluir() {
        console.log("Entrou no Incluir");
        window.location = "index.php?do=colaborador&action=editar&acao=I";
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
          <tr>
            <th scope="row">1</th>
            <td>Lucas Vinicius de Oliveira</td>
            <td>Programador</td>
            <td>(41) 9 8886-6412</td>
            <td>
                <button type="button" title="Exibir" class="btn btn-primary btn-sm" onclick="javascript: exibir();">
                    <span class="material-icons">search</span>
                </button>
                <button type="button" title="Alterar" class="btn btn-warning btn-sm" onclick="javascript: alterar()">
                    <span class="material-icons">edit</span>
                </button>
                <button type="button" title="excluir" class="btn btn-danger btn-sm" onclick="javascript: excluir()">
                    <span class="material-icons">delete_outline</span>
                </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
<?php }
}
