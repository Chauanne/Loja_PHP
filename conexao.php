<?php

require "config.php";
class Conexao{
    private $connection;

    public function getConnection(){
        $connection = new PDO(dsn, user, password);
        //pdo é a biblioteca do php que conecta no banco de dados (precisa criar e chamar a classe pelo getconnection)  ou mysqli

        return $connection;

    }
}



?>