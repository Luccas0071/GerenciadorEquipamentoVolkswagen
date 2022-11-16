<?php
/* Smarty version 4.0.0, created on 2022-02-27 16:43:23
  from 'C:\xampp atualizado\htdocs\mmSistema\sistema\pages\templates\colaborador\listarColaborador.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_621b9c1ba50695_14836297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dc1700499b645a2dc5a749776fcbc254fe7ab4e' => 
    array (
      0 => 'C:\\xampp atualizado\\htdocs\\mmSistema\\sistema\\pages\\templates\\colaborador\\listarColaborador.html',
      1 => 1645976601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621b9c1ba50695_14836297 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Função</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Lucas Vinicius de Oliveira</td>
        <td>Programador</td>
        <td>(41) 9 8886-6412</td>
        <td>
            <button type="button" title="Exibir" class="btn btn-primary btn-sm" onclick="javascript: exibir();">
                <span class="material-icons">search</span>
            </button>
            <button type="button" title="Alterar" class="btn btn-warning btn-sm" onclick="javascript: alterar()">
                <span class="material-icons">edit</span>
            </button>
            <button type="button" title="excluir" class="btn btn-danger btn-sm" onclick="javascript: excluir()">
                <span class="material-icons">delete_outline</span>
            </button>
        </td>
      </tr>
    </tbody>
  </table>
</div><?php }
}
