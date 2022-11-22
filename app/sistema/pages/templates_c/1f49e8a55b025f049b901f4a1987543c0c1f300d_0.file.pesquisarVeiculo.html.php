<?php
/* Smarty version 4.0.0, created on 2022-11-22 01:03:48
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\veiculo\pesquisarVeiculo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_637c11e48480e9_04729022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f49e8a55b025f049b901f4a1987543c0c1f300d' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\veiculo\\pesquisarVeiculo.html',
      1 => 1669075425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:veiculo/listarVeiculo.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_637c11e48480e9_04729022 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function incluirVeiculo(){
        window.location = "index.php?do=veiculo&action=editar&acao=I";
    }

    function editarVeiculo(codigoVeiculo){
        window.location = "index.php?do=veiculo&action=editar&acao=A&codigoVeiculo=" + codigoVeiculo;
    }

    function excluirVeiculo(codigoVeiculo){

        var resposta = confirm("Deseja realmente excluir este veiculo !");

        if(resposta == true){

            var urlAction = "index.php?do=veiculo&action=excluir";

            jQuery.ajax({
                type: 'GET',
                url: urlAction,
                data: {
                    'codigoVeiculo':codigoVeiculo
                },
                success: function (data) {
                    console.log(data);
                    window.location = "index.php?do=veiculo&action=inicio";
                    alert("Veiculo excluido com Sucesso !")
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
            <h3>Veiculos</h3>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-primary btn-sm" onclick="incluirVeiculo()">
                <i class="fa-solid fa-plus"></i> Incluir
            </button>
        </div>
        <hr>
        <p>Lista de Veiculos</p>
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
        <?php $_smarty_tpl->_subTemplateRender("file:veiculo/listarVeiculo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
</div>


<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
