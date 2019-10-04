<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: TIPO</h1>
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

<form>

    <div class="form-group">
        <label>Id:</label>
        <input type="text" class="form-control" name="id_tipo" disabled value="<?=$tipo->getId_tipo()?>">
    </div>
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" class="form-control" name="nome" disabled value="<?=$tipo->getNome()?>">
    </div>

</form>

</html>
