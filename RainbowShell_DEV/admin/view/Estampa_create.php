<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: ESTAMPA</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Cadastrar</h2>

    <form action="" method="post">

<div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" name="nome" required value="">
</div>

<div class="form-group">
    <label>Descricao:</label>
    <input type="text" class="form-control" name="descricao" required value="">
</div>

<div class="form-group">
    <label>Imagem:</label>
    <input type="text" class="form-control" name="imagem" required value="">
</div>

<div class="form-group">
    <label>Comissão:</label>
    <input type="text" class="form-control" name="comissao" required value="">
</div>

<div class="form-group">
    <label>Tag:</label>
    <input type="text" class="form-control" name="tag" required value="">
</div>

<div class="form-group">
    <label>Aprovacao:</label>
    <input type="number" class="form-control" name="aprovacao" required value="">
</div>

<div class="form-group">
            <label>Usuario:</label>

            <select name="estampa_id_usuario" class="form-control">

                <option value="">-- escolha o usuario --</option>

                <?php foreach ($usuarios as $usuario){
                    
                ?>

                    <option   value="<?=$usuario->id_usuario?>"><?=$usuario->nome?></option>

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
