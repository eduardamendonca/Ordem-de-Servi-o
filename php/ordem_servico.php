<?php
    include("conection.php");
   
    session_start();
    $veiculo = $_SESSION['placa'];
    session_write_close();

    session_start();
    $cliente = $_SESSION['telefone'];
    session_write_close();

    
    session_start();
    $servico1 = $_SESSION['id1_tabela_auxiliar'];
    session_write_close();


    echo $servico1;
    $query_tabela_auxiliar = "SELECT id
        FROM tabela_auxiliar
        WHERE servico1 = $servico1";

    $result = $mysqli->query($query_tabela_auxiliar);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        $tabela_auxiliar = $row["id"];
    }

    /*---------------------*/
   
    $hoje = date('d/m/Y');
    
    
    $sql = "INSERT INTO `ordem_servico` (cliente, veiculo, servico, data) 
    VALUES ('$cliente', '$veiculo', '$tabela_auxiliar', '$hoje')";

    $result= mysqli_query ($mysqli, $sql);

?>