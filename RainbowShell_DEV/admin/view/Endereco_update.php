<?php include("inc/header.php")?>

      <div class="container-fluid">
        
        
	
		<div class="container">
		<h1 class="mt-4">Painel de Controle: TIPO</h1>
  <table class="table">
    <thead>
    </thead>

    <h2>Alterar</h2>

    <form action="" method="post">

<div class="form-group">
    <label>Cep:</label>
    <input type="text" class="form-control" name="cep"  value="<?=$endereco->getCep()?>">
</div>

<div class="form-group">
    <label>Logradouro:</label>
    <input type="text" class="form-control" name="logradouro"  value="<?=$endereco->getLogradouro()?>">
</div>

<div class="form-group">
    <label>Número:</label>
    <input type="number" class="form-control" name="numero"  value="<?=$endereco->getNumero()?>">
</div>

<div class="form-group">
    <label>Bairro:</label>
    <input type="text" class="form-control" name="bairro"  value="<?=$endereco->getBairro()?>">
</div>

<div class="form-group">
    <label>Cidade:</label>
    <input type="text" class="form-control" name="cidade"  value="<?=$endereco->getCidade()?>">
</div>

<div class="form-group">
    <label>Estado:</label>
    <input type="text" class="form-control" name="estado"  value="<?=$endereco->getEstado()?>">
</div>

<div class="form-group">
    <label>Complemento:</label>
    <input type="text" class="form-control" name="complemento"  value="<?=$endereco->getComplemento()?>">
</div>

<div class="form-group">
            <label>Usuario:</label>

            <select name="endereco_id_usuario" class="form-control">

                <option value="">-- escolha o usuario --</option>

                <?php foreach ($usuarios as $usuario){

                    $selected  = $usuario->id_usuario==$endereco->getEndereco_id_usuario() ? "selected" : "";
                    
                ?>

                    <option <?=$selected?>   value="<?=$usuario->id_usuario?>"><?=$usuario->nome?></option>

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

