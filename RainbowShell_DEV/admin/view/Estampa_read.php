<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: ESTAMPA</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Ver</h2>

<div class="form-group">
    <label>ID:</label>
    <input type="text" class="form-control" name="id_estampa" disabled value="<?=$estampa->getId_estampa()?>">
</div>

<div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" name="nome" disabled value="<?=$estampa->getNome()?>">
</div>

<div class="form-group">
    <label>Descricao:</label>
    <input type="text" class="form-control" name="descricao" disabled value="<?=$estampa->getDescricao()?>">
</div>

<div class="form-group">
    <label>Imagem:</label>
    <div class="row">
        <div class="col-md-2">
            <a href=".././<?=$estampa->getImagem()?>" class="btn btn-outline-dark" target="_blank">Visualizar Imagem</a>
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" name="imagem" disabled value="<?=$estampa->getImagem()?>">
        </div>
    </div>
</div>

<div class="form-group">
    <label>Comissão:</label>
    <input type="text" class="form-control" name="comissao" disabled value="<?=$estampa->getComissao()?>">
</div>

<div class="form-group">
    <label>Tag:</label>
    <input type="text" class="form-control" name="tag" disabled value="<?=$estampa->getTag()?>">
</div>

<div class="form-group">
    <label>Aprovacao:</label>
    <input type="number" class="form-control" name="aprovacao" disabled value="<?=$estampa->getAprovacao()?>">
</div>

<div class="form-group">
    <label>Usuario ID:</label>
    <input type="number" class="form-control" name="estampa_en" disabled value="<?=$estampa->getEstampa_id_usuario()?>">
</div>

</form>

<!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>	
  

</body>

</body>

</html>
