<?php
/* Smarty version 4.0.0, created on 2022-02-28 01:39:47
  from 'C:\xampp atualizado\htdocs\mmSistema\sistema\pages\templates\include\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_621c19d3529941_44839350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '834d852d258492c0065ef3f8e24b44d494a173a8' => 
    array (
      0 => 'C:\\xampp atualizado\\htdocs\\mmSistema\\sistema\\pages\\templates\\include\\menu.html',
      1 => 1646008752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621c19d3529941_44839350 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="imagem-banner">
    <img src="img/banner.png" style="width: 100%;">
</div>
<nav>
    <ul class="menu">
        <li><a href="index.php?do=index&action=">Home</a>
        </li>
        <li><a href="#">Cadastro</a>
            <ul>
                <li><a href="index.php?do=colaborador&action=inicio">Colaborador</a></li>
                <li><a href="index.php?do=curso&action=inicio">Curso</a></li>
            </ul>
        </li>
    </ul>
</nav><?php }
}
