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
        <label>Cor:</label>
        <input type="text" placeholder="Favor inserir a cor" class="form-control" name="cor"   value=""   >
    </div>
    <div class="form-group">
        <label>Tamanho:</label>
        <input type="text" placeholder="Favor inserir o tamanho" class="form-control" name="tamanho"   value="" >
    </div>
    <div class="form-group">
        <label>Material:</label>
        <input  class="form-control" placeholder="Favor inserir material" type="text" name="material"   value="" >
    </div>
    <div class="form-group">
        <label>Capacidade:</label>
        <input type="text" class="form-control" placeholder="Favor inserir o capacidade" name="capacidade"   value="" >
    </div>
    <div class="form-group">
        <label>Volume:</label>
        <input type="number" class="form-control" placeholder="Favor inserir volume" name="volume"   value="" >
    </div>
    <div class="form-group">
        <label>Quantidade:</label>
        <input type="number" class="form-control" placeholder="Favor inserir quantidade" name="quantidade"   value="" required>
    </div>
    <div class="form-group">
        <label>Preço de compra:</label>
        <input type="number" class="form-control" placeholder="Favor inserir preço de compra" name="preco_compra"   value="" required>
    </div>
    <div class="form-group">
            <label>Tipo:</label>

            <select name="estoque_id_tipo" class="form-control">

                <option value="">-- escolha o tipo --</option>

                <?php foreach ($tipos as $tipo){
                    
                ?>

                    <option   value="<?=$tipo->id_tipo?>"><?=$tipo->nome?></option>

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
