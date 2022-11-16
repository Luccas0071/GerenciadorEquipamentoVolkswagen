<?php
/* Smarty version 4.0.0, created on 2022-04-02 22:28:02
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\contents\editContents.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6248b1d27472d9_10000641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ecd4b8bd6464f3030780288dc868404013bfbe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\contents\\editContents.html',
      1 => 1648931276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:contents/listContents.html' => 1,
  ),
),false)) {
function content_6248b1d27472d9_10000641 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function returnModule() {
        window.location = "index.php?do=module&action=edit";
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

    function displayListContents() {
        console.log('Entrou');
        jQuery("#listContents").slideDown();
        jQuery("#addContents").slideUp();

        jQuery("#linkListContents").removeClass("inactive").addClass("active");
        jQuery("#linkAddContents").removeClass("active").addClass("inactive");
    }

    function displayAddContents() {
        console.log('saiu');
        jQuery("#addContents").removeAttr("style");
        jQuery("#listContents").slideUp();
        jQuery("#addContents").slideDown();

        jQuery("#linkListContents").removeClass("active").addClass("inactive");
        jQuery("#linkAddContents").removeClass("inactive").addClass("active");
    }

<?php echo '</script'; ?>
>

<div class="container">
    <div class="row">
        <div class="col-11">
            <div class="padding-padrao">
                <?php if ($_smarty_tpl->tpl_vars['objContentsForm']->value->getShare() == "A") {?>
                    <h1>Alterar Conteúdo</h1>
                <?php } else { ?> 
                    <h1>Cadastro de Conteúdo</h1>
                <?php }?>
            </div>
        </div>
    
        <div class="col-1">
            <div class="padding-padrao">    
                

                <button type="button" name="btn-voltar" id="btn-voltar" class="btn btn-primary" onclick="returnModule();">
                    <i class="fas fa-arrow-left"></i> Voltar
                </button>
            </div>
        </div>
    </div>
    <hr>

    <form name="frmContents" id="frmContents" method="POST">
        <input type="hidden" name="share" 				id="share" 				value="<?php echo $_smarty_tpl->tpl_vars['objContentsForm']->value->getShare();?>
">
        <input type="hidden" name="idContents" 			id="idContents" 		value="<?php echo $_smarty_tpl->tpl_vars['objContentsForm']->value->getId();?>
">
        <input type="hidden" name="idModule" 			id="idModule" 		    value="<?php echo $_smarty_tpl->tpl_vars['objContentsForm']->value->getModule();?>
">
        
        <div class="row align-items-start">
            <div class="col-12">
                <ul class="aba-escolha">
                    <li class="ativo" id="linkListContents" onclick="displayListContents();">
                        <a href="#"><i class="fas fa-align-center"></i> Lista Conteúdo</a> 
                         
                    </li>
                    <li class="inativo" id="linkAddContents" onclick="displayAddContents();">
                        <a href="#"><i class="fas fa-plus-circle"></i> Adicionar Conteúdo</a> 
                    </li>
                </ul>
            </div>
        </div>

        <div id="listContents">
            <?php $_smarty_tpl->_subTemplateRender("file:contents/listContents.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div id="addContents" style="display: none">
            <div class="row align-items-start">
                <div class="col-12">
                    <div class="padding-padrao">
                        <h2><i class="fas fa-align-center"></i> Conteúdo</h2>
                    </div>
                    <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Conteúdo !</p>	
                </div>  
            </div>

            <div class="row align-items-start">
               
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="title" title="Titulo" class="text-ellipsis">Titulo:</label>
                        <input type="text" name="title" id="title" class="title form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objContentsForm']->value->getTitle();?>
" >
                    </div>
                </div>
    
                <div class="col-3">
                    <div class="padding-padrao">
                        <label for="contents" title="Conteúdo" class="text-ellipsis">Conteúdo:</label>
                        <input type="text" name="contents" id="contents" class="contents form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objContentsForm']->value->getContents();?>
" >
                    </div>
                </div>
    
                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="creationDate" title="Data Criação" class="text-ellipsis">Data Criação:</label>
                        <input type="date" name="creationDate" id="creationDate" class="creationDate form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objContentsForm']->value->getCreationDate();?>
" >
                    </div>
                </div>
    
            </div>
        </div>
    
        


    </form>
</div><?php }
}
