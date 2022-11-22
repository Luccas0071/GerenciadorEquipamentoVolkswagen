<?php
/* Smarty version 4.0.0, created on 2022-11-22 01:52:18
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\setor\pesquisarSetor.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_637c1d427dcda4_15390760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b3d4003f0a1f383aae2f4684794c8dd12f9b3e1' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\setor\\pesquisarSetor.html',
      1 => 1669078157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:setor/listarSetor.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_637c1d427dcda4_15390760 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function incluirSetor(){
        window.location = "index.php?do=setor&action=editar&acao=I";
    }


<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-11">
            <h3>Setores</h3>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-primary btn-sm" onclick="incluirSetor()">
                <i class="fa-solid fa-plus"></i> Incluir
            </button>
        </div>
        <hr>
        <p>Lista de Setores</p>
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
        <?php $_smarty_tpl->_subTemplateRender("file:setor/listarSetor.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>


<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
