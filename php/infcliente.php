<?
/*
$telefone = $_POST['telefone1'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('os');

        $query = "INSERT INTO inf_cliente (telefone1) VALUES ('$telefone')";
        $insert = mysql_query($query,$connect);*/
        
$nome = $_POST["nome"];
$telefone1 = $_POST["telefone1"];
$telefone2 = $_POST["telefone2"];
$cep = $_POST["cep"];
$cidade = $_POST["cidade"];
$rua = $_POST["rua"];
$num = $_POST["num"];
$bairro = $_POST["bairro"];

echo "Seu nome é $nome";
echo "<br/>Você possui o telefone $telefone1";
?>