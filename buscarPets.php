<?php
    require 'DB.php';
    require "Shared/layout_header.php";
    require "nav.php";

    $argumentos = "WHERE 1 = 1";        

    if ( $_POST['nome'] != '' ) {
        $nome = $_POST['nome'];
        $argumentos = $argumentos . " AND NOME LIKE '%$nome%' ";
    }

    
    else if ( isset($_POST['celular']) ) {
        $setor = $_POST['celular'];
        $argumentos = $argumentos . " AND SETOR = '$setor' ";            
    }

    $argumentos = $argumentos . " ORDER BY NOME ";
    // echo $argumentos;
    $tabela = funSelect('clientes' , '*' , $argumentos) 

?>

<h4 class='p-2 m-2 bg-secondary text-warning text-center'>Clientes Localizados</h4>
<table class='m-2 w-75 mx-auto table table-striped table-dark text-warning'>
    <thead class='text-center'>
        <tr>
             <th scope='col'>Nome</th>
             <th scope='col'>Celular</th>             
        </tr>
    </thead>
<?php			
        for ( $i = 0 ; $i < count($tabela) ; $i++){	
        echo "<tr class='text-center'>
                <td scope='col'>". $tabela[$i]['nome'] ."</td>
                <td scope='col'>". $tabela[$i]['celular'] ."</td>
                <td scope='col'> 
                <form action='selecionaPet.php' method='post'>
                <input type='hidden'  class='form-control' id='id_cliente' name='id_cliente' value =" .$tabela[$i]['id_cliente'] ."/>"
                . "<form>
                <button type='submit' class='btn btn-warning'>Pets</button>
                </td>


            </tr>";
        }
        echo "<td scope='col'><p class='m-2'><a href='principal.php' class='btn btn-warning'>Voltar</a></p></td>";
?>   
</table>



<?php
    require 'Shared/layout_footer.php'
?>   
