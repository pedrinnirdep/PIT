<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
    <a class="btn btn-primary" href="?classe=Estampa&acao=create" style="float: right">Nova</a>
		<h1 class="mt-4">Painel de Controle: ESTAMPA</h1>
  <table class="table">
    <thead>
    <tr>
        <th>ID: </th>
        <th>Nome: </th>
        <th>Comissao: </th>
        <th>Tag: </th>
        <th>Aprovação: </th>
        <th>Ação: </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($estampas as $estampa){ ?>
        <tr title="<?=$estampa->id_estampa?>">
            <td><?=$estampa->id_estampa?></td>
            <td><?=$estampa->nome?></td>
            <td><?=$estampa->comissao?></td>
            <td><?=$estampa->tag?></td>
            <td><?=$estampa->aprovacao?></td>
            <td>
              
            <a class="btn btn-primary" href="?classe=Estampa&acao=read&id_estampa=<?=$estampa->id_estampa?>">Ver</a>

            <a class="btn btn-info" href="?classe=Estampa&acao=update&id_estampa=<?=$estampa->id_estampa?>">Alterar</a>

            <a class="btn btn-danger" href="?classe=Estampa&acao=delete&id_estampa=<?=$estampa->id_estampa?>">Excluir</a>

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