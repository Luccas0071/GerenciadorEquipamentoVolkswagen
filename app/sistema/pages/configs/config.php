<?php

define('SMARTY_DIR', 'lib/Smarty/libs/');

include (SMARTY_DIR .'Smarty.class.php');

$smarty = new Smarty();

$smarty->cache_dir = 'cache';
$smarty->config_dir = 'configs';
$smarty->compile_dir = 'templates_c';
$smarty->template_dir = 'templates';