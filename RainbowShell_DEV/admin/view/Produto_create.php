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
    <input type="text" class="form-control" required name="datamod" required value="">
</div>

<div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" required name="nome" required value="">
</div>

<div class="form-group">
    <label>Descrição:</label>
    <input type="text" class="form-control" required name="descricao" required value="">
</div>

<div class="form-group">
    <label>Valor:</label>
    <input type="number" class="form-control" required name="valor" required value="">
</div>

<div class="form-group">
    <label>Imagem:</label>
    <input type="text" class="form-control" name="imagem" required value="">
</div>

<div class="form-group">
            <label>Estampa:</label>

            <select name="produto_id_estampa" class="form-control">

                <option value="">-- escolha a Estampa --</option>

                <?php foreach ($estampas as $estampa){
                    
                ?>

                    <option   value="<?=$estampa->id_estampa?>"><?=$estampa->nome?></option>

                <?php } ?>

            </select>

</div>

<div class="form-group">
            <label>Tipo:</label>

            <select name="produto_id_tipo" class="form-control">

                <option value="">-- escolha o Tipo --</option>

                <?php foreach ($tipos as $tipo){
                    
                ?>

                    <option   value="<?=$tipo->id_tipo?>"><?=$tipo->nome?></option>

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
