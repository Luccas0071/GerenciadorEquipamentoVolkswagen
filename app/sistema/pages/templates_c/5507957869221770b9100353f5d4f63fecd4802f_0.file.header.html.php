<?php
/* Smarty version 4.0.0, created on 2022-11-15 17:43:30
  from 'C:\xampp7\htdocs\ProjetoIntegrador\app\sistema\pages\templates\include\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6373c1b270cfd4_55542785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5507957869221770b9100353f5d4f63fecd4802f' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\ProjetoIntegrador\\app\\sistema\\pages\\templates\\include\\header.html',
      1 => 1668530607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6373c1b270cfd4_55542785 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
        <!-- Logo Aba Navegador -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/logoFinal.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/logoFinal.png">
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


        <!-- GRAFICO -->
        
        <?php echo '<script'; ?>
 src="https://www.gstatic.com/charts/loader.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            console.log("Entrou aqui");

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Ok',     11],
                    ['Em Calibragem',      2],
                    ['A Bateria',  2],
                    ['Pneumáticas', 2],
                    ['Não Encontrado',    7]
                ]);

                var options = {
                    backgroundColor: '#f8f9fa',
                    fontFamily: '102px',
                    is3D: true,
  
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        <?php echo '</script'; ?>
>
        
      

    </head>

<body>



    
    
    <?php }
}
