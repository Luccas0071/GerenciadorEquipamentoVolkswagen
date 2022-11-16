<?php
/* Smarty version 4.0.0, created on 2022-11-08 02:10:45
  from 'C:\xampp7\htdocs\teeeeste\app\sistema\pages\templates\login\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6369ac9581e812_92337231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963d6e4b9bb8dcd6ac2b2a69a10682dafd8f5a5d' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\teeeeste\\app\\sistema\\pages\\templates\\login\\login.html',
      1 => 1666658347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369ac9581e812_92337231 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/login_style.css">
    <title>Login - Volkswagen</title>

    <?php echo '<script'; ?>
>
        jQuery.noConflict();
        function logarSistema() {
            let name = jQuery("#name").val();
            let password = jQuery("#password").val();

            if(jQuery("#name").val() == "")
            {
                alert("Informe o login!")
                jQuery("#name").focus();
            }

            if(jQuery("#password").val() == "")
            {
                alert("Informe a senha!")
                jQuery("#password").focus();
            }
            var urlAction = "index.php?do=login&action=logar";

            jQuery.ajax({
                type: 'POST',
                url: urlAction,
                data: {
                    'name': name,
                    'password': password
                },
                success: function (data) {
                    console.log(data);
                    window.location.href = "index.php?do=index&action=inicio";
                }
            });
        }
    <?php echo '</script'; ?>
>

</head>
<body>
    <br><br><br><br><br><br><br><br><br><br><br>

    <div class="container">
        <div class="card card-container">
            <!-- <h1 class="display-5 fw-bold">Sistema Volkswagen</h1> -->
            <form name="frmLogin" id="frmLogin" method="POST" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="name" class="form-control" placeholder="Nome" required autofocus>
                <input type="password" id="password" class="form-control" placeholder="Senha" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembre-se de mim
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" onclick="logarSistema()">
                    Entrar
                </button>
            </form>
            
            <a href="#" class="forgot-password">
                Esqueceu a senha?
            </a>
        </div>
    </div>
</body>
</html><?php }
}
