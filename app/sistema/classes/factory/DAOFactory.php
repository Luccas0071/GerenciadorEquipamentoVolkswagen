<?php

include_once '../database/Connection.php';

abstract class DAOFactory{

    public static $connection;

    public static function getDAOFactory(){

        self::$connection = new Connection();
        //self::$connection->Connection();
        // print_r(self::$connection);


        
    }

 /*    public static function Connection(){
        print_r("Entrou aq");
        return self::$connection = new Connection();
    }  */
}


