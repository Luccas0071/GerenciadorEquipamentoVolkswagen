<?php
/* Smarty version 4.0.0, created on 2022-11-26 22:18:39
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\planilhaCalibracao\pesquisarPlanilhaCalibracao.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_638282afa10d09_54942589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dc7a7da932288b327d1afd00655e819b6e3b7e4' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\planilhaCalibracao\\pesquisarPlanilhaCalibracao.html',
      1 => 1669497514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:planilhaCalibracao/listarPlanilhaCalibracao.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_638282afa10d09_54942589 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function editarPlanilhaCalibracao(codigoPlanilhaCalibracao){
        window.location = "index.php?do=planilhaCalibracao&action=editar&acao=A&codigoPlanilhaCalibracao=" + codigoPlanilhaCalibracao;
    }

    function excluirPlanilhaCalibracao(codigoPlanilhaCalibracao){

        var resposta = confirm("Deseja realmente excluir este planilha de calibragem !");

        if(resposta == true){

            var urlAction = "index.php?do=planilhaCalibracao&action=excluir";

            jQuery.ajax({
                type: 'GET',
                url: urlAction,
                data: {
                    'codigoPlanilhaCalibracao':codigoPlanilhaCalibracao
                },
                success: function (data) {
                    console.log(data);
                    window.location = "index.php?do=planilhaCalibracao&action=inicio";
                    alert("Planilha excluido com Sucesso !")
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
        
        <h3>Planilhas Caligragem</h3>
        <hr>
        <p>Lista de planilha Caligragem</p>
   
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
        <?php $_smarty_tpl->_subTemplateRender("file:planilhaCalibracao/listarPlanilhaCalibracao.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>


<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
