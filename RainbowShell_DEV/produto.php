<?php include("inc/header.php"); 
if(!isset($_GET['id']))
{
	echo 
	'
		<script type="text/javascript">
			window.location = "index.php"
		</script>
	';
}


$dados = array();
$dados = $produtos->listarViewProdutos($_GET['id']);

?>
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg p-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<main class="card">
					<div class="row no-gutters">
						<aside class="col-sm-6 border-right">
							<article class="gallery-wrap"> 
								<div class="img-big-wrap">
								<div> <a href="<?=$dados->produto_imagem?>" data-fancybox=""><img src="<?=$dados->produto_imagem?>"></a></div>
								</div> <!-- slider-product.// -->
							</article> <!-- gallery-wrap .end// -->
						</aside>
						<aside class="col-md-6">
							<article class="card-body">
							<!-- short-info-wrap -->
								<h2 class="title mb-3"><?=$dados->produto_nome?></h2>

								<div class="mb-3"> 
									<var class="price h1 text-info"> 
										<span class="currency">R$</span><span class="num"><?=$dados->produto_valor?></span>
									</var> 
									<span></span> 
								</div> <!-- price-detail-wrap .// -->
								
								<p class='text-success text-center' id='alertas'></p>
								<dl>
								  <dt>Descrição</dt>
								  <dd><p><?=$dados->produto_descricao?></p></dd>
								</dl>
								
								<dl class="row">
									<dt class="col-md-3">Elaborada Por</dt>
									<dd class="col-md-9"><?=$dados->estampa_autor_nome?> <?=$dados->estampa_autor_sobrenome?></dd>

									<dt class="col-md-3">Entrega</dt>
									<dd class="col-md-9">Minas Gerais</dd>
								</dl>
								
									<div class="row">
										<div class="col-md-4">
											<input type="hidden" id="idProduto" name="idProduto" value="<?=$_GET['id']?>">
											<dl class="dlist-inline">
											  <dt>Quantidade: </dt>
											  <dd> 
												<select class="form-control form-control-md" style="width:70px;" id="quantidade">
													<option> 1 </option>
													<option> 2 </option>
													<option> 3 </option>
													<option> 4 </option>
												</select>
											  </dd>
											</dl>  <!-- item-property .// -->											
										</div> <!-- col.// -->
										<div class="col-md-4">
											<dl class="dlist-inline">
												<dt>Tamanho: </dt>
												<dd>
													<select class="form-control form-control-md" style="width:70px;" id="tamanho">
														<option> P </option>
														<option> M </option>
														<option> G </option>
													</select>
												</dd>
											</dl>  <!-- item-property .// -->												
										</div> <!-- col.// -->
										<div class="col-md-4">
											<dl class="dlist-inline">
											  <dt>Cor: </dt>
											  <dd> 
												<select class="form-control form-control-md" style="width:100px;" id="cor">
													<option> Branca </option>
													<option> Preta </option>
												</select>
											  </dd>
											</dl>  <!-- item-property .// -->		
										</div>
								</div> <!-- row.// -->
								<hr>
								<div class="form-group">
								<a id="btn-addCarrinho" class="btn btn-outline-info"><i class="fa fa-shopping-cart"></i>Adicionar no Carrinho</a>
								</div>
							<!-- short-info-wrap .// -->
							</article> <!-- card-body.// -->
						</aside> <!-- col.// -->
					</div> <!-- row.// -->
				</main> <!-- card.// -->			
			</div> <!-- col // -->			
		</div> <!-- row.// -->
		
		
		<div style="margin-top:20px;"></div>
		
		<header class="section-heading heading-line text-center bg">
			<a href="loja.php" class="bg btn text-info title-section text-uppercase"><strong>Clique Aqui para Ver Mais</strong></a>
		</header>

		<?php include('inc/owl.php');?>		
		
	</div><!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<?php include("inc/footer.php"); ?>
<script>

	$(document).ready(function(){

		$("#btn-addCarrinho").click(function(){

			var e = document.getElementById("cor");
			var cor = e.options[e.selectedIndex].text;

			var e = document.getElementById("tamanho");
			var tamanho = e.options[e.selectedIndex].text;

			var e = document.getElementById("quantidade");
			var quantidade = e.options[e.selectedIndex].text;

			var id = $("#idProduto").val();

			if(cor == "" || tamanho == "" || id == "" || quantidade == ""){
				$("#alertas").html("<div class='alert alert-danger'>Nem todos os valores estão preenchidos!</div>");
			} else{

				var dt = "action=adicionar_carrinho&cor="+cor+"&tamanho="+tamanho+"&id="+id+"&quantidade="+quantidade;

				$.ajax({
					type: "POST",
					url: "app/ajax/AJAX_Carrinho.php",
					data: dt,
					success: function(data){
						setTimeout(function(){// wait for 5 secs(2)
							location.reload(); // then reload the page.(3)
						}, 2000); 
					}
				});
			}
		});

	});
</script>