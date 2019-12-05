<?php
    require 'DB.php';
    require "Shared/layout_header.php";
    require "nav.php";

    $nome = $_POST['nome'];    
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];    
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $fixo = $_POST['fixo'];
    $celular = $_POST['celular'];
    $celular2 = $_POST['celular2'];

    $tabela = "clientes";

    $campos = " NOME, ENDERECO , NUMERO, CIDADE, ESTADO, CEP, EMAIL, FIXO , CELULAR , CELULAR2 ";
    $valores = " '$nome', '$endereco' , '$numero' , '$cidade', '$estado', '$cep', '$email' , '$fixo' , '$celular' ,'$celular2' ";

		if ( funInsert('clientes', $campos, $valores) ){
            echo "<p class='p-2 m-2 bg-success text-white'>Cliente cadastrado com sucesso!</p>";
            echo "<p class='m-2'><input class='btn btn-warning text-white' type='submit' value='Voltar' onclick='history.go(-1)' /></p>";	
        }
		else{ 
			echo "<p class='p-2 m-2 bg-danger text-white'>Erro ao cadastrar Celular!</p>";

		echo "<p class='m-2'><input class='btn btn-warning text-white' type='submit' value='Voltar' onclick='history.go(-1)' /></p>";	
    }
?>

<?php
    require 'Shared/layout_footer.php'
?>   