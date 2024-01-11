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

    /* Consulta na tabela ordem_servico*/
    $id_os_query = "SELECT id FROM ordem_servico WHERE 
        cliente = '$cliente' and veiculo LIKE '$veiculo' and servico = '$servico' and data = '$hoje'";

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

    $result_tabela_auxiliar = $mysqli->query($tabela_auxiliar_query);

    if ($result_tabela_auxiliar->num_rows > 0) {
        $row = $result_tabela_auxiliar->fetch_assoc(); 
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
    <div class="ordem_servico">

        <header>
            <img src="/automecanicapj/Ordem-de-Servico/img/cabecalho.svg" >
        </header>
        <div class="inf">
            <div class="info_cliente">
                <p>Nome: <?php echo $nome;?></p> 
            </div>
            <div class="info_cliente">
                <p>Endereço: <?php echo "$rua, $num, $bairro";?></p>
                <p>Telefone: <?php echo $cliente;?> </p>
            </div>
            <div class="info_cliente">
                <p>Km: <?php echo $km;?></p>
                <p>Ano: <?php echo $ano;?></p>
                <p>Combustível: <?php echo $combustivel;?></p>
                <p>Motor: <?php echo $motor;?></p>
            </div>
            <div class="info_cliente">
                <p>Veículo: <?php echo $carro;?></p>
                <p>Placa <?php echo $veiculo;?></p>
                <p>Cor: <?php echo $cor;?></p>
            </div>
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
                        id = '$servico1' OR id = '$servico2' OR id = '$servico3' OR id = '$servico4' OR id = '$servico5' OR id = '$servico6' OR 
                        id = '$servico7' OR id = '$servico8' OR id = '$servico9' OR id = '$servico10' OR id = '$servico11' OR id = '$servico12' OR
                        id = '$servico13' OR id = '$servico14' OR id = '$servico15'
                        ORDER BY id ASC";
    
                    $result_servicos = $mysqli->query($servicos_querry);
    
                    $resultado_total="0";
                    while ($servicos_data = mysqli_fetch_assoc($result_servicos) ){
                        echo"<tr>";
                        echo "<td>".$servicos_data['quantidade']."</td>";
                        echo "<td>".$servicos_data['descricao']."</td>";
                        echo "<td>".$servicos_data['unidade']."</td>";
                        echo "<td>".$servicos_data['total']."</td>";
                        echo"</tr>";
                        
                        $resultado_total += $servicos_data['total'];
    
                        $num_rows = mysqli_num_rows($result_servicos);
                        $teste = " ";
                        if ($num_rows < 20) {
                            for ($i = 0; $i < (20 - $num_rows); $i++) {
                                echo "<tr>";
                                echo "<td >.$teste</td>";
                                echo "<td ></td>";
                                echo "<td ></td>";
                                echo "<td ></td>";
                                echo "</tr>";
                            }
                        }
                    }
                        
                ?>   
                
                
            </table>
        </div>
        <div class="info_cliente">
            <p>Obs: <?php echo $obs;?></p>
            Total R$ <?php echo $resultado_total;?>
        </div>
        <div class="info_cliente">
            <p>90 dias de garantia do serviço</p>
            <p>Data:<?php echo $hoje;?> </p>
            <p>Cód:<?php echo $id_ordem_servico;?></p>
        </div>
    </div>
    <section class="btn">
        <a href="/automecanicapj/Ordem-de-Servico/" target="_self">
            <button class="advance-btn">
                <img src="/automecanicapj/Ordem-de-Servico/img/left.svg" class="img-btn">
            </button> 
        </a>
        <a href="#" target="_self">
            <button onclick="window.print()" class="imprimir-btn" type="submit">
                <img src="/automecanicapj/Ordem-de-Servico/img/imprimir.svg" class="img-btn">
            </button> 
        </a>
    </section>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap');
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        font-family: Inter, sans-serif;
    }
    body{
        margin: 15rem;
        margin-top: 2rem;
        margin-bottom: 2rem;
        font-weight: 600;
        font-size: 1.5rem;
        background-color: #00255C; 
    }
    img{
        width: 100%;
    }
    .info_cliente{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .table{
        box-sizing: 100%;
        width: 100%;
        border: 15rem;
        padding: 1rem;
        max-height: 30vh;
        overflow-x: auto;
        overflow-y: auto;
        font-weight: 500;
        font-size: 1.5rem;
    }
    .table{
        overflow-y: scroll;
        padding-top: 2rem;
        
    }
    .thead{
        background-color: #8383835d;
        margin: 0.5rem;
    }

    .qnt{
        width: 1%;
    }
    .descricao{
        width: 10%;
    }
    .unit{
        width: 2%;
    }
    .result{
        width: 2%;
    }
    input{
        margin: 0rem 0;
        padding: 0.1rem 0.1rem;
        width: 100%;
    }
    .ordem_servico{
        background-color: #ffffff;
        margin: auto;
        border-radius: 20px;
        padding: 3rem;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .btn{
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-around;
        gap: 30rem;
        padding: 2%;
        margin-top: 6.37%;
    }
    .advance-btn,
    .imprimir-btn{
        background-color: #ffffff;
        width: 10rem;
        height: 5rem;
        border-style:solid;
        border-color: #00255C;
        border-radius: 1.5rem;
        cursor: pointer;   
    }
    .img-btn{
        width: 4rem;
    }
    @media print{
    body * {
        visibility: hidden;
      }
      .ordem_servico * {
        visibility: visible;
      }
      .ordem_servico {
        position: fixed;
        left: 10px;
        top: 0px;
      }
}
    </style>
</body>
</html>
 