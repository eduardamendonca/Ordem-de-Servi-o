<?php

include("conection.php");
        
$qnt = isset ($_POST['qnt'])?$_POST['qnt']:null;
$descricao = $_POST['descricao'];
$valor = isset ($_POST['valor'])?$_POST['valor']:null;
$total = isset ($_POST['total'])?$_POST['total']:null;

$sql = "INSERT INTO `inf_veiculo`(qnt, descricao, valor, total)
        VALUES ('$qnt', '$descricao', '$valor', '$total')";

$result= mysqli_query ($mysqli, $sql);

header("Location: /automecanicapj/Ordem-de-Servico/index.html");

die();

?>