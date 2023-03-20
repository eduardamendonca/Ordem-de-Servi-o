<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toda a documentação de php no curso em video</title>
</head>
<body>
    <div>
        <h1>Variáveis em PHP</h1>
        <?php
            $idade = 18;
            $nome = "Eduarda";
            echo $nome." tem ".$idade." anos!";
            echo "$nome tem $idade anos!";
        ?>
    </div>
    <div>
        <h1>Operadores aritméticos</h1>
        <?php
            $n1 = 30;
            $n2 = 2;
            echo "A soma vale ". ($n1+$n2);
            echo "<br/>A subtração vale ". ($n1-$n2);
            echo "<br/>A multiplicação vale ". ($n1*$n2);
            echo "<br/>A divisão vale ". ($n1/$n2);
            echo "<br/>O módulo vale ". ($n1%$n2);
            echo "<br/>A média vale ". ($n1+$n2)/2;
        ?>
        <h2>Recebendo valores pela url</h2>
        <?php
            $num1 = $_GET["a"];
            $num2 = $_GET["b"];

            echo "Valores recebidos $num1 e $num2.";
        ?>
        <h2>Funções aritméticas</h2>
        <?php
            echo "O valor absoluto de a = ". abs($num1);
            echo "<br/>O valor de $num1<sup>$num2</sup> é de: ". pow($num1, $num2);  
            echo "<br/>A raiz quadrada de $num1 é de: ". sqrt($num1);
            echo "<br/>O valor de $num2 arredondado é: ". round($num2); //ceil floor
            echo "<br/>A parte inteira de $num2 é:". intval($num2);
            echo "<br/> o valor de $num1 formatado é :". number_format($num1,2,",", "."); 
        ?>
        <h1>Atribuindo variáveis</h1>
        <?php
            
            echo "Valores recebidos $num1 e $num2.";
        ?>
        <h2>Funções aritméticas</h2>
        <?php
            echo "O valor absoluto de a = ". abs($num1);
            echo "<br/>O valor de $num1<sup>$num2</sup> é de: ". pow($num1, $num2);  
            echo "<br/>A raiz quadrada de $num1 é de: ". sqrt($num1);
            echo "<br/>O valor de $num2 arredondado é: ". round($num2); //ceil floor
            echo "<br/>A parte inteira de $num2 é:". intval($num2);
            echo "<br/> o valor de $num1 formatado é :". number_format($num1,2,",", "."); 
        ?>
        <h1>Atribuindo variáveis</h1>
        <?php
                    

            echo "Valores recebidos  $num1 e $num2";

        ?>
        
        <h1>Variáveis em PHP</h1>
        <?php
            $idade = 18;
            $nome = "Eduarda";
            echo $nome." tem ".$idade." anos!";
            echo "$nome tem $idade anos!";
        ?>
        <h1>Operadores relacionais</h1>
        <?php
            $tipo =$_GET["op"];
            $r = ($tipo == "s")?$num1+$num2:$num1*$num2;
            echo "O resultado será $r";
            $voto = ($idade>= 18 && $idade<65)?"OBRIGATORIO":"NÃO ORIGATORIO";
            echo "Seu voto é $voto";
        ?>
        <h1>Estrutura condicional switch</h1>
        <?php
            $idade = 18;
            $nome = "Eduarda";
            echo $nome." tem ".$idade." anos!";
            echo "$nome tem $idade anos!";
        ?>
    </div>
</body>
</html>


