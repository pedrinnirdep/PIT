<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: COMPRA</h1>
  <table class="table">
    <thead>
    </thead>
    
    <h2>Ver Compras</h2>

<div class="form-group">
    <label>Data compra:</label>
    <input type="text" class="form-control" name="datacompra" disabled value="<?=$compra->getData_compra()?>">
</div>

<div class="form-group">
    <label>Data entrega:</label>
    <input type="text" class="form-control" name="dataentrega" disabled value="<?=$compra->getData_entrega()?>">
</div>

<div class="form-group">
    <label>Frete:</label>
    <input type="text" class="form-control" name="frete" disabled value="<?=$compra->getFrete()?>">
</div>

<div class="form-group">
    <label>Desconto:</label>
    <input type="text" class="form-control" name="desconto" disabled value="<?=$compra->getDesconto()?>">
</div>

<div class="form-group">
    <label>Valor total:</label>
    <input type="text" class="form-control" name="valortotal" disabled value="<?=$compra->getValor_total()?>">
</div>

<div class="form-group">
    <label>Status:</label>
    <input type="text" class="form-control" name="status" disabled value="<?=$compra->getStatus()?>">
</div>

<div class="form-group">
    <label>Usuario ID:</label>
    <input type="text" class="form-control" name="usuarioid" disabled value="<?=$compra->getCompra_id_usuario()?>">
</div>

<div class="form-group">
    <label>Endereço ID:</label>
    <input type="number" class="form-control" name="enderecoid" disabled value="<?=$compra->getCompra_id_endereco()?>">
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
