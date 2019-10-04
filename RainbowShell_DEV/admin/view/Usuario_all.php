<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
    <a class="btn btn-primary" href="?classe=Usuario&acao=create" style="float: right">Nova</a>
		<h1 class="mt-4">Painel de Controle: USUÁRIO</h1>
  <table class="table">
    <thead>
    <tr>
        <th>Usuario: </th>
        <th>Nome: </th>
        <th>Telefone: </th>
        <th>Cpf: </th>
        <th>E-mail: </th>
        <th>Ação: </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($usuarios as $usuario){ ?>
        <tr title="<?=$usuario->id_usuario?>">
            <td><?=$usuario->id_usuario?></td>
            <td><?=$usuario->nome?> <?=$usuario->sobrenome?></td>
            <td><?=$usuario->telefone?></td>
            <td><?=$usuario->cpf?></td>
            <td><?=$usuario->email?></td>
            <td>
              
            <a class="btn btn-primary" href="?classe=Usuario&acao=read&id_usuario=<?=$usuario->id_usuario?>">Ver</a>

            <a class="btn btn-info" href="?classe=Usuario&acao=update&id_usuario=<?=$usuario->id_usuario?>">Alterar</a>

            <a class="btn btn-danger" href="?classe=Usuario&acao=delete&id_usuario=<?=$usuario->id_usuario?>">Excluir</a>

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