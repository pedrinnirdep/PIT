<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: COMPRA</h1>
  <table class="table">
    <thead>
    </thead>
    
    <h2>Atualizar dados da compra</h2>

<form action="" method="post">

    <div class="form-group">
        <label>Data Compra:</label>
        <input type="text" class="form-control" name="data_compra"  value="<?=$compra->getData_compra()?>">
    </div>

    <div class="form-group">
        <label>Data Entrega:</label>
        <input type="text" class="form-control" name="data_entrega"  value="<?=$compra->getData_entrega()?>">
    </div>
   
    <div class="form-group">
        <label>Frete:</label>
        <input type="text" class="form-control" name="frete"  value="<?=$compra->getFrete()?>">
    </div>

    <div class="form-group">
        <label>Desconto:</label>
        <input type="text" class="form-control" name="desconto"  value="<?=$compra->getDesconto()?>">
    </div>

    <div class="form-group">
        <label>Valor Total:</label>
        <input type="text" class="form-control" name="valor_total"  value="<?=$compra->getValor_total()?>">
    </div>

    <div class="form-group">
        <label>Status:</label>
        <input type="text" class="form-control" name="status"  value="<?=$compra->getStatus()?>">
    </div>

    <div class="form-group">
            <label>Usuario:</label>

            <select name="compra_id_usuario" class="form-control">

                <option value="">-- escolha o usuario --</option>

                <?php foreach ($usuarios as $usuario){

                        $selected  = $usuario->id_usuario==$compra->getCompra_id_usuario() ? "selected" : "";

                ?>

                        <option <?=$selected?>   value="<?=$usuario->id_usuario?>"><?=$usuario->nome?></option>

                <?php } ?>

            </select>

</div>

<div class="form-group">
            <label>Endereço:</label>

            <select name="compra_id_endereco" class="form-control">

                <option value="">-- escolha o endereco --</option>

                <?php foreach ($enderecos as $endereco){

                        $selected  = $endereco->id_endereco==$compra->getCompra_id_endereco() ? "selected" : "";

                ?>

                        <option <?=$selected?>   value="<?=$endereco->id_endereco?>"><?=$endereco->logradouro?>/<?=$endereco->bairro?></option>

                <?php } ?>

            </select>

</div>

    <button class="btn btn-success" type="submit">Salvar</button>

</form>

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

</body>

</html>
