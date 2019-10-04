<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
        <a class="btn btn-primary" href="?classe=Tipo&acao=create" style="float: right">Nova</a>
		<h1 class="mt-4">Painel de Controle: TIPO</h1>
        
  <table class="table">
    <thead>
    <tr>
        <th>ID: </th>
        <th>TIPO: </th>
        <th>Ação: </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tipos as $tipo){ ?>
        <tr title="<?=$tipo->id_tipo?>">
            <td><?=$tipo->id_tipo?></td>
            <td><?=$tipo->nome?></td>
            <td>
                
                <a class="btn btn-primary" href="?classe=Tipo&acao=read&id_tipo=<?=$tipo->id_tipo?>">Ver</a>

                <a class="btn btn-info" href="?classe=Tipo&acao=update&id_tipo=<?=$tipo->id_tipo?>">Alterar</a>

                <a class="btn btn-danger" href="?classe=Tipo&acao=delete&id_tipo=<?=$tipo->id_tipo?>">Excluir</a>

            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>

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