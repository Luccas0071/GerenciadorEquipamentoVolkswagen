<?php
/* Smarty version 4.0.0, created on 2022-03-06 17:07:28
  from 'C:\xampp atualizado\htdocs\mmSistema\sistema\pages\templates\colaborador\item\itemCursosBase.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6224dc40de8520_98295522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '066737f987d05c038af7380ba36a20497451ed22' => 
    array (
      0 => 'C:\\xampp atualizado\\htdocs\\mmSistema\\sistema\\pages\\templates\\colaborador\\item\\itemCursosBase.html',
      1 => 1646582846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6224dc40de8520_98295522 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="itemCursosBase-base" style="display: none;">
    <div class="itemCursosBase-i" id="itemCursosBase-sequencia-">
        <div class="row">
            <div class="col-1" style="display: none;">
                <div class="padding-padrao">
                    <input type="hidden" class="indice" name="indice-i-" id="indece-i-">
                    <input type="hidden" class="codigoItemCurso" name="codigoItemCurso-i-" id="codigoItemCurso-i-">
                    <input type="hidden" class="sequenciaNegocio" name="sequencia-i-" id="sequencia-i-">
                </div>
            </div>

            <div id="curso">
                <div class="row align-items-start">
                    <div class="col-3">
                        <div class="padding-padrao">
                            <label for="curso" title="Curso" class="text-ellipsis">Curso:</label>
                            <select name="curso-i-" id="curso-i-" class="curso form-select form-select-sm">
                                <option value="" selected>Selecione</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['collectionCurso']->value, 'objCurso');
$_smarty_tpl->tpl_vars['objCurso']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['objCurso']->value) {
$_smarty_tpl->tpl_vars['objCurso']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['objCurso']->value->getCodigo()) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['objCurso']->value->getCodigo();?>
" selected><?php echo $_smarty_tpl->tpl_vars['objCurso']->value->getNome();?>
</option>
                                    <?php } else { ?>											
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['objCurso']->value->getCodigo();?>
"><?php echo $_smarty_tpl->tpl_vars['objCurso']->value->getNome();?>
</option>
                                    <?php }?> 
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                            </select>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="padding-padrao">
                            <label for="dataConclusao" title="Data Conclusão" class="text-ellipsis">Data Conclusão:</label>
                            <input type="date" name="dataConclusao-i-" id="dataConclusao-i-" class="dataConclusao form-control form-control-sm" value="" >
                        </div>
                    </div>
    
                    <div class="col-2">
                        <div class="padding-padrao">
                            <label for="valor" title="Valor Remuneração" class="text-ellipsis">Remuneração:</label>
                            <input type="text" name="valor-i-" id="valor-i-" class="valor form-control form-control-sm" value="" >
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="padding-padrao">
                            <label for="observacao" title="Observação" class="text-ellipsis">Observação:</label>
                            <input type="text" name="observacao-i-" id="observacao-i-" class="valor form-control form-control-sm" value="" >
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="linha">
                            <div class="col-12"><br>
                                <div class="padding-padrao">
                                    <button type="button" title="excluir" class="btn btn-danger btn-sm" onclick="javascript: excluirItemCurso(this)">
                                        <span class="material-icons">delete_outline</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
