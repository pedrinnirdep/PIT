<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: ProdutosCompra</h1>
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
        <label>Id:</label>
        <input type="text" class="form-control" name="id_produtos_compra" disabled value="<?=$produtoscompra->getId_produtos_compra()?>">
    </div>
    <div class="form-group">
        <label>Quantidade:</label>
        <input type="number" class="form-control" disabled name="quantidade" value="<?=$produtoscompra->getQuantidade()?>">
    </div>
    <div class="form-group">
        <label>Produto:</label>
        <input type="text" class="form-control" name="produtos_compra_id_produto" disabled value="<?=$produtoscompra->getProdutosCompraIdProduto()?>">
    </div>
    <div class="form-group">
        <label>Compra:</label>
        <input type="number" class="form-control" disabled name="produtos_compra_id_compra" value="<?=$produtoscompra->getProdutosCompraIdCompra()?>">
    </div>
    

</form>

</html>
