<?php
    require 'DB.php';
    require "Shared/layout_header.php";
    require "nav.php";

    $id_cliente = $_POST['id_cliente'];    
    $nome_pet = $_POST['nome'];
    $raca = $_POST['raca'];    
    $cor = $_POST['cor'];
    

    $tabela = "pets";

    $campos = " id_cliente, nome_pet , raca, cor ";
    $valores = " '$id_cliente', '$nome_pet' , '$raca' , '$cor' ";
    
		if ( funInsert('pets', $campos, $valores) ){
            echo "<p class='p-2 m-2 bg-success text-white'>Pet cadastrado com sucesso!</p>";
            echo "<p class='m-2'><a href='index.php' class='btn btn-warning'>Voltar</a></p>";	
        }
		else{ 
			echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao cadastrar Pet!</p>";

		echo "<p class='m-2'><a href='index.php' class='btn btn-warning'>Voltar</a></p>";	
    }
?>

<?php
    require 'Shared/layout_footer.php'
?>   