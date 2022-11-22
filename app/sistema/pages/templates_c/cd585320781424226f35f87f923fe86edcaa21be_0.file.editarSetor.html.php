<?php
/* Smarty version 4.0.0, created on 2022-11-22 02:12:03
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\setor\editarSetor.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_637c21e3ca5b81_16402940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd585320781424226f35f87f923fe86edcaa21be' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\setor\\editarSetor.html',
      1 => 1669079484,
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
function content_637c21e3ca5b81_16402940 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function salvarSetor(){
        var acao = jQuery("#acao").val();

        if (acao == "I") {
			var urlAction = "index.php?do=setor&action=incluir";
		}else{
			var urlAction = "index.php?do=setor&action=alterar";
		}

        formDados = new FormData(document.getElementById('frmSetor'));

		jQuery.ajax({
			type: 'POST',
			url: urlAction,
			data: formDados,
			success: function (data) {
				console.log(data);
                // redirecionar()
                // alert("Colaborador Incluido com Sucesso !")
			},
			cache: false,
			contentType: false,
			processData: false
		});
    }

    function redirecionar(){
        window.location = "index.php?do=setor&action=inicio";
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
                <h2>Cadastrar Setor</h2>
            </div>
        </div>

        <div class="col-1">
            <div class="padding-padrao texto-right">    
                <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary btn-sm" onclick="salvarSetor();">
                    <i class="fas fa-save"></i> Salvar
                </button>
            </div>
        </div>
    </div>
    <hr>

    <div class="row align-items-start">
        <div class="col-12">
            <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Setor !</p>	
        </div>  
    </div>
         
    <form name="frmSetor" id="frmSetor">
        <input type="hidden" name="acao" 			id="acao" 				    value="<?php echo $_smarty_tpl->tpl_vars['objSetorForm']->value->getAcao();?>
">
        <input type="hidden" name="codigoSetor" 	id="codigoSetor" 		value="<?php echo $_smarty_tpl->tpl_vars['objSetorForm']->value->getCodigo();?>
">
        
    
        <div class="row align-items-start">

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="codigoVeiculo" title="Veiculo" class="text-ellipsis">Veiculo:</label>
                    <select name="codigoVeiculo" id="codigoVeiculo" class="codigoVeiculo form-control form-control-sm">
                        <option value="" selected>Selecione</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionVeiculo']->value, 'objVeiculo');
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objVeiculo']->value) {
$_smarty_tpl->tpl_vars['objVeiculo']->do_else = false;
?>
                            <?php if (($_smarty_tpl->tpl_vars['objSetorForm']->value->getCodigoVeiculo() == $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo())) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo();?>
" selected><?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getNome();?>
</option>
                            <?php } else { ?>											
                                <option value="<?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getCodigo();?>
"><?php echo $_smarty_tpl->tpl_vars['objVeiculo']->value->getNome();?>
</option>
                            <?php }?> 
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="nome" title="Código Unico" class="text-ellipsis">Nome:</label>
                    <input type="text" name="nome" id="nome" class="nome form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objSetorForm']->value->getNome();?>
" >
                </div>
            </div>

           
            <div class="col-2">
                <div class="padding-padrao">
                    <label for="dataInclusaoSetor" title="Data Admissão" class="text-ellipsis">Data Inclusão:</label>
                    <input type="date" name="dataInclusaoSetor" id="dataInclusaoSetor" class="dataInclusaoSetor form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objSetorForm']->value->getDataInclusao();?>
" >
                </div>
            </div>
        </div>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
