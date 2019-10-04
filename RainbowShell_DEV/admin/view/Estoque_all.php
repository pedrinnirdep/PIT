<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
    <a class="btn btn-primary" href="?classe=Estoque&acao=create" style="float: right">Nova</a>
		<h1 class="mt-4">Painel de Controle: USUÁRIO</h1>
  <table class="table">
    <thead>
    <tr>
        <th>Usuario: </th>
        <th>Cor:</th>
        <th>Tamanho:</th>
        <th>Material:</th>
        <th>Preço compra:</th>
        <th>Ação: </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($estoques as $estoque){ ?>
        <tr title="<?=$estoque->id_estoque?>">
            <td><?=$estoque->id_estoque?></td>
            <td><?=$estoque->cor?></td>
            <td><?=$estoque->tamanho?></td>
            <td><?=$estoque->material?></td>
            <td><?=$estoque->preco_compra?></td>
            <td>
              
            <a class="btn btn-primary" href="?classe=Estoque&acao=read&id_estoque=<?=$estoque->id_estoque?>">Ver</a>

            <a class="btn btn-info" href="?classe=Estoque&acao=update&id_estoque=<?=$estoque->id_estoque?>">Alterar</a>

            <a class="btn btn-danger" href="?classe=Estoque&acao=delete&id_estoque=<?=$estoque->id_estoque?>">Excluir</a>

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