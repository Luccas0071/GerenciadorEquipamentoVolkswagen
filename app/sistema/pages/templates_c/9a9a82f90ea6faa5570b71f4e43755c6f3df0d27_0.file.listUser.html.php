<?php
/* Smarty version 4.0.0, created on 2022-03-27 20:05:18
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\user\listUser.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6240a75e863467_08455509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a9a82f90ea6faa5570b71f4e43755c6f3df0d27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\user\\listUser.html',
      1 => 1648404315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6240a75e863467_08455509 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function include() {
        window.location = "index.php?do=user&action=edit&share=I";
    }

    function displayUser(code) {
        window.location = "index.php?do=user&action=edit&share=E&code="+code;
    }

    function changeUser(code) {
        window.location = "index.php?do=user&action=edit&share=A&code="+code;
    }

    function deleteUser(code) {
        window.location = "index.php?do=user&action=edit&share=D&code="+code;
    }

<?php echo '</script'; ?>
>


<div class="container">
    <div class="row align-items-start">
      <div class="col-11">
          <div class="padding-padrao">
              <h1>Usuário</h1>
          </div>
      </div>
      <div class="col-1">
        <div class="padding-padrao">    
            <button type="button" name="btn-incluir" id="btn-incluir" class="btn btn-primary" onclick="include();">
                <i class="fas fa-plus"></i>Incluir
            </button>
        </div>
      </div>
    </div>
    <hr>
    <div class="row align-items-start">
        <div class="col-4">
            <div class="padding-padrao">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Pesquisar Colaborador">
                    <button type="button" name="btn-search" id="btn-search" class="btn btn-primary" onclick="search();">
                        <i class="fas fa-search"></i> Pesquisar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionUser']->value, 'objUser');
$_smarty_tpl->tpl_vars['objUser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objUser']->value) {
$_smarty_tpl->tpl_vars['objUser']->do_else = false;
?>
            <tr>
                <th class="col-1"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
</th>
                <td class="col-3"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
</td>
                <td class="col-3"><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
</td>
                <td class="col-2">
                    <button type="button" title="Exibir" class="btn btn-primary btn-sm" onclick="javascript: displayUser('<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
');">
                        <i class="fas fa-search"></i>
                    </button>
                    <button type="button" title="Alterar" class="btn btn-warning btn-sm" onclick="javascript: changeUser('<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
')">
                        <i class="fas fa-pen"></i>
                    </button>
                    <button type="button" title="excluir" class="btn btn-danger btn-sm" onclick="javascript: deleteUser('<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
')">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php }
}
