<?php
/* Smarty version 4.0.0, created on 2022-11-26 15:02:18
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\colaborador\editarColaborador.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63821c6a0c35d2_53246889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d4f37336449b1058ec1224064a413a3380ff8fb' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\colaborador\\editarColaborador.html',
      1 => 1669471318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/header.html' => 1,
    'file:include/menu.html' => 1,
    'file:include/footer.html' => 1,
  ),
),false)) {
function content_63821c6a0c35d2_53246889 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function salvarColaborador(){
        var acao = jQuery("#acao").val();

        if (acao == "I") {
			var urlAction = "index.php?do=colaborador&action=incluir";
		}else{
			var urlAction = "index.php?do=colaborador&action=alterar";
		}

        formDados = new FormData(document.getElementById('frmColaborador'));

		jQuery.ajax({
			type: 'POST',
			url: urlAction,
			data: formDados,
			success: function (data) {
				console.log(data);
                redirecionar()
                if(acao == "I"){
                    alert("Colaborador Incluido com Sucesso !")
                }else{
                    alert("Colaborador Alterado com Sucesso !")
                }
			},
			cache: false,
			contentType: false,
			processData: false
		});
    }

    function redirecionar(){
        window.location = "index.php?do=colaborador&action=inicio";
    }

<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:include/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row">
        <div class="col-11">
            <div class="padding-padrao">
                <h2>Cadastrar Colaborador</h2>
            </div>
        </div>

        <div class="col-1">
            <div class="padding-padrao texto-right">    
                <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary btn-sm" onclick="salvarColaborador();">
                    <i class="fas fa-save"></i> Salvar
                </button>
            </div>
        </div>
    </div>
    <hr>

    <div class="row align-items-start">
        <div class="col-12">
            <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Colaborador !</p>	
        </div>  
    </div>
         
    <form name="frmColaborador" id="frmColaborador">
        <input type="hidden" name="acao" 				id="acao" 				    value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getAcao();?>
">
        <input type="hidden" name="codigoColaborador" 	id="codigoColaborador" 		value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getCodigo();?>
">
        
    
        <div class="row align-items-start">
            <div class="col-3">
                <div class="padding-padrao">
                    <label for="nome" title="Código Unico" class="text-ellipsis">Nome:</label>
                    <input type="text" name="nome" id="nome" class="nome form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getNome();?>
" >
                </div>
            </div>

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="cargo" title="Cargo" class="text-ellipsis">Cargo:</label>
                    <input type="text" name="cargo" id="cargo" class="cargo form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getFuncao();?>
" >
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="dataAdmissao" title="Data Admissão" class="text-ellipsis">Data Admissão:</label>
                    <input type="date" name="dataAdmissao" id="dataAdmissao" class="dataAdmissao form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objColaboradorForm']->value->getDataAdmissao();?>
" >
                </div>
            </div>
        </div>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
