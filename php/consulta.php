<?php
include("conection.php");

$modo = isset ($_POST['modo'])?$_POST['modo']:null;
$busca = isset ($_POST['busca'])?$_POST['busca']:null;

function consultaNome($telefone, $mysqli){
    $query_nome = "SELECT nome FROM inf_clientes WHERE telefone1 = '$telefone' ";
        
    $result_nome = $mysqli->query($query_nome);
    
    if($result_nome->num_rows > 0){
        $row = $result_nome->fetch_assoc(); 
        $nome = $row["nome"];
    }

    return $nome;
}

function consultaVeiculo($placa, $mysqli){
    $query_veiculo = "SELECT * FROM inf_veiculo WHERE placa = '$placa'";

    $result_veiculo = $mysqli->query($query_veiculo);

    if($result_veiculo->num_rows > 0){
        $row = $result_veiculo->fetch_assoc();
        $veiculo = $row["veiculo"] ;
        $cor = $row["cor"] ;
        $ano = $row["ano"] ;
    }
    
    return $array=[
        'veiculo' => $veiculo, 
        'cor' => $cor, 
        'ano' => $ano
    ];
}

//*id
//*telefone
//*placa 
//*data 
//*nome 
//*veiculo 
//*ano 
//*cor 

if($modo !== "none"){
    if($modo == "placa"){
        /*buscando dados da os  */
        $query_ordem_servico = "SELECT * FROM ordem_servico WHERE veiculo = '$busca' ORDER BY id DESC";
        
        $result = $mysqli->query($query_ordem_servico); 

        $contador = 0;

        if($result->num_rows > 0){
            $row = $result->fetch_assoc(); 
            $id_os = $row["id"];
            $telefone = $row["cliente"];
            $placa = $row["veiculo"];
            $id_servico = $row["servico"];
            $data = $row["data"];
            echo $telefone;
            
            /* buscando o nome do cliente*/
            $nome = consultaNome($telefone, $mysqli);
            
            /* buscando os dados do veiculo*/
            $auxiliar = consultaVeiculo($placa, $mysqli);
            $veiculo = $auxiliar['veiculo'];
            $ano = $auxiliar['ano'];
            $cor = $auxiliar['cor'];
            
            if($contador == 0){
                $array_final = [$id_os, $telefone, $placa, $data, $nome, $veiculo, $ano, $cor];
            }else{
                
            }
            
            print_r($array_final);
            
        }

    }
    if($modo == "veiculo"){
        /* Buscando dados do veículo */
        $query_inf_veiculo = "SELECT * FROM inf_veiculo WHERE veiculo = '$busca' ";
        $result_inf_veiculo = $mysqli->query($query_inf_veiculo); 
        if($result_inf_veiculo->num_rows > 0){
            $row = $result_inf_veiculo->fetch_assoc(); 
            $placa = $row["placa"];
            $cor = $row["cor"];
            $ano = $row["ano"];
        }
        /* Buscando dados da OS */
        $query_ordem_servico = "SELECT * FROM ordem_servico WHERE veiculo = '$placa' ORDER BY id DESC";
        
        $result = $mysqli->query($query_ordem_servico); 
        $contador = 0;
        if($result->num_rows > 0){
            $row = $result->fetch_assoc(); 
            $id_os = $row["id"];
            $telefone = $row["cliente"];
            $placa = $row["veiculo"];
            $id_servico = $row["servico"];
            $data = $row["data"];
            echo $id_os;
            
            /* buscando o nome do cliente*/
            $nome = consultaNome($telefone, $mysqli);
            echo $nome; 
            }
            print_r($result_inf_veiculo);
    }
    if($modo == "codigo"){
        /*buscando dados da os  */
        $query_ordem_servico = "SELECT * FROM ordem_servico WHERE id = '$busca' ORDER BY id DESC";
        
        $result = $mysqli->query($query_ordem_servico); 

        if($result->num_rows > 0){
            $row = $result->fetch_assoc(); 
            $placa = $row["veiculo"];
            $telefone = $row["cliente"];
            $placa = $row["veiculo"];
            $id_servico = $row["servico"];
            $data = $row["data"];
        }
        /* buscando o nome do cliente*/
        $nome = consultaNome($telefone, $mysqli);
        
        /* Buscando dados do veículo */
        $query_inf_veiculo = "SELECT * FROM inf_veiculo WHERE placa = '$placa' ";
        
        $result_inf_veiculo = $mysqli->query($query_inf_veiculo); 
        
        if($result_inf_veiculo->num_rows > 0){
            $row = $result_inf_veiculo->fetch_assoc(); 
            $veiculo = $row["veiculo"];
            $cor = $row["cor"];
            $ano = $row["ano"];

        }
    }
    if($modo == "nome"){
        echo "O modo é nome";
    }
    if($modo == "data"){
        /*buscando dados da os  */
        $query_ordem_servico = "SELECT * FROM ordem_servico WHERE data = '$busca' ORDER BY id DESC";
        
        $result = $mysqli->query($query_ordem_servico);         

        if($result->num_rows > 0){
            $row = $result->fetch_assoc(); 
            $placa = $row["veiculo"];
            $telefone = $row["cliente"];
            $placa = $row["veiculo"];
            $id_servico = $row["servico"];
            $id_os = $row["id"];
        }

        /* buscando o nome do cliente*/
        $nome = consultaNome($telefone, $mysqli);

        /* Buscando dados do veículo */
        $query_inf_veiculo = "SELECT * FROM inf_veiculo WHERE placa = '$placa' ";
        
        $result_inf_veiculo = $mysqli->query($query_inf_veiculo); 
        
        if($result_inf_veiculo->num_rows > 0){
            $row = $result_inf_veiculo->fetch_assoc(); 
            $veiculo = $row["veiculo"];
            $cor = $row["cor"];
            $ano = $row["ano"];
        }
        
        echo "id servico: ".$id_servico;
        echo "telefone: ".$telefone;
        echo "placa: ".$placa;
        echo "data: ".$busca ;
        echo "nome: ".$nome ;
        echo "veiculo: ".$veiculo ;
        echo "ano: ".$ano ;
        echo "cor: ".$cor ;
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
            <form action="#" method="post">
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
            <?php
                while($busca_data = mysqli_fetch_assoc($result))
                {
                    echo "<div>";
                    echo "Data: ".$busca_data['data'];   
                    echo "<br>";
                    echo "Código da OS: ".$busca_data['id'];
                    echo "<br>";
                    echo "Placa: ".$busca_data['veiculo'];
                    echo "</div";
                    $telefone = $busca_data['cliente'];
                    $nome = consultaNome($telefone, $mysqli);
                    
                }
            ?>
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
