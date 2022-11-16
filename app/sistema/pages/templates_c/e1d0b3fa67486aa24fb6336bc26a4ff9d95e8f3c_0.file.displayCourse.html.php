<?php
/* Smarty version 4.0.0, created on 2022-04-01 02:24:47
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\course\displayCourse.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6246464ff21445_13331464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d0b3fa67486aa24fb6336bc26a4ff9d95e8f3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\course\\displayCourse.html',
      1 => 1648772679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6246464ff21445_13331464 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function deleteCourse(code){
        console.log(code);
		var urlAction = "index.php?do=course&action=delete";

		jQuery.ajax({
			type: 'GET',
			url: urlAction,
			data: {
                code: code
            },
			success: function (data) {
				console.log(data);
                redirect();
			}
		});
	}

    function redirect() {
        window.location = "index.php?do=course&action=start";
        alert ("Curso excluido com sucesso !")
    }

    function returnCourse() {

        window.location = "index.php?do=course&action=start";
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
        <div class="row">
            <div class="col-10">
                <div class="padding-padrao">
                    <?php if ($_smarty_tpl->tpl_vars['objCourseForm']->value->getShare() == "D") {?>
                        <h1>Excluir Curso</h1> 
					<?php } else { ?> 
                        <h1>Exibir Curso</h1>
					<?php }?>
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <?php if ($_smarty_tpl->tpl_vars['objCourseForm']->value->getShare() == "D") {?>
                        <button type="submit" name="btn-incluir" id="btn-incluir" class="btn btn-primary" onclick="deleteCourse('<?php echo $_smarty_tpl->tpl_vars['objCourseForm']->value->getId();?>
');">
                            <i class="fas fa-trash"></i> Excluir
                        </button>
                    <?php }?>
                    <button type="button" name="btn-voltar" id="btn-voltar" class="btn btn-primary" onclick="returnCourse();">
                        <i class="fas fa-arrow-left"></i> Voltar
                    </button>
                </div>
            </div>
        </div>
        <hr>
        
        <!-- Course -->
        <div class="row align-items-start">
            <div class="col-12">
                <div class="padding-padrao">
                    <h2><i class="fas fa-graduation-cap"></i> Exibir Curso</h2>
                </div>
                <p class="font-weight-light">Informações Cursos !</p>	
            </div>  
        </div>
            
        <form name="frmCourse" id="frmCourse" method="POST">
            <input type="hidden" name="share" 				id="share" 				value="<?php echo $_smarty_tpl->tpl_vars['objCourseForm']->value->getshare();?>
">
            <input type="hidden" name="idCourse" 			id="idCourse" 			value="<?php echo $_smarty_tpl->tpl_vars['objCourseForm']->value->getId();?>
">
            
        
            <div class="row align-items-start">
                <div class="col-1">
                    <div class="padding-padrao">
                        <label for="uniqueCode" title="Código Unico" class="text-ellipsis">Código:</label>
                        <input type="text" name="uniqueCode" id="uniqueCode" class="uniqueCode form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objCourseForm']->value->getUniqueCode();?>
" >
                    </div>
                </div>
    
                <div class="col-3">
                    <div class="padding-padrao">
                        <label for="title" title="Titulo" class="text-ellipsis">Titulo:</label>
                        <input type="text" name="title" id="title" class="title form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objCourseForm']->value->getTitle();?>
" >
                    </div>
                </div>
    
                <div class="col-4">
                    <div class="padding-padrao">
                        <label for="description" title="Descrição" class="text-ellipsis">Descrição:</label>
                        <input type="text" name="description" id="description" class="description form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objCourseForm']->value->getDescription();?>
" >
                    </div>
                </div>
    
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="creationDate" title="Data Criação" class="text-ellipsis">Data Criação:</label>
                        <input type="date" name="creationDate" id="creationDate" class="creationDate form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objCourseForm']->value->getCreationDate();?>
" >
                    </div>
                </div>
    
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="user" title="Usuário" class="text-ellipsis">Usuário:</label>
                        <select name="user" id="user" class="user form-control form-control-sm">
                            <option value="" selected>Selecione</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionUser']->value, 'objUser');
$_smarty_tpl->tpl_vars['objUser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objUser']->value) {
$_smarty_tpl->tpl_vars['objUser']->do_else = false;
?>
                                <?php if (($_smarty_tpl->tpl_vars['objCourseForm']->value->getUser() == $_smarty_tpl->tpl_vars['objUser']->value->getId())) {?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
</option>
                                <?php } else { ?>											
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
</option>
                                <?php }?> 
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
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
