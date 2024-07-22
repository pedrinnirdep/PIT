<?php
 include("inc/header.php"); 
 $valorinicial = 0;
 $frete = 0;

if(!isset($_SESSION['carrinho']['produto']))
{
	$_SESSION['carrinho']['produto'] = array();
}


if($tamCarrinho == 0)
{
	$isable = "disabled";
}
else
{
	$isable = "enabled";
}

$clientId="AVRSA3whlm_ZOSDiO8KdwMQqozLVrDuTLnbLWdlKFjMDa1G8dwNMz_pBgX4CLWFITgQN19twjUiZIgBz";
$moeda="currency=BRL";

?>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-main bg p-3">
	<div class="container">
		
		<div class="row">		
			<div class="col-md-8">
				<div class="card">
					<table class="table table-hover table-responsive-md shopping-cart-wrap">
						<thead class="text-muted">
							<tr>
							  <th scope="col" class="text-dark">Produtos</th>
							  <th scope="col" class="text-dark" width="150">Quantidade</th>
							  <th scope="col" class="text-dark" width="120">Preço</th>
							  <th scope="col" class="text-right text-dark" width="200">Ação</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($_SESSION['carrinho']['produto'] as $key => $item){?>
								<?php $dados = $produtos->listarViewProdutos($key); ?>
								<?php $valorinicial += $dados->produto_valor * $item['quantidade'];?>
								<tr  onClick="goToProduto(<?=$key?>)">
									<td>
										<figure class="media">
											<div class="img-wrap"><img src="<?=$dados->produto_imagem?>" class="img-thumbnail img-sm"></div>
												<figcaption class="media-body">
													<h6 class="title text-truncate"><?=$dados->produto_nome?></h6>
													<dl class="dlist-inline small">
													<dt>Tamanho: </dt>
													<dd><?=$item['tamanho']?></dd>
													</dl>
													<dl class="dlist-inline small">
													<dt>Cor: </dt>
													<dd><?=$item['cor']?></dd>
													</dl>
												</figcaption>
										</figure> 
									</td>
									<td> 
										<input type="number" id="quantidade" class="form-control" value="<?=$item['quantidade']?>" style="width: 50%;" max="10" min="1" disabled>
									</td>
									<td> 
										<div class="price-wrap"> 
											<var class="price text-info" id="valor" value="<?=$dados->produto_valor * $item['quantidade']?>"><?=$dados->produto_valor * $item['quantidade']?>,00</var> 
											<small class="text-muted">(<?=$dados->produto_valor?>)</small> 
										</div> <!-- price-wrap .// -->
									</td>
									<td class="text-right"> 
									<a href="" class="btn btn-outline-danger" onclick="removerItem(<?=$key?>)"> × Remover</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div> <!-- card.// -->
			</div> <!-- col.// -->	
	
			<div class="col-md-4">
				<div class="card p-4">
					<dl class="dlist-align">
					  <dt>Total: </dt>
					  <dd class="text-right" id="valor-total">R$<?=$valorinicial?>,00</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Frete:</dt>
					  
					  <dd class="text-right">R$<?=$frete?>,00</dd>
					</dl>
					<dl class="dlist-align h4">
					  <dt>Total:</dt>
					  <dd class="text-right text-info"><strong>R$<?=$valorinicial+$frete?>,00</strong></dd>
					</dl>
					<hr>
					
					<div class="text-center">
						<div class="form-group">
							<button class="btn btn-basic btn-block bg-white" id="btn-comprar" <?=$isable?>></a>
							<div id='paypal-button-container'></div>
							<?php echo"<script src='https://www.paypal.com/sdk/js?client-id=".$clientId."&".$moeda."'></script>";?>
						</div>
					</div>
				
				</div>
			</div> <!-- col.// -->
		</div>
		
		<div style="margin-top:100px;"></div>
		
		<header class="section-heading heading-line text-center bg">
			<a href="loja.php" class="bg btn text-info title-section text-uppercase"><strong>Clique Aqui para Ver Mais</strong></a>
		</header>
		
		<?php include('inc/owl.php');?>	
		
	</div>	<!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->

<?php include("inc/footer.php"); ?>

<script>
$(document).ready(function(){


});

function goToProduto(id)
{
	window.location = "produto.php?id="+id
}
function removerItem(id)
{
	var dt = "action=remover_carrinho&id="+id;

	$.ajax({
		type: "POST",
		url: "app/ajax/AJAX_Carrinho.php",
		data: dt,
		success: function(data){
			setTimeout(function(){// wait for 5 secs(2)
				location.reload(); // then reload the page.(3)
			}, 1); 
		}
	});
}

</script>

<?php
//window.location.href = 'success.php';

$new = str_replace(",", ".", $valorinicial+$frete);

    echo"<script>
        paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
            purchase_units: [{
                amount: {
                value: '".$new."'
                }
            }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
            alert('Transação Completa por ' + details.payer.name.given_name);window.location.href = 'http://localhost/rainbowshell_dev/index.php?limpaCarrinho=1';
            
            // Call your server to save the transaction
            return fetch('PayPal.php', {
                method: 'post',
                mode: 'same-origin',
                credentials: 'same-origin',
                
                headers: {'content-type': 'application/json'},
                
                body: JSON.stringify({
                    orderID: data.orderID,
                    orderID: data.orderID, 
                    time: details.create_time, 
                    status: details.status, 
                    nom: details.payer.name.given_name, 
                    prenom: details.payer.name.surname, 
                    pays: details.payer.address.country_code, 
                    valeur:details.purchase_units[0].amount.value
                })
                
            });
            });
        }
        }).render('#paypal-button-container');
        
    </script>";

?>