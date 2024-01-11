<?php
    $modo = isset ($_POST['modo']);
    $busca = isset ($_POST['busca']);
    echo $modo;

    if($modo !== "none"){
        if($modo == "placa"){
            echo "O modo é placa";
        }
        if($modo == "veiculo"){
            echo "O modo é veiculo";
        }
        if($modo == "codigo"){
            echo "O modo é codigo";
        }
        if($modo == "nome"){
            echo "O modo é nome";
        }
        if($modo == "data"){
            echo "O modo é data";
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