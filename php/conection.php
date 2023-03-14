<?php
$server = "root";
$usuario = "localhost";
$senha = "";
$dbname = "os";

$mysqli = new mysqli($server, $usuario, $senha, $dbname);

if($mysql->error){
    die("Banco de dados erro " .$mysqli->error);
}
?>