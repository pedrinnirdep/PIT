<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: ENDEREÇO</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Alterar</h2>

    <form action="" method="post">

<div class="form-group">
    <label>Cep:</label>
    <input type="text" class="form-control" name="cep" required value="">
</div>

<div class="form-group">
    <label>Logradouro:</label>
    <input type="text" class="form-control" name="logradouro" required value="">
</div>

<div class="form-group">
    <label>Número:</label>
    <input type="number" class="form-control" name="numero" required value="">
</div>

<div class="form-group">
    <label>Bairro:</label>
    <input type="text" class="form-control" name="bairro" required value="">
</div>

<div class="form-group">
    <label>Cidade:</label>
    <input type="text" class="form-control" name="cidade" required value="">
</div>

<div class="form-group">
    <label>Estado:</label>
    <input type="text" class="form-control" name="estado" required value="">
</div>

<div class="form-group">
    <label>Complemento:</label>
    <input type="text" class="form-control" name="complemento"  value="">
</div>

<div class="form-group">
            <label>Usuario:</label>

            <select name="endereco_id_usuario" class="form-control">

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
