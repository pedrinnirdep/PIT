<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: PRODUTO</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Alterar</h2>

    <form action="" method="post">
    
<div class="form-group">
    <label>Datamod:</label>
    <input type="text" class="form-control" name="datamod" required value="<?=$produto->getDatamod()?>">
</div>

<div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" name="nome" required value="<?=$produto->getNome()?>">
</div>

<div class="form-group">
    <label>Descrição:</label>
    <input type="text" class="form-control" name="descricao" required value="<?=$produto->getDescricao()?>">
</div>

<div class="form-group">
    <label>Valor:</label>
    <input type="number" class="form-control" name="valor" required value="<?=$produto->getValor()?>">
</div>

<div class="form-group">
    <label>Imagem:</label>
    <input type="text" class="form-control" name="imagem" value="<?=$produto->getImagem()?>">
</div>

<div class="form-group">
            <label>Estampa:</label>

            <select name="produto_id_estampa" class="form-control">

                <option value="">-- escolha a Estampa --</option>

                <?php foreach ($estampas as $estampa){

                        $selected  = $estampa->id_estampa==$produto->getProdutoIdEstampa() ? "selected" : "";

                ?>

                        <option <?=$selected?>   value="<?=$estampa->id_estampa?>"><?=$estampa->nome?></option>

                <?php } ?>

            </select>

</div>

<div class="form-group">
            <label>Tipo:</label>

            <select name="produto_id_tipo" class="form-control">

                <option value="">-- escolha o Tipo --</option>

                <?php foreach ($tipos as $tipo){

                        $selected  = $tipo->id_tipo==$produto->getProdutoIdTipo() ? "selected" : "";

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
