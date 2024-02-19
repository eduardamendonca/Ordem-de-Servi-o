
<?php
/*$telefone = $_POST['telefone1'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('os');

        $query = "INSERT INTO inf_cliente (telefone1) VALUES ('$telefone')";
        $insert = mysql_query($query,$connect);*/

include("conection.php");

session_start(); 

$nome = isset ($_POST['nome'])?$_POST['nome']:null;
$_SESSION['telefone'] = $telefone1 = $_POST['telefone1'];
$telefone2 = isset ($_POST['telefone2'])?$_POST['telefone2']:null;
$cep = isset ($_POST['cep'])?$_POST['cep']:null;
$cidade = $_POST['cidade']?$_POST['cidade']:null;
$rua = isset ($_POST['rua'])?$_POST['rua']:null;
$num = isset ($_POST['num'])?$_POST['num']:null;
$bairro = isset ($_POST['bairro'])?$_POST['bairro']:null;

/* Formatando a string */
$nome = mb_convert_case($nome, MB_CASE_TITLE, 'UTF-8');
$cidade = mb_convert_case($cidade, MB_CASE_TITLE, 'UTF-8');
$rua = mb_convert_case($rua, MB_CASE_TITLE, 'UTF-8');
$bairro = mb_convert_case($bairro, MB_CASE_TITLE, 'UTF-8');

session_write_close();

$sql = "INSERT INTO `inf_clientes`(nome, telefone1, telefone2, cep, cidade, rua, num, bairro)
        VALUES ('$nome', '$telefone1', '$telefone2', '$cep', '$cidade', '$rua', '$num', '$bairro')";

$result= mysqli_query ($mysqli, $sql);

header("Location: /automecanicapj/Ordem-de-Servico/infveiculo.html");

die();
?>