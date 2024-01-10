<?php
include("conection.php");
?>
<html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pdf.css">
    <title>pdf</title>
</head>
<?php
    session_start(); 
    $cliente = mysqli_real_escape_string($mysqli, $_SESSION['telefone']);
    $veiculo = (string) mysqli_real_escape_string($mysqli, $_SESSION['placa']);
    $tabela_auxiliar =  mysqli_real_escape_string($mysqli, $_SESSION['id1_tabela_auxiliar']);
    session_write_close();

    $data = date('d/m/Y');
    $hoje = (string )mysqli_real_escape_string($mysqli, $data); 

    $query_tabela_auxiliar = "SELECT id
        FROM tabela_auxiliar
        WHERE servico1 = $tabela_auxiliar";

    $result = $mysqli->query($query_tabela_auxiliar);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        $servico = $row["id"];
    }
    
    echo $cliente;
    echo $veiculo; 
    echo $servico;
    echo $hoje;
    echo $tabela_auxiliar;
    print_r("$veiculo");

    /* Consulta na tabela ordem_servico*/
    $id_os_query = "SELECT id FROM ordem_servico WHERE 
        cliente = $cliente and veiculo LIKE '$veiculo' and servico = $servico and data = $hoje";

    $result_id_os = $mysqli->query($id_os_query);


    if ($result_id_os->num_rows > 0) {
        $row = $result_id_os->fetch_assoc(); 
        $id_ordem_servico = $row["id"];
    }

    /* Consulta na tabela clientes */
    $cliente_querry = "SELECT nome, telefone1 telefone2, cep, cidade, rua, num, bairro 
        FROM inf_clientes WHERE 
        telefone1 = $cliente";

    $result = $mysqli->query($cliente_querry);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        $nome = $row["nome"];
        $telefone2 = $row["telefone2"];
        $cep = $row["cep"];
        $cidade = $row["cidade"];
        $rua = $row["rua"];
        $num = $row["num"];
        $bairro = $row["bairro"];
    }
    /* Consulta na tabela veiculo */
    $veiculo_querry = "SELECT veiculo, placa, cor, ano, km, combustivel, motor
        FROM inf_veiculo WHERE 
        placa = '$veiculo'";

    $result = $mysqli->query($veiculo_querry);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        $carro = $row["veiculo"];
        $cor = $row["cor"];
        $ano = $row["ano"];
        $km = $row["km"];
        $combustivel = $row["combustivel"];
        $motor = $row["motor"];
    }

    /* Consulta na tabela tabela_auxiliar -> servicos */
    $id_servico1_query = "SELECT id
        FROM tabela_auxiliar WHERE 
        servico1 = '$tabela_auxiliar'";

    $result_id_servico1 = $mysqli->query($id_servico1_query);

    if ($result_id_servico1->num_rows > 0) {
        $row = $result_id_servico1->fetch_assoc(); 
        $id_tabela_auxiliar = $row["id"];
    }

    $tabela_auxiliar_query = "SELECT id, obs, servico1, servico2, servico3, servico4, servico5, servico6, servico7, servico8, servico9, 
        servico10, servico11, servico12, servico13, servico14, servico15
        FROM tabela_auxiliar WHERE 
        id = '$id_tabela_auxiliar'";

    $result = $mysqli->query($tabela_auxiliar_query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        $obs = $row["obs"];
        $servico1 = $row["servico1"];
        $servico2 = $row["servico2"];
        $servico3 = $row["servico3"];
        $servico4 = $row["servico4"];
        $servico5 = $row["servico5"];
        $servico6 = $row["servico6"];
        $servico7 = $row["servico7"];
        $servico8 = $row["servico8"];
        $servico9 = $row["servico9"];
        $servico10 = $row["servico10"];
        $servico11 = $row["servico11"];
        $servico12 = $row["servico12"];
        $servico13 = $row["servico13"];
        $servico14 = $row["servico14"];
        $servico15 = $row["servico15"];

    }
    
    echo $servico1;
    echo $servico2;
    echo $servico3;
    echo $servico4;
    echo $servico5;
    echo $servico6;
    echo $servico7;
    echo $servico8;
    echo $servico9;
    echo $servico10 ;
    echo $servico11 ;
    echo $servico12 ;
    echo $servico13 ;
    echo $servico14 ;
    echo $servico15 ;


    ?>
<body>
    <header>
        <img src="/automecanicapj/Ordem-de-Servico/img/cabecalho.svg" >
    </header>
    <div class="inf">
        <p>Nome: <?php echo $nome;?></p> 
        <p>Endereço: <?php echo "$rua, $num, $bairro";?></p>
        <p>Telefone: <?php echo $cliente;?> </p>
        <p>Telefone:<?php echo $telefone2;?></p>
        <p>Veículo: <?php echo $carro;?></p>
        <p>Placa <?php echo $veiculo;?></p>
        <p>Cor: <?php echo $cor;?></p>
        <p>Km: <?php echo $km;?></p>
        <p>Ano: <?php echo $ano;?></p>
        <p>Combustível: <?php echo $combustivel;?></p>
        <p>Motor: <?php echo $motor;?></p>
    </div>
    <div >
        
        <table border="1" class="table">
            <thead class="thead">
                <tr>
                    <th class="qnt">Qnt.</th>
                    <th class="descricao">Descrição</th>
                    <th class="unit">P. Unit.</th>
                    <th class="result">Total</th>
                </tr> 
            </thead> 
            <?php
            /* Consulta na tabela tabela_auxiliar -> servicos */
                $servicos_querry = "SELECT quantidade, descricao, unidade, total
                    FROM servicos WHERE 
                    id = $servico1 
                    ORDER BY id DESC";

                $result = $mysqli->query($servicos_querry);

                print_r($result);

                $variavel = $servico1;
                while (isset($variavel)){
                    echo"<tr>";
                    echo "<td>".$servico_data['quantidade']."</td>";
                    echo "<td>".$servico_data['descricao']."</td>";
                    echo "<td>".$servico_data['unidade']."</td>";
                    echo "<td>".$servico_data['total']."</td>";
                    
                    if($variavel = $servico1){
                        $variavel = $servico2;
                    }
                    if($variavel = $servico2){
                        $variavel = $servico3;
                    }
                    if($variavel = $servico3){
                        $variavel = $servico4;
                    }
                    if($variavel = $servico4){
                        $variavel = $servico5;
                    }
                    if($variavel = $servico5){
                        $variavel = $servico6;
                    }
                    if($variavel = $servico6){
                        $variavel = $servico7;
                    }
                    if($variavel = $servico7){
                        $variavel = $servico8;
                    }
                    if($variavel = $servico8){
                        $variavel = $servico9;
                    }
                    if($variavel = $servico9){
                        $variavel = $servico10;
                    }
                    if($variavel = $servico10){
                        $variavel = $servico11;
                    }
                    if($variavel = $servico11){
                        $variavel = $servico12;
                    }
                    if($variavel = $servico12){
                        $variavel = $servico13;
                    }
                    if($variavel = $servico13){
                        $variavel = $servico14;
                    }
                    if($variavel = $servico14){
                        $variavel = $servico15;
                    }

                    echo"</tr>";
                }
            ?>   
            
        </table>
    </div>
    <div>
        <p>Obs: <?php echo $obs;?></p>
    </div>
    <div>
        <p>90 dias de garantia do serviço</p>
        <p>Data:<?php echo $hoje;?> </p>
        <p>Cód:<?php echo $id_ordem_servico;?></p>
    </div>
    <div>
        Total R$ 
    </div>
</body>
</html>
 