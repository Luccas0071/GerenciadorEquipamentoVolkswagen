<?php

include_once '../pages/configs/config.php';

abstract class MainAction{

    public static function header(){
        $smarty = new Smarty();
        $smarty->display('include/header.html');
        $smarty->display('include/menu.html');
    }

    public static function footer(){
        $smarty = new Smarty();
        $smarty->display('include/footer.html');
    }
}