<?
$telefone = $_POST['telefone1'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('os');

        $query = "INSERT INTO inf_cliente (telefone1) VALUES ('$telefone')";
        $insert = mysql_query($query,$connect);
  
?>