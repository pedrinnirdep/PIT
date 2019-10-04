<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: TIPO</h1>
  <table class="table">
    <thead>
    </thead>

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

    <body>

    <h2>Ver</h2>

<form>

<div class="form-group">
    <label>Cor:</label>
    <input type="text" class="form-control" name="cor" disabled value="<?=$estoque->getCor()?>">
</div>

<div class="form-group">
    <label>Tamanho:</label>
    <input type="text" class="form-control" name="tamanho" disabled value="<?=$estoque->getTamanho()?>">
</div>

<div class="form-group">
    <label>Material:</label>
    <input type="text" class="form-control" name="material" disabled value="<?=$estoque->getMaterial()?>">
</div>

<div class="form-group">
    <label>Capacidade:</label>
    <input type="text" class="form-control" name="capacidade" disabled value="<?=$estoque->getCapacidade()?>">
</div>

<div class="form-group">
    <label>Volume:</label>
    <input type="text" class="form-control" name="volume" disabled value="<?=$estoque->getVolume()?>">
</div>

<div class="form-group">
    <label>Quantidade:</label>
    <input type="text" class="form-control" name="quantidade" disabled value="<?=$estoque->getQuantidade()?>">
</div>

<div class="form-group">
    <label>Preço compra:</label>
    <input type="text" class="form-control" name="preco_compra" disabled value="<?=$estoque->getPreco_compra()?>">
</div>

<div class="form-group">
    <label>Tipo:</label>
    <input type="text" class="form-control" name="estoque_id_tipo" disabled value="<?=$estoque->getEstoque_id_tipo()?>">
</div>

</form>

</html>
