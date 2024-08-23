<?php

    define('SERVIDOR','mysql:host=localhost;dbname=teste;charset=utf8');
    define('USER','root');
    define('PASSWORD','');
    class FabricaConexao{
    private static $con;

    public static function Conexao(){

    try{

        if (!isset(self::$con)):
            self:: $con = new PDO(SERVIDOR,USER,PASSWORD);
            self:: $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        endif;
            return self::$con;

    }   catch (PDOException $e){
        echo "Falha na conexão".$e->getMessage();
        die();
    }

    }   
    }   
    
?>