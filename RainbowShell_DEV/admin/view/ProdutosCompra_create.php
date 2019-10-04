<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: TIPO</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Cadastro</h2>

<form action="" method="post">

    <div class="form-group">
        <label>Quantidade:</label>
        <input type="number" class="form-control" required name="quantidade" value="">
    </div>
    <div class="form-group">
            <label>Produto:</label>

            <select name="produtos_compra_id_produto" class="form-control">

                <option value="">-- escolha o produto --</option>

                <?php foreach ($produtos as $produto){
                    
                ?>

                    <option   value="<?=$produto->id_produto?>"><?=$produto->nome?></option>

                <?php } ?>

            </select>

    </div>
    <div class="form-group">
            <label>Compra:</label>

            <select name="produtos_compra_id_compra" class="form-control">

                <option value="">-- escolha a compra --</option>

                <?php foreach ($compras as $compra){
                    
                ?>

                    <option   value="<?=$compra->id_compra?>"><?=$compra->id_compra?></option>

                <?php } ?>

            </select>

    </div>

    <button class="btn btn-info" type="submit">Salvar</button>

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
