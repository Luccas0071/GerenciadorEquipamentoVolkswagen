<?php
/* Smarty version 4.0.0, created on 2022-03-27 21:34:53
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\user\editUser.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6240bc5d774160_83350799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dd1bd581ded439c8296223b1911826470ee88a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\user\\editUser.html',
      1 => 1648408063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240bc5d774160_83350799 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function returnUser() {
        window.location = "index.php?do=user&action=start";
    }

    function save() {
		var share = jQuery("#share").val();

		if (share == "A") {
			var urlAction = "index.php?do=user&action=change";
		}

		if (share == "I") {
			var urlAction = "index.php?do=user&action=include";
		}

		formDados = new FormData(document.getElementById('formUser'));

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
        window.location = "index.php?do=user&action=start";
        alert ("Usuário incluido com sucesso !")
    }

<?php echo '</script'; ?>
>

<div class="container">
        <div class="row">
            <div class="col-10">
                <div class="padding-padrao">
                    <?php if ($_smarty_tpl->tpl_vars['objUserForm']->value->getShare() == "A") {?>
                        <h1>Alterar Usuário</h1>
					<?php } else { ?> 
                        <h1>Cadastro de Usuário</h1>
					<?php }?>
                </div>
            </div>

            <div class="col-1">
                <div class="padding-padrao">    
                    <button type="button" name="btn-include" id="btn-include" class="btn btn-primary" onclick="save();">
                        <i class="fas fa-plus"></i>Salvar
                    </button>
                </div>
            </div>
            <div class="col-1">
                <div class="padding-padrao">   
                    <button type="button" name="btn-voltar" id="btn-voltar" class="btn btn-primary" onclick="returnUser();">
                        <i class="fas fa-arrow-left"></i> Voltar
                    </button>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="row align-items-start">
            <div class="col-12">
                <div class="padding-padrao">
                    <h2><i class="fa-regular fa-user"></i> Cadastrar Usuário</h2>
                </div>
                <p class="font-weight-light">Preencha os campos abaixo para cadastrar um novo Usuário !</p>	
            </div>  
        </div>
            
        <form name="formUser" id="formUser" method="POST">
            <input type="hidden" name="share" 				id="share" 					value="<?php echo $_smarty_tpl->tpl_vars['objUserForm']->value->getShare();?>
">
			<input type="hidden" name="idUser" 			    id="idUser" 			    value="<?php echo $_smarty_tpl->tpl_vars['objUserForm']->value->getId();?>
">
        
            <div class="row align-items-start">
                <div class="col-3">
                    <div class="padding-padrao">
                        <label for="name" title="Nome" class="text-ellipsis">Nome:</label>
                        <input type="text" name="name" id="name" class="name form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objUserForm']->value->getName();?>
" >
                    </div>
                </div>

                <div class="col-3">
                    <div class="padding-padrao">
                        <label for="email" title="Nome" class="text-ellipsis">E-Mail:</label>
                        <input type="text" name="email" id="email" class="email form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objUserForm']->value->getEmail();?>
">
                    </div>
                </div>

                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="status" title="status" class="text-ellipsis">Status:</label>
                        <select name="status" id="status" class="status form-control form-control-sm">
                            <option value="" selected>Selecione</option>
                            <option value="true" selected>Ativo</option>
                            <option value="false" selected>Inativo</option>
                        </select>
                    </div>
                </div>

                <div class="col-2">
                    <div class="padding-padrao">
                        <label for="creationDate" title="Nome" class="text-ellipsis">Data de Criação:</label>
                        <input type="date" name="creationDate" id="creationDate" class="creationDate form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objUserForm']->value->getCreationDate();?>
" >
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['objUserForm']->value->getShare() == "A") {?>
                    <div class="col-2">
                        <div class="padding-padrao">
                            <label for="updateDate" title="Nome" class="text-ellipsis">Data de Atualização:</label>
                            <input type="date" name="updateDate" id="updateDate" class="updateDate form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objUserForm']->value->getUpdateDate();?>
" readonly>
                        </div>
                    </div>
                <?php }?>
            </div>
    
    </form>
    <br>
</div><?php }
}
