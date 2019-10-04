<?php include("inc/header.php");


?>

<div class="container-fluid">

<div class="container">

<h1 class="mt-4">Relatorio</h1><br>
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <h4><a class="navbar-brand" href="#">Filtro: </a></h4>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <h5><a class="nav-link filtro" href="?classe=Relatorio&acao=Relatorio&filtro=0" id="var-tipo">Tipo</a></h5>
      </li>
      <li class="nav-item">
        <h5><a class="nav-link filtro" href="?classe=Relatorio&acao=Relatorio&filtro=3" id="var-estampa">Estampa</a></h5>
      </li>
      <li class="nav-item">
        <h5><a class="nav-link filtro" href="?classe=Relatorio&acao=Relatorio&filtro=2" id="var-autor">Autor</a></h5>
      </li>
      <li class="nav-item">
        <h5><a class="nav-link filtro" href="?classe=Relatorio&acao=Relatorio&filtro=1" id="var-cidade">Cidade</a></h5>
      </li>
      <li class="nav-item">
        <h5><a class="nav-link filtro" href="?classe=Relatorio&acao=Relatorio&filtro=4" id="var-produto">Produto</a></h5>
      </li>
    </ul>
    <input type="hidden" value="0" id="p-filtro">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <table class="table">
  
    <thead>
    <tr>
        <th>Filtro</th>
        <th>Quantidade</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach($relatorios as $relatorio) : ?>
      <tr title="">
        <td><?= $relatorio->filtro ?></td>
        <td><?= $relatorio->quantidade ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>

</table>

<a class="btn btn-light float-md-right" target="_blank" href="?classe=Relatorio&acao=RelatorioPDF&filtro=<?=$_GET['filtro']?>">Imprimir</a>

<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
// $(document).ready(function(){

// });

  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
    
</script>	

</body>

</html>