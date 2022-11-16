<?php
/* Smarty version 4.0.0, created on 2022-03-13 19:18:54
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\curso\editarCurso.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_622e358e7b0161_65545452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64d354fa5a191d5768c73d58aa08f61018da463f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\curso\\editarCurso.html',
      1 => 1647195460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622e358e7b0161_65545452 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function voltar() {
        window.location = "index.php?do=curso&action=inicio";
    }

    function salvar() {

        
		var acao = jQuery("#acao").val();

		if (acao == "A") {
			var urlAction = "index.php?do=curso&action=alterar";
		}

		if (acao == "I") {
			var urlAction = "index.php?do=curso&action=incluir";
		}

		formDados = new FormData(document.getElementById('frmCurso'));

		jQuery.ajax({
			type: 'POST',
			url: urlAction,
			data: formDados,
			success: function (data) {
				console.log(data);
                redirecionar();
			},
			cache: false,
			contentType: false,
			processData: false
		});
	}

    function redirecionar() {
        window.location = "index.php?do=curso&action=inicio&sucesso";
    }

<?php echo '</script'; ?>
>

<div class="container">
        <div class="row">
            <div class="col-10">
                <div class="padding-padrao">
                    <?php if ($_smarty_tpl->tpl_vars['objCursoForm']->value->getAcao() == "A") {?>
                        <h1>Alterar Curso</h1>
					<?php } else { ?> 
                        <h1>Cadastro de Curso</h1>
					<?php }?>
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">    
                    <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary" onclick="salvar();">
                        <i class="fas fa-plus"></i> SALVAR
                    </button>

                    <button type="button" name="btn-voltar" id="btn-voltar" class="btn btn-primary" onclick="voltar();">
                        <i class="fas fa-plus"></i> VOLTAR
                    </button>
                </div>
            </div>
        </div>
        <hr>
        
        <!-- Curso -->
        <div id="curso">
            <div class="row align-items-start">
                <div class="col-12">
                    <div class="padding-padrao">
                        <h2><span class="material-icons">menu_book</span> Alterar Curso</h2>
                    </div>
                    <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Curso !</p>	
                </div>  
            </div>
            
        <form name="frmCurso" id="frmCurso" method="POST">
            <input type="hidden" name="acao" 					id="acao" 					value="<?php echo $_smarty_tpl->tpl_vars['objCursoForm']->value->getAcao();?>
">
			<input type="hidden" name="codigoCurso" 			id="codigoCurso" 			value="<?php echo $_smarty_tpl->tpl_vars['objCursoForm']->value->getCodigo();?>
">
        
            <div class="row align-items-start">
                <div class="col-4">
                    <div class="padding-padrao">
                        <label for="nome" title="Nome" class="text-ellipsis">Nome:</label>
                        <input type="text" name="nome" id="nome" class="nome form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objCursoForm']->value->getNome();?>
" >
                    </div>
                </div>

                <div class="col-4">
                    <div class="padding-padrao">
                        <label for="cargaHoraria" title="Carga Horaria" class="text-ellipsis">Carga horaria:</label>
                        <input type="text" name="cargaHoraria" id="cargaHoraria" class="cargaHoraria form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objCursoForm']->value->getCargaHoraria();?>
" >
                    </div>
                </div>

                <div class="col-4">
                    <div class="padding-padrao">
                        <label for="emissor" title="Emissor" class="text-ellipsis">Emissor:</label>
                        <input type="text" name="emissor" id="emissor" class="emissor form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objCursoForm']->value->getEmissor();?>
" >
                    </div>
                </div>
            
            </div>
        </div>
    </form>
    <br>
</div><?php }
}
