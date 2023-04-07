<?php

$host= "localhost";
$user = "root";
$pass = "";
$dbname = "os";
$port = 3306;

new PDO('mysql:host=$host;port=$port;dbname='. $dbname, $user, $pass);



print "Conexão Efetuada com sucesso!";

/*
$hostname = "localhost";
$bancodedados = "os";
$usuario = "root";
$senha = "";


$mysqli = new mysqli($hostname, $bancodedados, $usuario, $senha);

if($mysqli->connect_errno){
    echo "Falha ao conectar : (" .$mysqli->connect_errno .")" . $mysqli ->connect_error;
}*/
?>