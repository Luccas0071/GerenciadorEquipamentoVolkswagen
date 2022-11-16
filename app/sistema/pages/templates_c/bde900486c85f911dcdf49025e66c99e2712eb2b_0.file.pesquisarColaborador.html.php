<?php
/* Smarty version 4.0.0, created on 2022-11-13 01:24:16
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\colaborador\pesquisarColaborador.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63703930470363_29059324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde900486c85f911dcdf49025e66c99e2712eb2b' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\colaborador\\pesquisarColaborador.html',
      1 => 1668299053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:colaborador/listarColaborador.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_63703930470363_29059324 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function incluirColaborador(){
        window.location = "index.php?do=colaborador&action=editar&acao=I";
    }


<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-11">
            <h3>Colaborador</h3>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-primary btn-sm" onclick="incluirColaborador()">
                <i class="fa-solid fa-plus"></i> Incluir
            </button>
        </div>
        <hr>
        <p>Lista de Colaboradores</p>
    </div>

        <div id="container">
            <div class="row">
                <div class="row align-items-start form-group">
                    <div class="col-3">
                        <div class="padding-padrao">
                            <label for="title" title="Titulo" class="text-ellipsis">Nome:</label>
                            <input type="text" name="title" id="title" class="title form-control form-control-sm" value="" >
                        </div>
                    </div>

                    <div class="col-2"><br>
                        <button type="button" class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-magnifying-glass"></i> Pesquisar
                        </button>
                    </div>
                </div>
            </div>
        </div>

          <br>
        <?php $_smarty_tpl->_subTemplateRender("file:colaborador/listarColaborador.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>


<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
