<?php
include("conection.php");

    $modo = isset ($_POST['modo'])?$_POST['modo']:null;
    $busca = isset ($_POST['busca'])?$_POST['busca']:null;
    echo $busca;

    if($modo !== "none"){
        if($modo == "placa"){
            $query_ordem_servico = "SELECT * FROM ordem_servico WHERE veiculo = '$busca' ORDER BY id DESC";

            $result = $mysqli->query($query_ordem_servico);

            $placa = $busca;
            echo $placa;

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc(); 
                $cod_os = $row["id"];
                $telefone = $row["cliente"];
                $servico = $row["servico"];
                $data = $row["data"];
            }
        }
        if($modo == "veiculo"){
            echo "O modo é veiculo";
        }
        if($modo == "codigo"){
            echo "O modo é codigo";
        }
        if($modo == "nome"){
            echo "O modo é nome";
        }
        if($modo == "data"){
            echo "O modo é data";
        }

    }else{
        echo("<script> 
                alert('Selecione o modo de consulta!'); 
                window.location.href= '/automecanicapj/Ordem-de-Servico/consulta.html';
            </script>");
    }



    /*
    
    $sql= "SELECT * FROM $table as pedidos JOIN usuarios ON pedidos.mat_pedinte = usuarios.mat where id = '{$id}' ";
    $resultado = mysqli_query($conexao,$sql) or die();
    $row = mysqli_num_rows($resultado);*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A Ordem de Serviço te auxilia na criação e na consulta da nota de garantia da sua empresa, tudo isso através do nosso site">
    <title>OS - Ordem de Serviço </title>
    <link rel="stylesheet" type="text/css" href="/automecanicapj/Ordem-de-Servico/consulta.css">
</head>
<body class="body">
    <head>
        <h1 class="title">Consultar</h1>    
    </head>
    <div class="box">
        <div class="box">
            <form action="php/consulta.php" method="post">
                <div class="input-group">
                    <div class="inputBox">
                        <div class="choice">
                            <label for="modo" class="label-text">Modo de consulta : </label>
                            <select name="modo" id="modo" class="choiceUser">
                                <option value="placa">Placa</option>
                                <option value="veiculo">Veículo</option>
                                <option value="codigo">Código</option>
                                <option value="nome">Nome</option>
                                <option value="data">Data</option>
                            </select>
                        </div>
                        <div class="busca">
                            <input type="text" id="txtBusca" name="busca"/>
                            <button type="submit" class="btnSubmit">
                                <img src="/automecanicapj/Ordem-de-Servico/img/searchblack.svg" id="btnBusca" alt="Buscar"/>
                            </button>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>    
    </div>
</body>   
    <section class="btn">
        <a href="index.html" target="_self">
            <button class="advance-btn">
                <img src="/automecanicapj/Ordem-de-Servico/img/left.svg" class="img-btn">
            </button> 
        </a>
        
    </section>
</footer>
</html>