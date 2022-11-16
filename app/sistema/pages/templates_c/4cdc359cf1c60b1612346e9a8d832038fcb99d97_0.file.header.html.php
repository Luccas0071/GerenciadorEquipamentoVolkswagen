<?php
/* Smarty version 4.0.0, created on 2022-10-25 03:10:43
  from 'C:\xampp7\htdocs\ControleManutencaoVolkswagen\sistema\pages\templates\include\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63573793e269f7_15180978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cdc359cf1c60b1612346e9a8d832038fcb99d97' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ControleManutencaoVolkswagen\\sistema\\pages\\templates\\include\\header.html',
      1 => 1666660234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63573793e269f7_15180978 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <!--Import jquery-->
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!--Import font awesome-->
        <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/6ca0e0ce58.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <!--Import bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Biblioteca de Icones -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- Folha de Stylo -->
        <link rel="stylesheet" href="css/stylee.css">
        
        <title>Controle de Manutenção - Volkswagen</title>

        <?php echo '<script'; ?>
>
            function logoff(){
                console.log("Chegou aqui");
                jQuery.ajax({
                    type: 'POST',
                    url: 'index.php?do=login&action=logoff',
                    data: '',
                    success: function (data) {
                        console.log(data);
                        window.location.href = "index.php?do=login&action=start";
                    }
                });
            }  
        <?php echo '</script'; ?>
>
      

    </head>

<body>



    
    
    <?php }
}
