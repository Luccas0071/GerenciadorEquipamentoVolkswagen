<?php
/* Smarty version 4.0.0, created on 2022-11-26 17:19:34
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\include\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63823c96a9fbb8_30773214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce4bd95be5635e21894b1cd3d8153e952a5c7270' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\include\\menu.html',
      1 => 1669479564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63823c96a9fbb8_30773214 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="imagem-banner">
    <img src="img/bannerVolkswagen6.png" style="width: 100%;">
</div>

<header class="p-1 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="0" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php?do=index&action=inicio" class="nav-link px-2 text-white">Inicio</a></li>
          <li><a href="index.php?do=equipamento&action=inicio" class="nav-link px-2 text-white">Equipamentos</a></li>
          <li><a href="index.php?do=planilhaCalibracao&action=inicio" class="nav-link px-2 text-white">Planilha Calibragem</a></li>
          <li><a href="index.php?do=colaborador&action=inicio" class="nav-link px-2 text-white">Colaborador</a></li>
          <li><a href="index.php?do=veiculo&action=inicio" class="nav-link px-2 text-white">Veiculo</a></li>
          <li><a href="index.php?do=setor&action=inicio" class="nav-link px-2 text-white">Setor</a></li>
          <li><a href="index.php?do=relatorio&action=inicio" class="nav-link px-2 text-white">Relatórios</a></li>
        </ul>

        <div class="text-end">
            Administrador  &nbsp&nbsp&nbsp
            <button type="button" class="btn btn-light" onclick="logoff()">
                <i class="fa-solid fa-right-from-bracket"></i>
            </button>
        </div>
      </div>
    </div>
  </header>
  <br><?php }
}
