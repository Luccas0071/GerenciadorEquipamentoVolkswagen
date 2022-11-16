<?php
/* Smarty version 4.0.0, created on 2022-11-13 00:39:58
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\arquivo\pesquisarPlanilha.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63702ece4840b3_67044551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52d24783cc9265eba9048b2540d8f2cf341bfd7d' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\arquivo\\pesquisarPlanilha.html',
      1 => 1668296394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:arquivo/listarPlanilha.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_63702ece4840b3_67044551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        
        <h3>Planilhas Fornecedor</h3>
        <hr>
        <p>Lista de planilha Fornecedores</p>
   
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

                    <div class="col-2">
                        <div class="padding-padrao">
                            <label for="title" title="Titulo" class="text-ellipsis">Data Inclusão:</label>
                            <input type="date" name="title" id="title" class="title form-control form-control-sm" value="" >
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
        <?php $_smarty_tpl->_subTemplateRender("file:arquivo/listarPlanilha.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>


<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
