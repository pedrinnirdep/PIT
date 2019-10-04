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

    <form action="" method="post">

    <div class="form-group">
        <label>Quantidade:</label>
        <input type="number" class="form-control"  name="quantidade" value="<?=$produtoscompra->getQuantidade()?>">
    </div>
    <div class="form-group">
            <label>Produtos:</label>

            <select name="produtos_compra_id_produto" class="form-control">

                <option value="">-- escolha o produto --</option>

                <?php foreach ($produtos as $produto){

                    $selected  = $produto->id_produto==$produtoscompra->getProdutosCompraIdProduto() ? "selected" : "";
                    
                ?>

                    <option <?=$selected?>   value="<?=$produto->id_produto?>"><?=$produto->nome?></option>

                <?php } ?>

            </select>

</div>
<div class="form-group">
            <label>Compra:</label>

            <select name="produtos_compra_id_compra" class="form-control">

                <option value="">-- escolha a compra --</option>

                <?php foreach ($compras as $compra){

                    $selected  = $compra->id_compra==$produtoscompra->getProdutosCompraIdCompra() ? "selected" : "";
                    
                ?>

                    <option <?=$selected?>   value="<?=$compra->id_compra?>"><?=$compra->id_compra?></option>

                <?php } ?>

            </select>

</div>

    <button class="btn btn-info" type="submit">Salvar</button>
    

</form>

</html>
