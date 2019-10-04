<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
    <a class="btn btn-primary" href="?classe=Produto&acao=create" style="float: right">Nova</a>
		<h1 class="mt-4">Painel de Controle: PRODUTO</h1>
  <table class="table">
    <thead>
    <tr>
        <th>ID: </th>
        <th>Nome: </th>
        <th>Valor: </th>
        <th>Ação: </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($produtos as $produto){ ?>
        <tr title="<?=$produto->id_produto?>">
            <td><?=$produto->id_produto?></td>
            <td><?=$produto->nome?></td>
            <td>R$<?=$produto->valor?></td>
            <td>
                
                <a class="btn btn-primary" href="?classe=Produto&acao=read&id_produto=<?=$produto->id_produto?>">Ver</a>

                <a class="btn btn-info" href="?classe=Produto&acao=update&id_produto=<?=$produto->id_produto?>">Alterar</a>

                <a class="btn btn-danger" href="?classe=Produto&acao=delete&id_produto=<?=$produto->id_produto?>">Excluir</a>

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