<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: USUÁRIO</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Cadastro</h2>

<form action="" method="post">

    <div class="form-group">
        <label>Nome:</label>
        <input type="text" class="form-control" required name="nome" value="">
    </div>
    <div class="form-group">
        <label>Sobrenome:</label>
        <input type="text" class="form-control" required name="sobrenome" value="">
    </div>
    <div class="form-group">
        <label>CPF:</label>
        <input type="text" class="form-control" name="cpf" value="">
    </div>
    <div class="form-group">
        <label>Telefone:</label>
        <input type="text" class="form-control" name="telefone" value="">
    </div>
    <div class="form-group">
        <label>Imagem:</label>
        <input type="text" class="form-control" name="imagem" value="">
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="text" class="form-control" required name="email" value="">
    </div>
    <div class="form-group">
        <label>Senha:</label>
        <input type="password" class="form-control" required name="senha" value="">
    </div>
    <div class="form-group">
        <label>Tipo:</label>
        <input type="text" class="form-control" required name="tipo" value="">
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


</html>
