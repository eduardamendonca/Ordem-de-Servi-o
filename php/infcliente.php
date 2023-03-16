
<?php
/*$telefone = $_POST['telefone1'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('os');

        $query = "INSERT INTO inf_cliente (telefone1) VALUES ('$telefone')";
        $insert = mysql_query($query,$connect);*/
        
$nome = isset ($_POST["nome"])?$_POST["nome"]:null;
$telefone1 = $_POST["telefone1"];
$telefone2 = isset ($_POST["telefone2"])?$_POST["telefone2"]:null;
$cep = isset ($_POST["cep"])?$_POST["cep"]:null;
$cidade = $_POST["cidade"];
$rua = isset ($_POST["rua"])?$_POST["rua"]:null;
$num = isset ($_POST["num"])?$_POST["num"]:null;
$bairro = isset ($_POST["bairro"])?$_POST["bairro"]:null;

echo "Seu nome é $nome";
echo "<br/>Você possui o telefone $telefone1";
echo "<br/>Você possui o segundo telefone $telefone2";


?>