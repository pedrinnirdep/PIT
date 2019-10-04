<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: TIPO</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Alterar</h2>

<form action="" method="post">

    <div class="form-group">
        <label>Nome:</label>
        <input type="text" class="form-control" name="nome" required value="<?=$usuario->getNome()?>">
    </div>
    <div class="form-group">
        <label>Sobrenome:</label>
        <input type="text" class="form-control" name="sobrenome" required value="<?=$usuario->getSobrenome()?>">
    </div>
    <div class="form-group">
        <label>CPF:</label>
        <input type="text" class="form-control" name="cpf" value="<?=$usuario->getCpf()?>">
    </div>
    <div class="form-group">
        <label>Telefone:</label>
        <input type="text" class="form-control" name="telefone" value="<?=$usuario->getTelefone()?>">
    </div>
    <div class="form-group">
        <label>Imagem:</label>
        <input type="text" class="form-control" name="imagem" value="<?=$usuario->getImagem()?>">
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="text" class="form-control" name="email" required value="<?=$usuario->getEmail()?>">
    </div>
    <div class="form-group">
        <label>Senha:</label>
        <input type="password" class="form-control" name="senha" readonly value="<?=$usuario->getSenha()?>">
    </div>
    <div class="form-group">
        <label>Tipo:</label>
        <input type="text" class="form-control" name="tipo" required value="<?=$usuario->getTipo()?>">
    </div>

    <button class="btn btn-info" type="submit">Alterar</button>

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
