<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: ESTAMPA</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Alterar</h2>

    <form action="" method="post">

<div class="form-group">
    <label>Cor:</label>
    <input type="text" class="form-control" name="cor"  value="<?=$estoque->getCor()?>">
</div>

<div class="form-group">
    <label>Tamanho:</label>
    <input type="text" class="form-control" name="tamanho"  value="<?=$estoque->getTamanho()?>">
</div>

<div class="form-group">
    <label>Material:</label>
    <input type="text" class="form-control" name="material"  value="<?=$estoque->getMaterial()?>">
</div>

<div class="form-group">
    <label>Capacidade:</label>
    <input type="text" class="form-control" name="capacidade"  value="<?=$estoque->getCapacidade()?>">
</div>

<div class="form-group">
    <label>Volume:</label>
    <input type="text" class="form-control" name="volume"  value="<?=$estoque->getVolume()?>">
</div>

<div class="form-group">
    <label>Quantidade:</label>
    <input type="text" class="form-control" name="quantidade"  value="<?=$estoque->getQuantidade()?>">
</div>

<div class="form-group">
    <label>Preco da Compra:</label>
    <input type="text" class="form-control" name="preco_compra"  value="<?=$estoque->getPreco_compra()?>">
</div>
<div class="form-group">
            <label>Tipo:</label>

            <select name="estoque_id_tipo" class="form-control">

                <option value="">-- escolha o tipo --</option>

                <?php foreach ($tipos as $tipo){

                    $selected  = $tipo->id_tipo==$estoque->getEstoque_id_tipo() ? "selected" : "";
                    
                ?>

                    <option <?=$selected?>   value="<?=$tipo->id_tipo?>"><?=$tipo->nome?></option>

                <?php } ?>

            </select>

</div>

<button class="btn btn-success" type="submit">Salvar</button>

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
