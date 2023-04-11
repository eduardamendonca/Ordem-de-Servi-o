<?php

include("conection.php");
        
$qnt1 = isset ($_POST['qnt1'])?$_POST['qnt1']:null;
$descricao1 = $_POST['descricao1']?$_POST['descricao1']:null;
$valor1 = isset ($_POST['valor1'])?$_POST['valor1']:null;
$total1 = isset ($_POST['total1'])?$_POST['total1']:null;

$sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
        VALUES ('$qnt1', '$descricao1', '$valor1', '$total1')";

$qnt2 = isset ($_POST['qnt2'])?$_POST['qnt2']:null;
$descricao2 = $_POST['descricao2']?$_POST['descricao2']:null;
$valor2 = isset ($_POST['valor2'])?$_POST['valor2']:null;
$total2 = isset ($_POST['total2'])?$_POST['total2']:null;

$sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
        VALUES ('$qnt2', '$descricao2', '$valor2', '$total2')";

$qnt3 = isset ($_POST['qnt3'])?$_POST['qnt3']:null;
$descricao3 = $_POST['descricao3']?$_POST['descricao3']:null;
$valor3 = isset ($_POST['valor3'])?$_POST['valor3']:null;
$total3 = isset ($_POST['total3'])?$_POST['total3']:null;

$sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
        VALUES ('$qnt3', '$descricao3', '$valor3', '$total3')";

$qnt4 = isset ($_POST['qnt4'])?$_POST['qnt4']:null;
$descricao4 = $_POST['descricao4']?$_POST['descricao4']:null;
$valor4 = isset ($_POST['valor4'])?$_POST['valor4']:null;
$total4 = isset ($_POST['total4'])?$_POST['total4']:null;

$sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
        VALUES ('$qnt4', '$descricao4', '$valor4', '$total4')";

$qnt5 = isset ($_POST['qnt5'])?$_POST['qnt5']:null;
$descricao5 = $_POST['descricao5']?$_POST['descricao5']:null;
$valor5 = isset ($_POST['valor5'])?$_POST['valor5']:null;
$total5 = isset ($_POST['total5'])?$_POST['total5']:null;

$sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
        VALUES ('$qnt5', '$descricao5', '$valor5', '$total5')";

$qnt6 = isset ($_POST['qnt6'])?$_POST['qnt6']:null;
$descricao6 = $_POST['descricao6']?$_POST['descricao6']:null;
$valor6 = isset ($_POST['valor6'])?$_POST['valor6']:null;
$total6 = isset ($_POST['total6'])?$_POST['total6']:null;

$sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
        VALUES ('$qnt6', '$descricao6', '$valor6', '$total6')";

$qnt7 = isset ($_POST['qnt7'])?$_POST['qnt7']:null;
$descricao7 = $_POST['descricao7']?$_POST['descricao7']:null;
$valor7 = isset ($_POST['valor7'])?$_POST['valor7']:null;
$total7 = isset ($_POST['total7'])?$_POST['total7']:null;

$sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
        VALUES ('$qnt7', '$descricao7', '$valor7', '$total7')";

$result= mysqli_query ($mysqli, $sql);

header("Location: /automecanicapj/Ordem-de-Servico/index.html");

die();

?>