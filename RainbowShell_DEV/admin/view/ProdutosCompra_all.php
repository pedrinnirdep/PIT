<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
    <a class="btn btn-primary" href="?classe=ProdutosCompra&acao=create" style="float: right">Nova</a>
		<h1 class="mt-4">Painel de Controle: ProdutosCompra</h1>
  <table class="table">
    <thead>
    <tr>
        <th>Usuario: </th>
        <th>Quantidade: </th>
        <th>ID Produto: </th>
        <th>ID Compra: </th>
        <th>Ação: </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($produtoscompras as $produtoscompra){ ?>
        <tr title="<?=$produtoscompra->id_produtos_compra?>">
            <td><?=$produtoscompra->id_produtos_compra?></td>
            <td><?=$produtoscompra->quantidade?></td>
            <td><?=$produtoscompra->produtos_compra_id_produto?></td>
            <td><?=$produtoscompra->produtos_compra_id_compra?></td>
            <td>
              
            <a class="btn btn-primary" href="?classe=ProdutosCompra&acao=read&id_produtos_compra=<?=$produtoscompra->id_produtos_compra?>">Ver</a>

            <a class="btn btn-info" href="?classe=ProdutosCompra&acao=update&id_produtos_compra=<?=$produtoscompra->id_produtos_compra?>">Alterar</a>

            <a class="btn btn-danger" href="?classe=ProdutosCompra&acao=delete&id_produtos_compra=<?=$produtoscompra->id_produtos_compra?>">Excluir</a>

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