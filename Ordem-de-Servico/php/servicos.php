 <?php

include("conection.php");
        
$qnt1 = isset ($_POST['qnt1'])?$_POST['qnt1']:null;
$descricao1 = $_POST['descricao1']?$_POST['descricao1']:null;
$valor1 = isset ($_POST['valor1'])?$_POST['valor1']:null;
$total1 = isset ($_POST['total1'])?$_POST['total1']:null;
$obs = isset ($_POST['obs'])?$_POST['obs']:null;

/* Formatando a string */
$descricao1 = mb_convert_case($descricao1, MB_CASE_TITLE, 'UTF-8');

$sql1 = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
        VALUES ('$qnt1', '$descricao1', '$valor1', '$total1')";

$result= mysqli_query ($mysqli, $sql1);


$qnt2 = isset ($_POST['qnt2'])?$_POST['qnt2']:null;
$descricao2 = $_POST['descricao2']?$_POST['descricao2']:null;
$valor2 = isset ($_POST['valor2'])?$_POST['valor2']:null;
$total2 = isset ($_POST['total2'])?$_POST['total2']:null;

/* Formatando a string */
$descricao2 = mb_convert_case($descricao2, MB_CASE_TITLE, 'UTF-8');

if(isset($descricao2)) {
        $sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
                VALUES ('$qnt2', '$descricao2', '$valor2', '$total2')";

        $result= mysqli_query ($mysqli, $sql);
        
        $qnt3 = isset ($_POST['qnt3'])?$_POST['qnt3']:null;
        $descricao3 = $_POST['descricao3']?$_POST['descricao3']:null;
        $valor3 = isset ($_POST['valor3'])?$_POST['valor3']:null;
        $total3 = isset ($_POST['total3'])?$_POST['total3']:null;

        /* Formatando a string */
        $descricao3 = mb_convert_case($descricao3, MB_CASE_TITLE, 'UTF-8');

        if(isset($descricao3)) {
                $sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
                        VALUES ('$qnt3', '$descricao3', '$valor3', '$total3')";

                $result= mysqli_query ($mysqli, $sql);
        
                $qnt4 = isset ($_POST['qnt4'])?$_POST['qnt4']:null;
                $descricao4 = $_POST['descricao4']?$_POST['descricao4']:null;
                $valor4 = isset ($_POST['valor4'])?$_POST['valor4']:null;
                $total4 = isset ($_POST['total4'])?$_POST['total4']:null;

                /* Formatando a string */
                $descricao4 = mb_convert_case($descricao4, MB_CASE_TITLE, 'UTF-8');

                if(isset($descricao4)) {
                        $sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
                                VALUES ('$qnt4', '$descricao4', '$valor4', '$total4')";

                        $result= mysqli_query ($mysqli, $sql);
                


                        $qnt5 = isset ($_POST['qnt5'])?$_POST['qnt5']:null;
                        $descricao5 = $_POST['descricao5']?$_POST['descricao5']:null;
                        $valor5 = isset ($_POST['valor5'])?$_POST['valor5']:null;
                        $total5 = isset ($_POST['total5'])?$_POST['total5']:null;

                        /* Formatando a string */
                        $descricao5 = mb_convert_case($descricao5, MB_CASE_TITLE, 'UTF-8');

                        if(isset($descricao5)) {
                                $sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
                                        VALUES ('$qnt5', '$descricao5', '$valor5', '$total5')";

                                $result= mysqli_query ($mysqli, $sql);
                        


                                $qnt6 = isset ($_POST['qnt6'])?$_POST['qnt6']:null;
                                $descricao6 = $_POST['descricao6']?$_POST['descricao6']:null;
                                $valor6 = isset ($_POST['valor6'])?$_POST['valor6']:null;
                                $total6 = isset ($_POST['total6'])?$_POST['total6']:null;

                                /* Formatando a string */
                                $descricao6 = mb_convert_case($descricao6, MB_CASE_TITLE, 'UTF-8');

                                if(isset($descricao6)) {
                                        $sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
                                                VALUES ('$qnt6', '$descricao6', '$valor6', '$total6')";

                                        $result= mysqli_query ($mysqli, $sql);
                                


                                        $qnt7 = isset ($_POST['qnt7'])?$_POST['qnt7']:null;
                                        $descricao7 = $_POST['descricao7']?$_POST['descricao7']:null;
                                        $valor7 = isset ($_POST['valor7'])?$_POST['valor7']:null;
                                        $total7 = isset ($_POST['total7'])?$_POST['total7']:null;

                                        /* Formatando a string */
                                        $descricao7 = mb_convert_case($descricao7, MB_CASE_TITLE, 'UTF-8');

                                        if(isset($descricao7)) {
                                                $sql = "INSERT INTO `servicos`(quantidade, descricao, unidade, total)
                                                        VALUES ('$qnt7', '$descricao7', '$valor7', '$total7')";

                                                $result= mysqli_query ($mysqli, $sql);
                                                
                                                session_start();

                                                $query_servicos1 = "SELECT id, descricao
                                                FROM servicos 
                                                WHERE descricao = '$descricao1'
                                                ORDER BY id DESC";
                                
                                                $result1 = $mysqli->query($query_servicos1);
                                        
                                                if ($result1->num_rows > 0) {
                                                        $row1 = $result1->fetch_assoc(); 
                                                        $id1 = $row1["id"];
                                                }
                                                $_SESSION['id1_tabela_auxiliar'] = $id1; 
                                
                                                /*------------------------------*/
                                
                                                $query_servicos2 = "SELECT id, descricao
                                                        FROM servicos 
                                                        WHERE descricao = '$descricao2'
                                                        ORDER BY id DESC";
                                        
                                                $result2 = $mysqli->query($query_servicos2);
                                        
                                                if ($result2->num_rows > 0) {
                                                        $row2 = $result2->fetch_assoc(); 
                                                        $id2 = $row2["id"];
                                                }
                        
                                                /*------------------------------*/
                                
                                                $query_servicos3 = "SELECT id, descricao
                                                        FROM servicos 
                                                        WHERE descricao = '$descricao3'
                                                        ORDER BY id DESC";
                                        
                                                $result3 = $mysqli->query($query_servicos3);
                                        
                                                if ($result3->num_rows > 0) {
                                                        $row3 = $result3->fetch_assoc(); 
                                                        $id3 = $row3["id"];
                                                }
                
                                                /*------------------------------*/
                                
                                                $query_servicos4 = "SELECT id, descricao
                                                        FROM servicos 
                                                        WHERE descricao = '$descricao4'
                                                        ORDER BY id DESC";
                                        
                                                $result4 = $mysqli->query($query_servicos4);
                                        
                                                if ($result4->num_rows > 0) {
                                                        $row4 = $result4->fetch_assoc(); 
                                                        $id4 = $row4["id"];
                                                }
                                        
                                                /*------------------------------*/
                                        
                                                        $query_servicos5 = "SELECT id, descricao
                                                        FROM servicos 
                                                        WHERE descricao = '$descricao5'
                                                        ORDER BY id DESC";
                                        
                                                $result5 = $mysqli->query($query_servicos5);
                                        
                                                if ($result5->num_rows > 0) {
                                                        $row5 = $result5->fetch_assoc(); 
                                                        $id5 = $row5["id"];
                                                }
                                        
                                                /*------------------------------*/
                                        
                                                        $query_servicos6 = "SELECT id, descricao
                                                        FROM servicos 
                                                        WHERE descricao = '$descricao6'
                                                        ORDER BY id DESC";
                                        
                                                $result6 = $mysqli->query($query_servicos6);
                                        
                                                if ($result6->num_rows > 0) {
                                                        $row6 = $result6->fetch_assoc(); 
                                                        $id6 = $row6["id"];
                                                }

                                                /*------------------------------*/
                                        
                                                $query_servicos7 = "SELECT id, descricao
                                                FROM servicos 
                                                WHERE descricao = '$descricao7'
                                                ORDER BY id DESC";
                                
                                                $result7 = $mysqli->query($query_servicos7);
                                        
                                                if ($result7->num_rows > 0) {
                                                        $row7 = $result7->fetch_assoc(); 
                                                        $id7 = $row7["id"];
                                                }
                                        
                                                
                                                $sql = "INSERT INTO `tabela_auxiliar` (obs, servico1, servico2, servico3, servico4, servico5, servico6, servico7) 
                                                                VALUES ('$obs', '$id1', '$id2', '$id3', '$id4', '$id5', '$id6', '$id7')";
                                                
                                                $result= mysqli_query ($mysqli, $sql);

                                                session_write_close();

                                        }  else {
                                                session_start();
         
                                                $query_servicos1 = "SELECT id, descricao
                                                        FROM servicos 
                                                        WHERE descricao = '$descricao1'
                                                        ORDER BY id DESC";
                                        
                                                $result1 = $mysqli->query($query_servicos1);
                                        
                                                if ($result1->num_rows > 0) {
                                                        $row1 = $result1->fetch_assoc(); 
                                                        $id1 = $row1["id"];
                                                }
                                                $_SESSION['id1_tabela_auxiliar'] = $id1; 
                                
                                                /*------------------------------*/
                                
                                                $query_servicos2 = "SELECT id, descricao
                                                        FROM servicos 
                                                        WHERE descricao = '$descricao2'
                                                        ORDER BY id DESC";
                                        
                                                $result2 = $mysqli->query($query_servicos2);
                                        
                                                if ($result2->num_rows > 0) {
                                                        $row2 = $result2->fetch_assoc(); 
                                                        $id2 = $row2["id"];
                                                }
                        
                                                /*------------------------------*/
                                
                                                $query_servicos3 = "SELECT id, descricao
                                                        FROM servicos 
                                                        WHERE descricao = '$descricao3'
                                                        ORDER BY id DESC";
                                        
                                                $result3 = $mysqli->query($query_servicos3);
                                        
                                                if ($result3->num_rows > 0) {
                                                        $row3 = $result3->fetch_assoc(); 
                                                        $id3 = $row3["id"];
                                                }
                
                                                /*------------------------------*/
                                
                                                $query_servicos4 = "SELECT id, descricao
                                                        FROM servicos 
                                                        WHERE descricao = '$descricao4'
                                                        ORDER BY id DESC";
                                        
                                                $result4 = $mysqli->query($query_servicos4);
                                        
                                                if ($result4->num_rows > 0) {
                                                        $row4 = $result4->fetch_assoc(); 
                                                        $id4 = $row4["id"];
                                                }
                                        
                                               /*------------------------------*/
                                
                                                $query_servicos5 = "SELECT id, descricao
                                                       FROM servicos 
                                                       WHERE descricao = '$descricao5'
                                                       ORDER BY id DESC";
                                       
                                               $result5 = $mysqli->query($query_servicos5);
                                       
                                               if ($result5->num_rows > 0) {
                                                       $row5 = $result5->fetch_assoc(); 
                                                       $id5 = $row5["id"];
                                               }
                                       
                                               /*------------------------------*/
                                
                                                $query_servicos6 = "SELECT id, descricao
                                                       FROM servicos 
                                                       WHERE descricao = '$descricao6'
                                                       ORDER BY id DESC";
                                       
                                               $result6 = $mysqli->query($query_servicos6);
                                       
                                               if ($result6->num_rows > 0) {
                                                       $row6 = $result6->fetch_assoc(); 
                                                       $id6 = $row6["id"];
                                               }
                                       
                                        
                                               $sql = "INSERT INTO `tabela_auxiliar` (obs, servico1, servico2, servico3, servico4, servico5, servico6) 
                                                        VALUES ('$obs', '$id1', '$id2', '$id3', '$id4', '$id5', '$id6')";
                                        
                                               $result= mysqli_query ($mysqli, $sql);

                                               session_write_close();
                                                
                                        
                                        }     

                                } else {
                                        session_start();
         
                                        $query_servicos1 = "SELECT id, descricao
                                                FROM servicos 
                                                WHERE descricao = '$descricao1'
                                                ORDER BY id DESC";
                                
                                        $result1 = $mysqli->query($query_servicos1);
                                
                                        if ($result1->num_rows > 0) {
                                                $row1 = $result1->fetch_assoc(); 
                                                $id1 = $row1["id"];
                                        }
                                        $_SESSION['id1_tabela_auxiliar'] = $id1; 
                        
                                        /*------------------------------*/
                        
                                        $query_servicos2 = "SELECT id, descricao
                                                FROM servicos 
                                                WHERE descricao = '$descricao2'
                                                ORDER BY id DESC";
                                
                                        $result2 = $mysqli->query($query_servicos2);
                                
                                        if ($result2->num_rows > 0) {
                                                $row2 = $result2->fetch_assoc(); 
                                                $id2 = $row2["id"];
                                        }
                
                                        /*------------------------------*/
                        
                                        $query_servicos3 = "SELECT id, descricao
                                                FROM servicos 
                                                WHERE descricao = '$descricao3'
                                                ORDER BY id DESC";
                                
                                        $result3 = $mysqli->query($query_servicos3);
                                
                                        if ($result3->num_rows > 0) {
                                                $row3 = $result3->fetch_assoc(); 
                                                $id3 = $row3["id"];
                                        }
        
                                        /*------------------------------*/
                        
                                        $query_servicos4 = "SELECT id, descricao
                                                FROM servicos 
                                                WHERE descricao = '$descricao4'
                                                ORDER BY id DESC";
                                
                                        $result4 = $mysqli->query($query_servicos4);
                                
                                        if ($result4->num_rows > 0) {
                                                $row4 = $result4->fetch_assoc(); 
                                                $id4 = $row4["id"];
                                        }
                                
                                       /*------------------------------*/
                        
                                        $query_servicos5 = "SELECT id, descricao
                                               FROM servicos 
                                               WHERE descricao = '$descricao5'
                                               ORDER BY id DESC";
                               
                                       $result5 = $mysqli->query($query_servicos5);
                               
                                       if ($result5->num_rows > 0) {
                                               $row5 = $result5->fetch_assoc(); 
                                               $id5 = $row5["id"];
                                       }
                               
                               
                                       $sql = "INSERT INTO `tabela_auxiliar` (obs, servico1, servico2, servico3, servico4, servico5) 
                                                VALUES ('$obs', '$id1', '$id2', '$id3', '$id4', '$id5')";
                                
                                       $result= mysqli_query ($mysqli, $sql);

                                       session_write_close();
                                        
                                
                                }

                        } else {
                                session_start();
         
                                $query_servicos1 = "SELECT id, descricao
                                        FROM servicos 
                                        WHERE descricao = '$descricao1'
                                        ORDER BY id DESC";
                        
                                $result1 = $mysqli->query($query_servicos1);
                        
                                if ($result1->num_rows > 0) {
                                        $row1 = $result1->fetch_assoc(); 
                                        $id1 = $row1["id"];
                                }
                                $_SESSION['id1_tabela_auxiliar'] = $id1; 
                
                                /*------------------------------*/
                
                                $query_servicos2 = "SELECT id, descricao
                                        FROM servicos 
                                        WHERE descricao = '$descricao2'
                                        ORDER BY id DESC";
                        
                                $result2 = $mysqli->query($query_servicos2);
                        
                                if ($result2->num_rows > 0) {
                                        $row2 = $result2->fetch_assoc(); 
                                        $id2 = $row2["id"];
                                }
        
                                /*------------------------------*/
                
                                $query_servicos3 = "SELECT id, descricao
                                        FROM servicos 
                                        WHERE descricao = '$descricao3'
                                        ORDER BY id DESC";
                        
                                $result3 = $mysqli->query($query_servicos3);
                        
                                if ($result3->num_rows > 0) {
                                        $row3 = $result3->fetch_assoc(); 
                                        $id3 = $row3["id"];
                                }

                                /*------------------------------*/
                
                                $query_servicos4 = "SELECT id, descricao
                                        FROM servicos 
                                        WHERE descricao = '$descricao4'
                                        ORDER BY id DESC";
                        
                                $result4 = $mysqli->query($query_servicos4);
                        
                                if ($result4->num_rows > 0) {
                                        $row4 = $result4->fetch_assoc(); 
                                        $id4 = $row4["id"];
                                }
                        
                        
                               $sql = "INSERT INTO `tabela_auxiliar` (obs, servico1, servico2, servico3, servico4) 
                                        VALUES ('$obs', '$id1', '$id2', '$id3', '$id4')";
                        
                               $result= mysqli_query ($mysqli, $sql);

                               session_write_close();
                                
                        
                        }

                } else {
                        session_start();
         
                        $query_servicos1 = "SELECT id, descricao
                                FROM servicos 
                                WHERE descricao = '$descricao1'
                                ORDER BY id DESC";
                
                        $result1 = $mysqli->query($query_servicos1);
                
                        if ($result1->num_rows > 0) {
                                $row1 = $result1->fetch_assoc(); 
                                $id1 = $row1["id"];
                        }
                        $_SESSION['id1_tabela_auxiliar'] = $id1; 
        
                        /*------------------------------*/
        
                        $query_servicos2 = "SELECT id, descricao
                                FROM servicos 
                                WHERE descricao = '$descricao2'
                                ORDER BY id DESC";
                
                        $result2 = $mysqli->query($query_servicos2);
                
                        if ($result2->num_rows > 0) {
                                $row2 = $result2->fetch_assoc(); 
                                $id2 = $row2["id"];
                        }

                        /*------------------------------*/
        
                        $query_servicos3 = "SELECT id, descricao
                                FROM servicos 
                                WHERE descricao = '$descricao3'
                                ORDER BY id DESC";
                
                        $result3 = $mysqli->query($query_servicos3);
                
                        if ($result3->num_rows > 0) {
                                $row3 = $result3->fetch_assoc(); 
                                $id3 = $row3["id"];
                        }
                
                
                       $sql = "INSERT INTO `tabela_auxiliar` (obs, servico1, servico2, servico3) 
                                VALUES ('$obs', '$id1', '$id2', '$id3')";
                
                       $result= mysqli_query ($mysqli, $sql);

                       session_write_close();
                        
                
                }

        } else {
                session_start();
         
                $query_servicos1 = "SELECT id, descricao
                        FROM servicos 
                        WHERE descricao = '$descricao1'
                        ORDER BY id DESC";
        
                $result1 = $mysqli->query($query_servicos1);
        
                if ($result1->num_rows > 0) {
                        $row1 = $result1->fetch_assoc(); 
                        $id1 = $row1["id"];
                }
                $_SESSION['id1_tabela_auxiliar'] = $id1; 

                /*------------------------------*/

                $query_servicos2 = "SELECT id, descricao
                        FROM servicos 
                        WHERE descricao = '$descricao2'
                        ORDER BY id DESC";
        
                $result2 = $mysqli->query($query_servicos2);
        
                if ($result2->num_rows > 0) {
                        $row2 = $result2->fetch_assoc(); 
                        $id2 = $row2["id"];
                }
        
               $sql = "INSERT INTO `tabela_auxiliar` (obs, servico1, servico2) 
                        VALUES ('$obs', '$id1', '$id2')";
        
               $result= mysqli_query ($mysqli, $sql);

               session_write_close();
                
        
        }

} else {
        session_start();

        $query_servicos = "SELECT id, descricao
                FROM servicos 
                WHERE descricao = '$descricao1'
                ORDER BY id DESC";

        $result = $mysqli->query($query_servicos);

        if ($result->num_rows > 0) {
                $row = $result->fetch_assoc(); 
                $id1 = $row["id"];
        }
        $_SESSION['id1_tabela_auxiliar'] = $id1; 

       $sql = "INSERT INTO `tabela_auxiliar` (obs, servico1) VALUES ('$obs', '$id1')";

       $result= mysqli_query ($mysqli, $sql);

       session_write_close();
        

}

header("Location: /automecanicapj/Ordem-de-Servico/php/ordem_servico.php");



die();

?>