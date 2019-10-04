<?php include("inc/header.php"); 

if(isset($_GET["busca"]) && $_GET["busca"] != "")
{
	$dados = $produtos->produtoBusca($_GET["busca"]);
}
else
{
	$dados = $produtos->listarNovos(16);
}

?>


	  <!-- ========================= SECTION CONTENT ========================= -->

<section class="section-request bg p-4">
	<div class="container">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-md-3-24"> <strong>Filtrar Por:</strong> </div> <!-- col.// -->
				<div class="col-md-21-24"> 
					<ul class="list-inline">
					<li class="list-inline-item float-right">
						<div class="form-inline">
							<label class="mr-2">Preço</label>
							<input class="form-control form-control-sm" placeholder="Min" type="number">
								<span class="px-2"> - </span>
							<input class="form-control form-control-sm" placeholder="Max" type="number">
							<button type="submit" class="btn btn-info btn-sm ml-2"><i class="fa fa-search"></i> Buscar</button>
						</div>
					</li>
					</ul>
				</div> <!-- col.// -->
			</div> <!-- row.// -->
		</div> <!-- card-body .// -->
	</div> <!-- card.// -->
	<div class="row">
		<?php if(count($dados) > 0) : ?>	
			<?php foreach($dados as $produto) : ?>
				<?php $id = $produto["id_produto"]; ?>
				
					<div class="col-md-3 mt-3" onclick="location.href='produto.php?id=<?=$id?>';">
						<figure class="card card-product">
							<div class="img-wrap"> <img src="<?=$produto["imagem"]?>"></div>
							<figcaption class="info-wrap">
								<a href="#" class="title"><?= $produto["nome"]?></a>
								<div class="price-wrap">
									<span class="price-new">R$<?=$produto["valor"]?></span>
									<del class="price-old"></del>
								</div> <!-- price-wrap.// -->
							</figcaption>
						</figure> <!-- card // -->
					</div>
				
			<?php endforeach; ?>	
		<?php else: ?>
		<div class="col-md-3 mt-3">
		</div>
		<div class="col-md-6 mt-6 mt-3">
			<figure class="card card-product">
				<div class="img-wrap"> <img src="img/default.png"></div>
				<figcaption class="info-wrap">
					<h4>Desculpe, não há produtos com o nome que você buscou!</h4>
					<div class="price-wrap">
						<span class="price-new">:(</span>
						<del class="price-old"></del>
					</div> <!-- price-wrap.// -->
				</figcaption>
			</figure> <!-- card // -->
		</div>
		<div class="col-md-3 mt-3">
		</div>
		<?php endif; ?>
	  
</section>
	  
		
	<?php include("inc/footer.php"); ?>

<script>
	$(document).ready(function(){
		
	});
</script>