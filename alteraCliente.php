<?php
    require 'DB.php';
    require "Shared/layout_header.php";
    require "nav.php";

    $id_cliente = $_POST['id_cliente'];
    echo $id_cliente;

$argumentos = " WHERE id_cliente = '$id_cliente' ";        

    // if ( $_POST['nome'] != '' ) {
    //     $nome = $_POST['nome'];
    //     $argumentos = $argumentos . " AND NOME LIKE '%$nome%' ";
    // }

    
    // else if ( isset($_POST['celular']) ) {
    //     $setor = $_POST['celular'];
    //     $argumentos = $argumentos . " AND SETOR = '$setor' ";            
    // }

    // $argumentos = $argumentos . " ORDER BY NOME ";
    // echo $argumentos;    
    $tabela = funSelect('clientes' , '*' , $argumentos) 

?>


<?php
    require 'Shared/layout_footer.php'
?>   