<?php
/* Smarty version 4.0.0, created on 2022-10-25 03:00:35
  from 'C:\xampp7\htdocs\ControleManutencaoVolkswagen\sistema\pages\templates\include\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_635735339aa5c3_58839149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0dc463e4071d35e3339f50fd5c1c4850edc196b' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ControleManutencaoVolkswagen\\sistema\\pages\\templates\\include\\menu.html',
      1 => 1666659633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635735339aa5c3_58839149 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="imagem-banner">
    <img src="img/bannerVolkswagen3.png" style="width: 100%;">
</div>

<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="0" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white">Inicio</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Equipamentos</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Relatórios</a></li>
        </ul>

        <div class="text-end">
            <button type="button" class="btn btn-light" onclick="logoff()">
                <i class="fa-solid fa-right-from-bracket"></i>
            </button>
        </div>
      </div>
    </div>
  </header><?php }
}
