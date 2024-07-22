<?php

//se tiver uma mensagem, mostra e seguida apaga
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset ($_SESSION['msg']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- jQuery -->
  <script src="scripts/js/jquery-3.7.1.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

  <!-- Bootstrap4 files-->
  <script src="scripts/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <link href="scripts/css/bootstrap.css?v=1.0" rel="stylesheet" type="text/css"/>

  <!-- Font awesome 5 -->
  <link href="scripts/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

  <!-- plugin: fancybox  -->
  <script src="scripts/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
  <link href="scripts/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

  <!-- plugin: owl carousel  -->
  <link href="scripts/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="scripts/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  <script src="scripts/plugins/owlcarousel/owl.carousel.min.js"></script>

  <!-- custom style -->
  <link href="scripts/css/ui.css?v=1.0" rel="stylesheet" type="text/css"/>
  <link href="scripts/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

  <!-- custom javascript -->
  <script src="scripts/js/script.js" type="text/javascript"></script>

  <title>Rainbow Shell Admin</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Rainbow Shell Admin </div>
      <div class="list-group list-group-flush">
        <a href="index.php?classe=Usuario&acao=all" class="list-group-item list-group-item-action bg-light-active">Usuário</a>
        <a href="index.php?classe=Produto&acao=all" class="list-group-item list-group-item-action bg-light">Produto</a>
        <a href="index.php?classe=Tipo&acao=all" class="list-group-item list-group-item-action bg-light">Tipo</a>
        <a href="index.php?classe=Endereco&acao=all" class="list-group-item list-group-item-action bg-light">Endereço</a>
        <a href="index.php?classe=Estampa&acao=all" class="list-group-item list-group-item-action bg-light">Estampa</a>
        <a href="index.php?classe=Compra&acao=all" class="list-group-item list-group-item-action bg-light">Compra</a>
        <a href="index.php?classe=ProdutosCompra&acao=all" class="list-group-item list-group-item-action bg-light">Produtos Compra</a>
        <a href="index.php?classe=Estoque&acao=all" class="list-group-item list-group-item-action bg-light">Estoque</a>
        <!-- <a href="index.php?classe=Relatorio&acao=RelatorioData&filtro=0&datainicio=2019-09-03&datafim=2019-10-03" class="list-group-item list-group-item-action bg-light">Relatórios</a> -->
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-info" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=$_SESSION['usuario']->nome?>
              </a>
            
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Alterar dados</a>
                <a class="dropdown-item" href="#">Novo Adm</a>
                <div class="dropdown-divider"></div>
              </div>
              <a class="dropdown-item nav-link" href="../">Sair</a>
            </li>
          </ul>
        </div>
      </nav>