<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: ENDEREÇO</h1>
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

    <div class="form-group">
    <label>Cep:</label>
    <input type="number" class="form-control" name="nome" disabled value="<?=$endereco->getCep()?>">
</div>

<div class="form-group">
    <label>Logradouro:</label>
    <input type="text" class="form-control" name="logradouro" disabled value="<?=$endereco->getLogradouro()?>">
</div>

<div class="form-group">
    <label>Numero:</label>
    <input type="number" class="form-control" name="numero" disabled value="<?=$endereco->getNumero()?>">
</div>

<div class="form-group">
    <label>Bairro:</label>
    <input type="text" class="form-control" name="bairro" disabled value="<?=$endereco->getBairro()?>">
</div>

<div class="form-group">
    <label>Cidade:</label>
    <input type="text" class="form-control" name="cidade" disabled value="<?=$endereco->getCidade()?>">
</div>

<div class="form-group">
    <label>Estado:</label>
    <input type="text" class="form-control" name="estado" disabled value="<?=$endereco->getEstado()?>">
</div>

<div class="form-group">
    <label>Complemento:</label>
    <input type="text" class="form-control" name="complemento" disabled value="<?=$endereco->getComplemento()?>">
</div>

<div class="form-group">
    <label>Usuario ID:</label>
    <input type="number" class="form-control" name="usuarioid" disabled value="<?=$endereco->getEndereco_id_usuario()?>">
</div>

</body>


</html>
