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
    $cliente = $_SESSION['cliente'];
    $veiculo = $_SESSION['veiculo'];
    $tabela_auxiliar = $_SESSION['tabela_auxiliar'];
    $hoje = $_SESSION['hoje'];
    session_write_close();

    /* Consulta na tabela ordem_servico*/
    $id_os = "SELECT id FROM ordem_servico WHERE 
        cliente = $cliente and veiculo = $veiculo and servico = $tabela_auxiliar and data = $hoje";

    $result = $mysqli->query($id_os);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
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
        placa = $veiculo";

    $result = $mysqli->query($veiculo_querry);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); 
        $carro = $row["veiculo"];
        $cor = $row["cor"];
        $ano = $row["ano"];
        $km = $row["km"];
        $combustivel = $row["combustivel"];
        $motor = $row["motor"];
        $num = $row["num"];
        $bairro = $row["bairro"];
    }

    /* Consulta na tabela tabela_auxiliar -> servicos */
    $tabela_auxiliar_querry = "SELECT id, obs, servico1, servico2, servico3, servico4, servico5, servico6, servico7, servico8, servico9, 
        servico10, servico11, servico12, servico13, servico14, servico15
        FROM tabela_auxiliar WHERE 
        id = $tabela_auxiliar";

    $result = $mysqli->query($tabela_auxiliar_querry);

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
    
    ?>
<body>
    <header>
        <img src="img/cabecalho.svg" >
    </header>
    <div class="inf">
        <p>Nome: <?php echo $cliente;?></p> 
        <p>Endereço: <?php echo "$rua, $num, $bairro";?></p>
        <p>Telefone: <?php echo $telefone;?> </p>
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
                $variavel = $servico1;
                while (isset($variavel)){
                    echo"<tr>";

                }
            ?>   
            
        </table>
    </div>
    <div>
        <p>Obs:</p>
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
