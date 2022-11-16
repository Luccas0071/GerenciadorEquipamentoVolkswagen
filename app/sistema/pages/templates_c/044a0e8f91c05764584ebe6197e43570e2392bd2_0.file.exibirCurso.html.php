<?php
/* Smarty version 4.0.0, created on 2022-03-03 00:41:34
  from 'C:\xampp atualizado\htdocs\mmSistema\sistema\pages\templates\curso\exibirCurso.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_622000aee7c187_75902965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '044a0e8f91c05764584ebe6197e43570e2392bd2' => 
    array (
      0 => 'C:\\xampp atualizado\\htdocs\\mmSistema\\sistema\\pages\\templates\\curso\\exibirCurso.html',
      1 => 1646264480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622000aee7c187_75902965 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function voltar() {

        window.location = "index.php?do=curso&action=inicio";
    }

    function desabilitaCampo(escopo = ".principal", disabled = true) {
        console.log("Entrou no Desabilitar");
        let principal = jQuery(escopo).first();

        jQuery(principal).find('input:not([type=button]), select, textarea').each((indice, input) => {

            if (disabled) {
                jQuery(input).attr("disabled", "disabled");
            } else {
                jQuery(input).attr("readonly", "readonly");
            }
        });
    }

<?php echo '</script'; ?>
>

<div class="container">
    <form name="frmCurso" id="frmCurso" action="index.php?do=curso&action=excluir" method="POST">
        <div class="row">
            <div class="col-10">
                <div class="padding-padrao">
                    <?php if ($_smarty_tpl->tpl_vars['objCursoForm']->value->getAcao() == "D") {?>
                        <h1>Excluir Curso</h1> 
					<?php } else { ?> 
                        <h1>Exibir Curso</h1>
					<?php }?>
                </div>
            </div>

        
            <div class="col-2">
                <div class="padding-padrao">
                    <?php if ($_smarty_tpl->tpl_vars['objCursoForm']->value->getAcao() == "D") {?>
                        <button type="submit" name="btn-incluir" id="btn-incluir" class="btn btn-primary">
                            <i class="fas fa-plus"></i> EXCLUIR
                        </button>
                    <?php }?>
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
</div>
<?php echo '<script'; ?>
>	
	desabilitaCampo();	
<?php echo '</script'; ?>
> <?php }
}
