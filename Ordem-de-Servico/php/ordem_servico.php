<?php
    include("conection.php");
   
    /* Incluindo os serviços na tabela auxiliar */
    ob_start(); // Inicia o buffer de saída

    // Inclua o conteúdo de infclientes.php (que inclui as variáveis)
    include 'infclientes.php';

    // Captura o conteúdo do buffer
    $buffer_content = ob_get_contents();

    // Encerre o buffer de saída
    ob_end_clean();

    

?>