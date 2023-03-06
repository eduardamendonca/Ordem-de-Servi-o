<?php
$server = "localhost";
$usuario = "root";
$senha = "";
$dbname = "os";

$mysqli = new mysqli($server, $usuario, $senha, $dbname);

if(mysql->error){
    die("Banco de dados erro " .$mysqli->error);
}else { 
    echo"duda e feia";
}
?>