<?php

class Connection{

    public $pdo;    

    public function __construct(){
    
        //SEVIDOR
        // $endereco = 'ec2-54-160-109-68.compute-1.amazonaws.com';
        // $banco = 'd3tdvj89gcjadu';
        // $usuario = 'tsafitsdqovfqw';
        // $senha = '01a9f022463f68bdcb9a70d214ddc401fb3ede8fc0f2b94423115e768b59211f';

        //Local
        $endereco = 'localhost';
        $banco = 'sistema_volkswagen';
        $usuario = 'postgres';
        $senha = 'acesse';

        try {

            $this->pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha);
        
            //echo "Conectado no banco de dados";
        } catch (PDOException $e) {
            echo "Falha ao Conectar ao Banco de Dados. <br/>";
            die($e->getMessage());
        }
    }

    public function closePDO(){
        $this->pdo = null;
    }
}

