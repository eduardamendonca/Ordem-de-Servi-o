<?php

include("conection.php");
        
$veiculo = isset ($_POST['veiculo'])?$_POST['veiculo']:null;
$placa = $_POST['placa'];
$cor = isset ($_POST['cor'])?$_POST['cor']:null;
$ano = isset ($_POST['ano'])?$_POST['ano']:null;
$km = isset ($_POST['km'])?$_POST['km']:null;
$combustivel = isset ($_POST['combustivel'])?$_POST['combustivel']:null;
$motor = isset ($_POST['motor'])?$_POST['motor']:null;

echo "$veiculo', '$placa', '$cor', '$ano', '$combustivel', '$motor'";

$sql = "INSERT INTO `inf_veiculo`(veiculo, placa, cor, ano, km, combustivel, motor)
        VALUES ('$veiculo', '$placa', '$cor', '$ano', '$km', '$combustivel', '$motor')";

$result= mysqli_query ($mysqli, $sql);

header("Location: /automecanicapj/Ordem-de-Servico/servicos.html");

die();

?>
