<?php
$hostname = "localhost";
$bancodedados = "os";
$usuario = "root";
$senha = "";


$mysqli = new mysqli($hostname, $bancodedados, $usuario, $senha);

if($mysqli->connect_errno){
    echo "Falha ao conectar : (" .$mysqli->connect_errno .")" . $mysqli ->connect_error;
}
?>