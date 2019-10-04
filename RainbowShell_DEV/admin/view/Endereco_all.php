<?php include("inc/header.php")?>

      <div class="container-fluid">

      <div class="container">
    <a class="btn btn-primary" href="?classe=Endereco&acao=create" style="float: right">Nova</a>
		<h1 class="mt-4">Painel de Controle: USUÁRIO</h1>
  <table class="table">
    <thead>
    <tr>
        <th>ID: </th>
        <th>Estado: </th>
        <th>Cidade: </th>
        <th>Bairro: </th>
        <th>Logradouro: </th>
        <th>Ação: </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($enderecos as $endereco){ ?>
        <tr title="<?=$endereco->id_endereco?>">
            <td><?=$endereco->id_endereco?></td>
            <td><?=$endereco->estado?></td>
            <td><?=$endereco->cidade?></td>
            <td><?=$endereco->bairro?></td>
            <td><?=$endereco->logradouro?></td>
            <td>
              
            <a class="btn btn-primary" href="?classe=Endereco&acao=read&id_endereco=<?=$endereco->id_endereco?>">Ver</a>

            <a class="btn btn-info" href="?classe=Endereco&acao=update&id_endereco=<?=$endereco->id_endereco?>">Alterar</a>

            <a class="btn btn-danger" href="?classe=Endereco&acao=delete&id_endereco=<?=$endereco->id_endereco?>">Excluir</a>

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