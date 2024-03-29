<?php
    require 'DB.php';
    require "Shared/layout_header.php";
    require "nav.php";
?>
    <div class="container-fluid">
  <div class="row justify-content-center">
    <div class="">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Busca de Clientes</h1>
          <p class="lead">Faça a Busca Por Nome ou Telefone Para Agendar um banho e Tosa.</p>
        </div>
      </div>
      <form action="buscarPets.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="celular">Celular</label>
            <input type="celular"  class="form-control" id="celular" name="celular" />
          </div>
        </div>
        <div class="row align-items-end">
          <div class="col-12">
            <button type="submit" class="btn btn-warning">Busca</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
    require 'Shared/layout_footer.php'
?>   