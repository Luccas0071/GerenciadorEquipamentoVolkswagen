<?php
/* Smarty version 4.0.0, created on 2022-11-27 21:39:21
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\relatorio\pesquisarRelatorio.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6383caf90f7b06_28967211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fa22a3b83700d8fad3bde73b02f9685dd21d00c' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\relatorio\\pesquisarRelatorio.html',
      1 => 1669581532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:relatorio/listarRelatorio.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_6383caf90f7b06_28967211 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function incluirRelatorio(){
        window.location = "index.php?do=relatorio&action=editar&acao=I";
    }


<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-10">
            <h3>Relatorio</h3>
        </div>
        <div class="col-2 texto-right">
            <button type="button" class="btn btn-primary btn-sm" onclick="incluirRelatorio()">
                <i class="far fa-plus"></i> Incluir Relatorio
            </button>
        </div>
        <hr>
        <p>Lista de Relatorios</p>
    </div>

        <div id="container">
            <div class="row">
                <div class="row align-items-start form-group">

                    <div class="col-3">
                        <div class="padding-padrao">
                            <label for="nome" title="Data Calibragem" class="text-ellipsis">Nome:</label>
                            <input type="text" name="nome" id="nome" class="nome form-control form-control-sm" value="">
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
        <?php $_smarty_tpl->_subTemplateRender("file:relatorio/listarRelatorio.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>


<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
