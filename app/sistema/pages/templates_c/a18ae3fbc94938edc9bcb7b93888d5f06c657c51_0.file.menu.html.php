<?php
/* Smarty version 4.0.0, created on 2022-03-16 01:32:35
  from 'C:\xampp\htdocs\mmSistema\sistema\pages\templates\include\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62313023273246_70159093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a18ae3fbc94938edc9bcb7b93888d5f06c657c51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mmSistema\\sistema\\pages\\templates\\include\\menu.html',
      1 => 1647390752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62313023273246_70159093 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="imagem-banner">
    <img src="img/banner.png" style="width: 100%;">
</div>
<nav>
    <ul class="menu">
        <li><a href="index.php?do=index&action=">Principal</a>
        </li>
        <li><a href="#">Cadastro</a>
            <ul>
                <li><a href="index.php?do=user&action=start">Usuário</a></li>
                <li><a href="index.php?do=course&action=start">Curso</a></li>
            </ul>
        </li>
    </ul>
</nav><?php }
}
