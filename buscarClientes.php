<?php
    require 'DB.php';
    require "Shared/layout_header.php";
    require "nav.php";
?>
    <div class="container-fluid">
    <div class="col-3">                           
    </div>
        <div class="row align-items-center">                         
            <div class="col-6">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Busca de Clientes</h1>
                        <p class="lead">Faça a Busca Por Nome ou Telefone Para Agendar um banho e Tosa.</p>
                    </div>
                </div>                           
            <form action="agendamento.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>                    
                </div> 
                <div class="form-row">
                     <div class="form-group col-md-12">
                        <label for="celular">Celular</label>
                        <input type="celular" class="form-control" id="celular" name="celular">
                     </div>    
                </div>
                <div class="row align-items-end">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Busca</button>     
                    </div>
                </div>                           
            </div>            
        </div>  
        <div class="col-3">                           
        </div>              
    </div>
    
<?php
    require 'Shared/layout_footer.php'
?>   