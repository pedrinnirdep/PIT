<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: PRODUTO</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Alterar</h2>


<div class="form-group">
    <label>ID:</label>
    <input type="text" class="form-control" name="id_produto" disabled value="<?=$produto->getId_produto()?>">
</div>

<div class="form-group">
    <label>Datamod:</label>
    <input type="text" class="form-control" name="datamod" disabled value="<?=$produto->getDatamod()?>">
</div>

<div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" name="nome" disabled value="<?=$produto->getNome()?>">
</div>

<div class="form-group">
    <label>Descrição:</label>
    <input type="text" class="form-control" name="descricao" disabled value="<?=$produto->getDescricao()?>">
</div>

<div class="form-group">
    <label>Valor:</label>
    <input type="number" class="form-control" name="valor" disabled value="<?=$produto->getValor()?>">
</div>

<div class="form-group">
    <label>Imagem:</label>
    <input type="text" class="form-control" name="imagem" disabled value="<?=$produto->getImagem()?>">
</div>

<div class="form-group">
    <label>Estampa:</label>
    <input type="text" class="form-control" name="produto_id_estampa" disabled value="<?=$produto->getProdutoIdEstampa()?>">
</div>

<div class="form-group">
    <label>Tipo:</label>
    <input type="text" class="form-control" name="produto_id_tipo" disabled value="<?=$produto->getProdutoIdTipo()?>">
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
