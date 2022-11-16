<?php
/* Smarty version 4.0.0, created on 2022-11-08 02:10:45
  from 'C:\xampp7\htdocs\teeeeste\app\sistema\pages\templates\include\footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6369ac95721063_96428580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '014ea57fd9f6090a4b6a7662d2c6cca6c758c321' => 
    array (
      0 => 'C:\\xampp7\\htdocs\\teeeeste\\app\\sistema\\pages\\templates\\include\\footer.html',
      1 => 1666224842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369ac95721063_96428580 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Google Chets -->


    <?php echo '<script'; ?>
 src="https://www.gstatic.com/charts/loader.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);


        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Equip. Ok',     11],
                ['Equip. em Calibragem',      2],
                ['Equip. a Bateria',  2],
                ['Equip. Pneumáticas', 2],
                ['Equip. não Encontrado',    7]
            ]);

            var options = {
                backgroundColor: '#f8f9fa',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    <?php echo '</script'; ?>
>

</body>
</html><?php }
}
