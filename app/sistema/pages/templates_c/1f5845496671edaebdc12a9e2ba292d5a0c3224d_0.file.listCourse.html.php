<?php
/* Smarty version 4.0.0, created on 2022-04-03 21:25:44
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\course\listCourse.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6249f4b814bb40_99484107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f5845496671edaebdc12a9e2ba292d5a0c3224d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\course\\listCourse.html',
      1 => 1649013864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249f4b814bb40_99484107 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 language="JavaScript">
    jQuery.noConflict();

    function include() {
        window.location = "index.php?do=course&action=edit&share=I";
    }

    function displayCourse(code) {
        window.location = "index.php?do=course&action=edit&share=E&code="+code;
    }

    function moduleCourse(code) {
        window.location = "index.php?do=module&action=start&code="+code;
    }

    function changeCourse(code) {
        window.location = "index.php?do=course&action=edit&share=A&code="+code;
    }

    function deleteCourse(code) {
        window.location = "index.php?do=course&action=edit&share=D&code="+code;
    }

<?php echo '</script'; ?>
>

<div class="container">
    <div class="row align-items-start">
      <div class="col-11">
          <div class="padding-padrao">
              <h1>Curso</h1>
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
</div>

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th class="col-1">#</th>
            <th class="col-1">Codigo</th>
            <th class="col-2">Titulo</th>
            <th class="col-2">Responsável</th>
            <th class="col-1">Ação</th>
          </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionCourse']->value, 'objCourse');
$_smarty_tpl->tpl_vars['objCourse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objCourse']->value) {
$_smarty_tpl->tpl_vars['objCourse']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('objUser', $_smarty_tpl->tpl_vars['objCourse']->value->getObjUser());?>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['objCourse']->value->getId();?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['objCourse']->value->getUniqueCode();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objCourse']->value->getTitle();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getName();?>
</td>
                    <td>
                        <button type="button" title="Exibir" class="btn btn-primary btn-sm" onclick="javascript: displayCourse('<?php echo $_smarty_tpl->tpl_vars['objCourse']->value->getId();?>
');">
                            <i class="fas fa-search"></i>
                        </button>
                        <button type="button" title="Modulo" class="btn btn-info btn-sm" onclick="javascript: moduleCourse('<?php echo $_smarty_tpl->tpl_vars['objCourse']->value->getId();?>
');">
                            <i class="fas fa-layer-group"></i>
                        </button>
                        <button type="button" title="Alterar" class="btn btn-warning btn-sm" onclick="javascript: changeCourse('<?php echo $_smarty_tpl->tpl_vars['objCourse']->value->getId();?>
')">
                            <i class="fas fa-pen"></i>
                        </button>
                        <button type="button" title="Excluir" class="btn btn-danger btn-sm" onclick="javascript: deleteCourse('<?php echo $_smarty_tpl->tpl_vars['objCourse']->value->getId();?>
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
