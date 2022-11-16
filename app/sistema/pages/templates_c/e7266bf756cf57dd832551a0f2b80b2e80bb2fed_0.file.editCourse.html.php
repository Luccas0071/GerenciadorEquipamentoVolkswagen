<?php
/* Smarty version 4.0.0, created on 2022-03-27 23:47:05
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\course\editCourse.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6240db59ef13d7_51098927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7266bf756cf57dd832551a0f2b80b2e80bb2fed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\course\\editCourse.html',
      1 => 1648417108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240db59ef13d7_51098927 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function returnCourse() {
        window.location = "index.php?do=course&action=start";
    }

    function save() {

		var share = jQuery("#share").val();

		if (share == "A") {
			var urlAction = "index.php?do=course&action=change";
		}

		if (share == "I") {
			var urlAction = "index.php?do=course&action=include";
		}

		formDados = new FormData(document.getElementById('frmCourse'));

		jQuery.ajax({
			type: 'POST',
			url: urlAction,
			data: formDados,
			success: function (data) {
				console.log(data);
                redirect();
			},
			cache: false,
			contentType: false,
			processData: false
		});
	}

    function redirect() {
        window.location = "index.php?do=course&action=start";
        alert ("Curso incluido com sucesso !")
    }

    /* function exibeCourse() {
        jQuery("#course").slideDown();
        jQuery("#module").slideUp();

        jQuery("#linkCourse").removeClass("inactive").addClass("active");
        jQuery("#linkModule").removeClass("active").addClass("inactive");
    }

    function exibeModule() {
        jQuery("#module").removeAttr("style");
        jQuery("#course").slideUp();
        jQuery("#module").slideDown();

        jQuery("#linkCourse").removeClass("active").addClass("inactive");
        jQuery("#linkModule").removeClass("inactive").addClass("active");
    } */

<?php echo '</script'; ?>
>

<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="padding-padrao">
                <?php if ($_smarty_tpl->tpl_vars['objCourseForm']->value->getShare() == "A") {?>
                    <h1>Alterar Curso</h1>
                <?php } else { ?> 
                    <h1>Cadastro de Curso</h1>
                <?php }?>
            </div>
        </div>

        <div class="col-2">
            <div class="padding-padrao">    
                <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary" onclick="save();">
                    <i class="fas fa-plus"></i>Salvar
                </button>

                <button type="button" name="btn-voltar" id="btn-voltar" class="btn btn-primary" onclick="returnCourse();">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>
            </div>
        </div>
    </div>
    <hr>

    <div class="row align-items-start">
        <div class="col-12">
            <div class="padding-padrao">
                <h2><i class="fas fa-graduation-cap"></i> Cadastrar Curso</h2>
            </div>
            <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Curso !</p>	
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
</div><?php }
}
