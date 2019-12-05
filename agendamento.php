<?php
    require 'DB.php';
    require "Shared/layout_header.php";
    require "nav.php";

    $argumentos = "WHERE 1 = 1";        

    if ( $_POST['nome'] != '' ) {
        $nome = $_POST['nome'];
        $argumentos = $argumentos . " AND NOME LIKE '%$nome%' ";
    }
    if ( isset($_POST['celular']) ) {
        $setor = $_POST['celular'];
        $argumentos = $argumentos . " AND SETOR = '$setor' ";            
    }
    // if ( isset($_POST['sexo']) ) {
    //     $sexo = $_POST['sexo'];
    //     $argumentos = $argumentos . " AND SEXO = '$sexo' ";
    // }
    // if ( isset($_POST['estagio']) ) {
    //     $estagio = $_POST['estagio'];
    //     $argumentos = $argumentos . " AND ESTAGIO = '$estagio' ";
        
    // }

    $argumentos = $argumentos . " ORDER BY NOME ";

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
                <td scope='col'>". $tabela[$i]['NOME'] ."</td>
                <td scope='col'>". $tabela[$i]['CELULAR'] ."</td>                
            </tr>";
    }
?>   
</table>
<p class='m-2'><input class='btn btn-warning text-white' type='submit' value='Voltar' onclick=location.replace('Index.php?opc=G&acao=B') /></p>	

<?php
    require 'Shared/layout_footer.php'
?>   
