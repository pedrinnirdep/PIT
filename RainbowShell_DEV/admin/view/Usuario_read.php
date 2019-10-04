<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: USUÁRIO</h1>
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
        <label>ID:</label>
        <input type="text" class="form-control" name="id_usuario" disabled value="<?=$usuario->getId_usuario()?>">
    </div>
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" class="form-control" name="nome" disabled value="<?=$usuario->getNome()?>">
    </div>
    <div class="form-group">
        <label>Sobrenome:</label>
        <input type="text" class="form-control" name="sobrenome" disabled value="<?=$usuario->getSobrenome()?>">
    </div>
    <div class="form-group">
        <label>CPF:</label>
        <input type="text" class="form-control" name="cpf" disabled value="<?=$usuario->getCpf()?>">
    </div>
    <div class="form-group">
        <label>Telefone:</label>
        <input type="text" class="form-control" name="telefone" disabled value="<?=$usuario->getTelefone()?>">
    </div>
    <div class="form-group">
        <label>Imagem:</label>
        <input type="text" class="form-control" name="imagem" disabled value="<?=$usuario->getImagem()?>">
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="text" class="form-control" name="email" disabled value="<?=$usuario->getEmail()?>">
    </div>
    <div class="form-group">
        <label>Tipo:</label>
        <input type="text" class="form-control" name="tipo" disabled value="<?=$usuario->getTipo()?>">
    </div>

</body>


</html>
