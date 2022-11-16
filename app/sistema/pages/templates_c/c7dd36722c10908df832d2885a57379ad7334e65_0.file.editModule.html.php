<?php
/* Smarty version 4.0.0, created on 2022-04-03 21:18:08
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\module\editModule.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6249f2f01d1456_78995451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7dd36722c10908df832d2885a57379ad7334e65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\module\\editModule.html',
      1 => 1649013445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:module/listModule.html' => 1,
  ),
),false)) {
function content_6249f2f01d1456_78995451 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function returnModule() {
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

    function displayListModule() {
        jQuery("#listModule").slideDown();
        jQuery("#addModule").slideUp();

        jQuery("#linkListModule").removeClass("inactive").addClass("active");
        jQuery("#linkAddModule").removeClass("active").addClass("inactive");
    }

    function displayAddModule() {
        jQuery("#listModule").slideUp();
        jQuery("#addModule").slideDown();

        jQuery("#linkListModule").removeClass("active").addClass("inactive");
        jQuery("#linkAddModule").removeClass("inactive").addClass("active");
    }

<?php echo '</script'; ?>
>

<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="padding-padrao">
                <?php if ($_smarty_tpl->tpl_vars['objModuleForm']->value->getShare() == "A") {?>
                    <h1>Alterar Module</h1>
                <?php } else { ?> 
                    <h1>Cadastro de Module</h1>
                <?php }?>
            </div>
        </div>

        <div class="col-2">
            <div class="padding-padrao">    
                <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary" onclick="save();">
                    <i class="fas fa-plus"></i>Salvar
                </button>

                <button type="button" name="btn-voltar" id="btn-voltar" class="btn btn-primary" onclick="returnModule();">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>
            </div>
        </div>
    </div>
    <hr>

    <form name="frmModule" id="frmModule" method="POST">
        <input type="hidden" name="share" 				id="share" 				value="<?php echo $_smarty_tpl->tpl_vars['objModuleForm']->value->getshare();?>
">
        <input type="hidden" name="idModule" 			id="idModule" 			value="<?php echo $_smarty_tpl->tpl_vars['objModuleForm']->value->getId();?>
">
        
        <div class="row align-items-start">
            <div class="col-12">
                <ul class="aba-escolha">
                    <li class="ativo" id="linkListModule" onclick="displayListModule();">
                        <a href="#"><i class="fas fa-layer-group"></i> Lista Módulo</a> 
                         
                    </li>
                    <li class="inativo" id="linkAddModule" onclick="displayAddModule();">
                        <a href="#"><i class="fas fa-plus-circle"></i> Adicionar Módulo</a> 
                    </li>
                </ul>
            </div>
        </div>

        <div id="listModule">
            <?php $_smarty_tpl->_subTemplateRender("file:module/listModule.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div id="addModule" style="display: none">
            <div class="row align-items-start">
                <div class="col-12">
                    <div class="padding-padrao">
                        <h2><i class="fas fa-layer-group"></i> Modulo</h2>
                    </div>
                    <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Modulo !</p>	
                </div>  
            </div>

            <div class="row align-items-start">
               
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="title" title="Titulo" class="text-ellipsis">Titulo:</label>
                        <input type="text" name="title" id="title" class="title form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objModuleForm']->value->getTitle();?>
" >
                    </div>
                </div>
    
                <div class="col-3">
                    <div class="padding-padrao">
                        <label for="description" title="Descrição" class="text-ellipsis">Descrição:</label>
                        <input type="text" name="description" id="description" class="description form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objModuleForm']->value->getDescription();?>
" >
                    </div>
                </div>
    
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="creationDate" title="Data Criação" class="text-ellipsis">Data Criação:</label>
                        <input type="date" name="creationDate" id="creationDate" class="creationDate form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objModuleForm']->value->getCreationDate();?>
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
                                <?php if (($_smarty_tpl->tpl_vars['objModuleForm']->value->getUser() == $_smarty_tpl->tpl_vars['objUser']->value->getId())) {?>
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
        </div>
    
        


    </form>
</div><?php }
}
