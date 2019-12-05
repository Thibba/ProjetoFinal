<?php
    require "Shared/layout_header.php";
    require "nav.php";
?>
    <div class="container-fluid">
    <div class="row justify-content-center">
             <!-- <div class="col">
                 One of three columns
            </div> -->
            <div class="col-6">
                <form action="CadastroPetResult.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nome">Id_cliente</label>
                        <input type="text" class="form-control" id="id_cliente" name="id_cliente" placeholder="Digite o Id do Cliente">
                    </div>                    
                </div>                
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome do Pet">
                    </div>                    
                </div>                                
                <div class="form-group">
                    <label for="endereco">raca</label>
                    <input type="text" class="form-control" id="raca" name="raca" placeholder="Digite a Raça do Pet">            
                </div>  
                <div class="form-group">
                    <label for="numero">cor</label>
                    <input type="text" class="form-control" id="cor" name="cor" placeholder="Raça a Cor do pet">
                </div>
                        
                <div class="row align-items-end">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning">Cadastra</button>     
                    </div>
                </div>                                                                                                                        
            </form>
        </div>            
    </div>
</div>
<?php
    require 'Shared/layout_footer.php'
?>   
