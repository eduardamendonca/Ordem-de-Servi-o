<?php
    $sql= "SELECT * FROM $table as pedidos JOIN usuarios ON pedidos.mat_pedinte = usuarios.mat where id = '{$id}' ";
    $resultado = mysqli_query($conexao,$sql) or die();
    $row = mysqli_num_rows($resultado);
?>