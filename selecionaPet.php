<?php
    require 'DB.php';
    require "Shared/layout_header.php";
    require "nav.php";

?>

<?php

 $id_cliente = $_POST['id_cliente'];

 echo $id_cliente;

 $argumentos = "WHERE id_cliente = '$id_cliente' ";        

    if ( $_POST['id_cliente'] != '' ) {
        $id_cliente = $_POST['id_cliente'];
        //$argumentos = $argumentos . " AND id_cliente = '$id_cliente' ";
    }
    
    //$argumentos = $argumentos . " ORDER BY id_pet ";
     echo $argumentos;
    $tabela = funSelect('pets' , '*' , $argumentos);
    $i = 0;
    echo $tabela[$i]['nome_pet'];

?>
<?php
    require 'Shared/layout_footer.php'
?>   