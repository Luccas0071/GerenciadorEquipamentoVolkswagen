<?php
/* Smarty version 4.0.0, created on 2022-11-15 13:23:02
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\equipamento\pesquisarEquipamento.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_637384a6581ce6_67879304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e98135d172d3e2b2b85723729560936d29a77b51' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\equipamento\\pesquisarEquipamento.html',
      1 => 1668514551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:equipamento/listarEquipamento.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_637384a6581ce6_67879304 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function incluirEquipamento(){
        window.location = "index.php?do=equipamento&action=editar&acao=I";
    }


<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-11">
            <h3>Equipamentos</h3>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-primary btn-sm" onclick="incluirEquipamento()">
                <i class="fa-solid fa-plus"></i> Incluir
            </button>
        </div>
        <hr>
        <p>Lista de Equipamentos</p>
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
        <?php $_smarty_tpl->_subTemplateRender("file:equipamento/listarEquipamento.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>


<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
