<?php include("inc/header.php");?>
<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg p-3">
	<?php include("inc/carousel.php");?>
<!-- ========================= DIV CONTENT ========================= -->
	<div class="section-request bg pt-3">
		<div class="container">
		
			<header class="section-heading heading-line">
				<h4 class="title-section bg text-uppercase">Novos Itens</h4>
			</header>
		
			<div class="row-sm">
			<?php if(count($produtos->listarNovos(8)) > 0) : ?>	
				<?php foreach($produtos->listarNovos(8) as $produto) : ?>	
					<?php $id = $produto["id_produto"]; ?>
				<div class="col-md-3" onclick="location.href='produto.php?id=<?=$id?>';" style="cursor: pointer;">
					<figure class="card card-product">
						<div class="img-wrap"> 
						<img src="<?=$produto["imagem"]?>"></div>
						<figcaption class="info-wrap">
							<h6 class="title text-dark"><?= $produto["nome"]?></h6>					
							<div class="price-wrap">
								<h3><span class="price-new text-info">R$<?=$produto["valor"]?></span></h3>
							</div> <!-- price-wrap.// -->	
											
						</figcaption>
					</figure> <!-- card // -->
				</div> <!-- col // -->	
				<?php endforeach; ?>	
			<?php else: ?>
				<!-- caso não tiver nenhum produto -->
			<?php endif; ?>
		
			</div> <!-- row.// -->	
		
			<header class="section-heading heading-line text-center">
				<a href="loja.php" class="bg btn text-info title-section text-uppercase"><strong>Clique Aqui para Ver Mais</strong></a>
			</header>

			<?php include('inc/owl.php');?>	
			
		</div><!-- container // -->
	</div>	
<!-- ========================= DIV CONTENT END// ========================= -->

</section>
<!-- ========================= SECTION MAIN END// ========================= -->

<?php include("inc/footer.php"); ?>

