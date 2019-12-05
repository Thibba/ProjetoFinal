<?php
    require "Shared/layout_header.php";
    require "nav.php";
?>
<div class="container">
    <div class="row align-items-center">
        <div class="col">    
            <div class="card">
                <div class="card-header">
                    Agendamento de Banho e Tosa
                </div>
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Clientes</h5>
                    <p class="card-text">Cadastre aqui os clientes do Pet.</p>
                    <a href="CadastroClientes.php" class="btn btn-warning">Clientes</a>                    
                </div>
            </div>      
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Cadastro de Pets
                </div>
                <div class="card-body">
                <h5 class="card-title">Cadastre aqui os Pets</h5>
                <p class="card-text">Pode ter mais de um pet por Cliente.</p>
                <a href="cadastroPet.php" class="btn btn-warning">Pet</a>
            </div>
        </div>      
        </div>
        <div class="col">    
            <div class="card">
                <div class="card-header">
                    Agendamento
                </div>
                <div class="card-body">
                    <h5 class="card-title">Agente o Banho e Toda</h5>
                        <p class="card-text">Agende aqui o Banho e Toda.</p>
                        <a href="buscarClientes.php" class="btn btn-warning">Agendamento</a>
                </div>
            </div>      
        </div>
    </div>
<?php
    require 'Shared/layout_footer.php'
?>            