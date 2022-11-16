<?php
/* Smarty version 4.0.0, created on 2022-03-02 22:56:06
  from 'C:\xampp atualizado\htdocs\mmSistema\sistema\pages\templates\curso\incluirCurso.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_621fe7f6b87509_18676930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb7dc476a6f668521a95867c2642c47c4abeebce' => 
    array (
      0 => 'C:\\xampp atualizado\\htdocs\\mmSistema\\sistema\\pages\\templates\\curso\\incluirCurso.html',
      1 => 1646257935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621fe7f6b87509_18676930 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function voltar() {
        window.location = "index.php?do=curso&action=inicio";
    }

    function salvar() {

		var urlAction = "index.php?do=curso&action=incluir";
		

		formDados = new FormData(document.getElementById('frmCurso'));

		jQuery.ajax({
			type: 'POST',
			url: urlAction,
			data: formDados,
			success: function (data) {
				console.log(data);
				

			},
			cache: false,
			contentType: false,
			processData: false
		});
	}

<?php echo '</script'; ?>
>
<!-- action="index.php?do=curso&action=incluir"  -->
<div class="container">
    <form name="frmCurso" id="frmCurso" method="POST">
        <div class="row">
            <div class="col-10">
                <div class="padding-padrao">
                    <h1>Incluir Curso</h1> 
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
                        <h2><span class="material-icons">menu_book</span> Incluir Curso</h2>
                    </div>
                    <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Curso !</p>	
                </div>  
            </div>

            <input type="hidden" name="acao" 					id="acao" 					value="">
			<input type="hidden" name="codigoCurso" 			id="codigoCurso" 			value="">
        
            <div class="row align-items-start">
                <div class="col-4">
                    <div class="padding-padrao">
                        <label for="nome" title="Nome" class="text-ellipsis">Nome:</label>
                        <input type="text" name="nome" id="nome" class="nome form-control form-control-sm" value="" >
                    </div>
                </div>

                <div class="col-4">
                    <div class="padding-padrao">
                        <label for="cargaHoraria" title="Carga Horaria" class="text-ellipsis">Carga horaria:</label>
                        <input type="text" name="cargaHoraria" id="cargaHoraria" class="cargaHoraria form-control form-control-sm" value="" >
                    </div>
                </div>

                <div class="col-4">
                    <div class="padding-padrao">
                        <label for="emissor" title="Emissor" class="text-ellipsis">Emissor:</label>
                        <input type="text" name="emissor" id="emissor" class="emissor form-control form-control-sm" value="" >
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
</div><?php }
}
