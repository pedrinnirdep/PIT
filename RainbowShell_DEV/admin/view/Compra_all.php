<?php include("inc/header.php")?>

      <div class="container-fluid">

      <div class="container">
    <a class="btn btn-primary" href="?classe=Compra&acao=create" style="float: right">Nova</a>
		<h1 class="mt-4">Painel de Controle: USUÁRIO</h1>
  <table class="table">
    <thead>
    <tr>
        <th>ID: </th>
        <th>Data Compra:</th>
        <th>Data Entrega:</th>
        <th>Frete:</th>
        <th>Total:</th>
        <th>Status:</th>
        <th>Ação: </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($compra as $compra){ ?>
        <tr title="<?=$compra->id_compra?>">
            <td><?=$compra->id_compra?></td>
            <td><?=$compra->data_compra?></td>
            <td><?=$compra->data_entrega?></td>
            <td><?=$compra->frete?></td>
            <td><?=$compra->valor_total?></td>
            <td><?=$compra->status?></td>
            <td>
              
            <a class="btn btn-primary" href="?classe=Compra&acao=read&id_compra=<?=$compra->id_compra?>">Ver</a>

            <a class="btn btn-info" href="?classe=Compra&acao=update&id_compra=<?=$compra->id_compra?>">Alterar</a>

            <a class="btn btn-danger" href="?classe=Compra&acao=delete&id_compra=<?=$compra->id_compra?>">Excluir</a>

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