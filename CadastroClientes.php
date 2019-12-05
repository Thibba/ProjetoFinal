<?php
    require "Shared/layout_header.php";
    require "nav.php";
?>
    <div class="container">
        <div class="row align-items-start">
             <!-- <div class="col">
                 One of three columns
            </div> -->
            <div class="col-6">
                <form action="Cliente.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>                    
                </div>                                
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço">            
                </div>  
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Número">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado">
                    </div>                                                               
                <div class="form-group col-md-4">
                    <label for="cep">Cep</label>
                    <input type="text" class="form-control" id="cep" name="cep">
                </div>
            </div>
            
        </div>  
            <div class="col-6">                                                        
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="fixo">Telefone Fixo</label>
                        <input type="fixo" class="form-control" id="fixo" name="fixo">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="celular">Celular</label>
                        <input type="celular" class="form-control" id="celular" name="celular">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="celular2">Celular 2</label>
                        <input type="celular2" class="form-control" id="celular2" name="celular2">
                    </div>                                                                                
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
