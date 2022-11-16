<?php
/* Smarty version 4.0.0, created on 2022-03-27 21:38:45
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\user\displayUser.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6240bd453bd775_82432075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49b9077c59eb66b06830d529491ff1aae076d5d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\user\\displayUser.html',
      1 => 1648409923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240bd453bd775_82432075 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    function deleteUser(code){
        console.log("Entrou no delete");
        console.log(code);
		var urlAction = "index.php?do=user&action=delete";

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
        window.location = "index.php?do=user&action=start";
        alert ("Usuário excluido com sucesso !")
    }

    function returnUser() {
        window.location = "index.php?do=user&action=start";
    }

<?php echo '</script'; ?>
>


<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="padding-padrao">
                <?php if ($_smarty_tpl->tpl_vars['objUserForm']->value->getShare() == "D") {?>
                    <h1>Excluir Usuário</h1>
                <?php } else { ?> 
                    <h1>Exibir Usuário</h1>
                <?php }?>
            </div>
        </div>

        <div class="col-1">
            <div class="padding-padrao">    
                <button type="button" name="btn-excluir" id="btn-excluir" class="btn btn-primary" onclick="deleteUser('<?php echo $_smarty_tpl->tpl_vars['objUserForm']->value->getId();?>
');">
                    <i class="fas fa-plus"></i>Excluir
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
                <h2><i class="fa-regular fa-user"></i> Exibir Usuário</h2>
            </div>
            <p class="font-weight-light">Informações do Usuário !</p>	
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
" disabled>
                </div>
            </div>

            <div class="col-3">
                <div class="padding-padrao">
                    <label for="email" title="Nome" class="text-ellipsis">E-Mail:</label>
                    <input type="text" name="email" id="email" class="email form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objUserForm']->value->getEmail();?>
" disabled>
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="status" title="status" class="text-ellipsis">Status:</label>
                    <select name="status" id="status" class="status form-control form-control-sm" disabled>
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
" disabled>
                </div>
            </div>

            <div class="col-2">
                <div class="padding-padrao">
                    <label for="updateDate" title="Nome" class="text-ellipsis">Data de Atualização:</label>
                    <input type="date" name="updateDate" id="updateDate" class="updateDate form-control form-control-sm" value="<?php echo $_smarty_tpl->tpl_vars['objUserForm']->value->getUpdateDate();?>
" disabled>
                </div>
            </div>
          
        </div>
    </div>
</form>
    <br>
</div>
<?php }
}
