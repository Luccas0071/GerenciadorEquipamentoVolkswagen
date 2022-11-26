<?php
/* Smarty version 4.0.0, created on 2022-11-26 15:46:36
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\setor\pesquisarSetor.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_638226ccbffbb1_89834999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b3d4003f0a1f383aae2f4684794c8dd12f9b3e1' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\setor\\pesquisarSetor.html',
      1 => 1669473986,
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
function content_638226ccbffbb1_89834999 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function incluirSetor(){
        window.location = "index.php?do=setor&action=editar&acao=I";
    }

    function editarSetor(codigoSetor){
        window.location = "index.php?do=setor&action=editar&acao=A&codigoSetor=" + codigoSetor;
    }

    function excluirSetor(codigoSetor){

        var resposta = confirm("Deseja realmente excluir este Setor !");

        if(resposta == true){

            var urlAction = "index.php?do=setor&action=excluir";

            jQuery.ajax({
                type: 'GET',
                url: urlAction,
                data: {
                    'codigoSetor':codigoSetor
                },
                success: function (data) {
                    console.log(data);
                    window.location = "index.php?do=setor&action=inicio";
                    alert("Setor excluido com Sucesso !")
                }
            });
        }
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
