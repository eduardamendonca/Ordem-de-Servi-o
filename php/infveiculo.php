<?php

include("conection.php");
        
$veiculo = isset ($_POST['veiculo'])?$_POST['veiculo']:null;
$placa = $_POST['placa'];
$cor = isset ($_POST['valor'])?$_POST['valor']:null;
$ano = isset ($_POST['ano'])?$_POST['combustivel']:null;
$combustivel = isset ($_POST['combustivel'])?$_POST['combustivel']:null;
$motor = isset ($_POST['motor'])?$_POST['motor']:null;

$sql = "INSERT INTO `inf_veivulo`(veiculo, placa, cor, ano, km, combustivel, motor)
        VALUES ('$veiculo', '$placa', '$cor', '$ano', '$combustivel', '$motor')";

$result= mysqli_query ($mysqli, $sql);

header("Location: /automecanicapj/Ordem-de-Servico/servicos.html");

die();

?>