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
<body>
    <header>
        <img src="img/cabecalho.svg" >
    </header>
    <div class="inf">
        <p>Nome: <?php echo $nome;?></p> 
        <p>Endereço: <?php echo "$rua, $num, $bairro";?></p>
        <p>Telefone: <?php echo $telefone1;?> </p>
        <p>Telefone:<?php echo $telefone2;?></p>
        <p>Veículo: <?php echo $veiculo;?></p>
        <p>Placa <?php echo $placa;?></p>
        <p>Cor: <?php echo $cor;?></p>
        <p>Km: <?php echo $km;?></p>
        <p>Ano: <?php echo $ano;?></p>
        <p>Combustível: <?php echo $combustivel;?></p>
        <p>Motor: <?php echo $motor;?></p>
    </div>
    <di >
        <table border="1" class="table">
            <thead class="thead">
                <tr>
                    <th class="qnt">Qnt.</th>
                    <th class="descricao">Descrição</th>
                    <th class="unit">P. Unit.</th>
                    <th class="result">Total</th>
                </tr> 
            </thead>    
            <tr>
                <td><?php echo $qnt1;?></td>
                <td><?php echo $descricao1;?></td>
                <td><?php echo $valor1;?></td>
                <td><?php echo $total1;?></td>
            </tr>
            <tr>
                <td><?php echo $qnt2;?></td>
                <td><?php echo $descricao2;?></td>
                <td><?php echo $valor2;?></td>
                <td><?php echo $total2;?></td>
            </tr>
            <tr>
                <td><?php echo $qnt3;?></td>
                <td><?php echo $descricao3;?></td>
                <td><?php echo $valor3;?></td>
                <td><?php echo $total3;?></td>
            </tr>
            <tr>
                <td><?php echo $qnt4;?></td>
                <td><?php echo $descricao4;?></td>
                <td><?php echo $valor4;?></td>
                <td><?php echo $total4;?></td>
            </tr>
            <tr>
                <td><?php echo $qnt5;?></td>
                <td><?php echo $descricao5;?></td>
                <td><?php echo $valor5;?></td>
                <td><?php echo $total5;?></td>
            </tr>
            <tr>
                <td><?php echo $qnt6;?></td>
                <td><?php echo $descricao6;?></td>
                <td><?php echo $valor6;?></td>
                <td><?php echo $total6;?></td>
            </tr>
            <tr>
                <td><?php echo $qnt7;?></td>
                <td><?php echo $descricao7;?></td>
                <td><?php echo $valor7;?></td>
                <td><?php echo $total7;?></td>
            </tr>
        </table>
    </div>
    <div>
        <p>Obs:</p>
    </div>
    <div>
        <p>90 dias de garantia do serviço</p>
        <p>Data:</p>
        <p>Cód:</p>
    </div>
    <div>
        Total R$ <
    </div>
</body>
</html>
 */