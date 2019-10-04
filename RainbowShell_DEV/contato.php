<?php include("inc/header.php"); ?>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg p-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<main class="card">
					<div class="row no-gutters">
						<aside class="col-md-5 border-right">				
							<header class="card-header bg-white">
								<h3 class="card-title mt-2">Entre em Contato Conosco</h3>
								<small class="form-text text-muted">Campos com * são obrigatórios.</small>
							</header>
							
							<form action=""> <!-- FORM -->
							<article class="card-body">
							
								<div class="form-group">
									<label>Nome*</label>
									<input type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Email*</label>
									<input type="email" class="form-control" required>
								</div>
								
								
								<div class="form-group">
									<label>Texto*</label>
									<textarea class="form-control z-depth-1" id="exampleFormControlTextarea1" rows="3" placeholder="Lembre-se de verificar nosso banco de Perguntas Frequêntes antes de enviar." style="resize: none" required></textarea>									
								</div>
								
									
								<div class="form-group float-right">
									<button type="submit" class="btn btn-outline-info"><i class="fa fa-envelope"></i> Enviar  </button>
								</div>
								
							</article> <!-- card-body.// -->
							</form>
						</aside> <!-- col.// -->
						<aside class="col-sm-7">
							<header class="card-header bg-white">
								<h3 class="card-title mt-2">Perguntas Freguêntes</h3>
								<small class="form-text text-muted">Caso alguma dúvida ainda persistir, entre em contato conosco</small>
							</header>
							<article class="card-body">										
								<div id="accordion">
								  <div class="card">
									<div class="card-header">
									  <a class="card-link text-info" data-toggle="collapse" href="#collapseOne">
										Collapsible Group Item #1
									  </a>
									</div>
									<div id="collapseOne" class="collapse show" data-parent="#accordion">
									  <div class="card-body">
										Lorem ipsum..
									  </div>
									</div>
								  </div>

								  <div class="card">
									<div class="card-header">
									  <a class="collapsed card-link text-info" data-toggle="collapse" href="#collapseTwo">
										Collapsible Group Item #2
									  </a>
									</div>
									<div id="collapseTwo" class="collapse" data-parent="#accordion">
									  <div class="card-body">
										Lorem ipsum..
									  </div>
									</div>
								  </div>

								  <div class="card">
									<div class="card-header">
									  <a class="collapsed card-link text-info" data-toggle="collapse" href="#collapseThree">
										Collapsible Group Item #3
									  </a>
									</div>
									<div id="collapseThree" class="collapse" data-parent="#accordion">
									  <div class="card-body">
										Lorem ipsum..
									  </div>
									</div>
								  </div>
								</div> 				
							</article> <!-- card-body.// -->
						</aside> <!-- col.// -->
					</div> <!-- row.// -->
				</main> <!-- card.// -->



		</div> <!-- col // -->

		</div> <!-- row.// -->



	</div><!-- container // -->
</section>

<!-- ========================= FOOTER ========================= -->
<?php include("inc/footer.php"); ?>


</body>
</html>