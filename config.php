<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "loja";
$dsn = "mysql:host=$host;dbname=$dbname"; 

//dsn é a url do banco
//cria uma constante que pode ser acessada

define("dsn", $dsn);
define("user", $user);
define("password", "$password");





?>