<?php
require_once 'app/base.php';
if(isset($_SESSION['carrinho']["produto"]))
{
	$tamCarrinho = count($_SESSION['carrinho']["produto"]);
}
else
{
	$_SESSION['carrinho'] = array();
	$tamCarrinho = 0;
}



if(isset($_GET['limpaCarrinho'])){
	$test = $_GET['limpaCarrinho'];

	if($test=='1'){
		$_SESSION['carrinho'] = array();
		$tamCarrinho = 0;
	}
}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title>RainbowShell</title>

<link rel="shortcut icon" type="image/x-icon" href="img/icons/favicon.png">

<!-- Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- jQuery -->
<script src="scripts/js/jquery-2.0.0.min.js" type="text/javascript"></script>
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
</head>

<body class="bg">
	<header class="section-header">
		<div class="header-main bg-white">
			<div class="fixed-top bg-white p-3">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="brand-wrap">
								<a href="index.php" class="text-dark"><img class="logo" src="img/logos/logo.png">
								<h2 class="logo-text">RainbowShell</h2></a>
							</div> <!-- brand-wrap.// -->
						</div>
						
						<div class="col-lg-6">				
							<form action="loja.php?" method="get" class="search-wrap"> <!-- FORM -->
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Buscar" name="busca" value="">
									<div class="input-group-append">
									  <button class="btn btn-info" type="submit">
										<i class="fa fa-search"></i>
									  </button>
									</div>
								</div>
							</form> <!-- search-wrap .end// -->
						</div> <!-- col.// -->
						<div class="col-lg-3 col-sm-6">
		<div class="widgets-wrap d-flex justify-content-end">
			<div class="widget-header">
				<a href="carrinho.php" class="icontext text-dark">
					<div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-shopping-cart  mt-2"></i></div>
					<div class="text-wrap">
						<h6>Carrinho</h6>
						<span><?=$tamCarrinho?>&nbspItens</span>
					</div>
				</a>
			</div> <!-- widget .// -->
			<div class="widget-header dropdown">
				<a href="#" class="ml-3 icontext text-dark" data-toggle="dropdown" data-offset="20,10">

				<?php
					
					if (isset($_SESSION['usuario']))
					{
						
						$img = $_SESSION['usuario']->imagem;	
						echo "<div style='height: 40px; width: 40px;'><img style='height: 100%; width: 100%;' src='".$img."' class='img-fluid rounded-circle'></div>";
						
					}
					else
					{
						echo "<div class='icon-wrap icon-xs bg2 round text-secondary'><i class='fa fa-user mt-2'></i></div>";
					}
				
				?>
				<div class="text-wrap">
					
					<?php
					
						if (isset($_SESSION['usuario']))
						{
							echo "<h6>Olá, ".$_SESSION['usuario']->nome."</h6>";
							echo "<span>Minha conta&nbsp</span><i class='fa fa-caret-down'></i>";
						}
						else
						{
							echo "<h6>Bem vindo</h6>";
							echo "<span>Login|Cadastro&nbsp</span><i class='fa fa-caret-down'></i>";
						}

					?>
					
				</div>
				</a>
				<div class="dropdown-menu dropdown-menu-right">

					<?php
						
						if (isset($_SESSION['usuario']))
						{
							echo "
							<form action='#'
							<article class='card-body'>
								<h4 class='card-title text-center mb-4 mt-1'>Opções da Conta</h4>
								<hr>					
								<div class='form-group'>
								<button class='btn btn-outline-info btn-block' id='btn-perfil' type='button' onclick='redirectConta()'><span>Minha Conta</span></button>
								</div> <!-- form-group// -->
								<div class='form-group'>
								<button class='btn btn-outline-info btn-block' id='btn-compras' type='button' disabled><span>Minhas Compras</span></button>
								</div> <!-- form-group// -->
								<button class='btn btn-outline-danger btn-block' id='btn-logout' type='button'><span>Fazer Logoff</span></button>
							</form>
							</article> <!-- card.// -->
							";
							
						}
						else
						{
							echo "
							<form action='#'
							<article class='card-body'>
								<h4 class='card-title text-center mb-4 mt-1'>Login</h4>
								<hr>
								<p class='text-success text-center' id='alerta-login'></p>							
								<div class='form-group'>
								<div class='input-group'>
									<div class='input-group-prepend'>
										<span class='input-group-text'> <i class='fa fa-user'></i> </span>
									 </div>
									<input id='login-email' class='form-control' placeholder='Email' type='email'>
								</div> <!-- input-group.// -->
								</div> <!-- form-group// -->
								<div class='form-group'>
								<div class='input-group'>
									<div class='input-group-prepend'>
										<span class='input-group-text'> <i class='fa fa-lock'></i> </span>
									 </div>
									<input id='login-senha' class='form-control' placeholder='******' type='password'>
								</div> <!-- input-group.// -->
								</div> <!-- form-group// -->
								<div class='form-group'>
								<button class='btn btn-info btn-block' id='btn-login' type='button'><span>Login</span></button>
								</div> <!-- form-group// -->
								<p class='text-center'><a href='cadastro.php' class='btn'>Criar uma conta</a></p>
							</form>
							</article> <!-- card.// -->
							";
							
						}

					?>



				</div> <!--  dropdown-menu .// -->
			</div> <!-- widget  dropdown.// -->
		</div>	<!-- widgets-wrap.// -->	
	</div> <!-- col.// -->
					</div> <!-- row.// -->
				</div> <!-- container.// -->			
			</div> <!-- container fixed.// -->			
		</div> <!-- header-main .// -->

		<nav class="navbar navbar-expand-lg navbar-dark bg-info">
		  <div class="container">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="main_nav" style="margin-top:30px">
				<ul class="nav navbar-nav text-nowrap flex-row mx-lg-auto order-1 order-lg-2">
					<li class="nav-item">
					  <a class="nav-link text-light mx-2" href="index.php"><h5><strong>Home</strong></h5></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link text-light mx-2" href="loja.php"><h5>Loja</h5></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link text-light mx-2" href="contato.php"><h5>Contato</h5></a>
					</li>
					<?php
					if(isset($_SESSION['usuario']) && $_SESSION['usuario']->tipo == 9)
					{
						echo "					
						<li class='nav-item'>
						<a class='nav-link text-light mx-2' href='admin'><h5>ADM</h5></a>
					  	</li>";
					}
					?>
				</ul>
			</div> <!-- collapse .// -->
		  </div> <!-- container .// -->
		</nav>

	</header> <!-- section-header.// -->
<script type="text/javascript">
/// some script

function redirectConta()
{

	window.location = 'perfil.php';

}

// jquery ready start
$(document).ready(function() {
	// jQuery code
	
	<!-- footer no fim da pagina -->
	// Aplica a altura toda vez que a janela for redimensionada 
	// $(window).resize(function(event){
	// 	// Altura da Janela
	// 	var windowHeight = $(window).height();    
	// 	// Altura do Cabeçalho (com margins e paddings)
	// 	var headerHeight = $('header').outerHeight(true, true);    
	// 	// Altura do Rodapé (com margins e paddings)
	// 	var footerHeight = $('footer').outerHeight(true, true);    
	// 	// Altura mínima calculada
	// 	var contentHeight = Math.floor(windowHeight - headerHeight - footerHeight);    
	// 	// Aplica a altura mínima necessária para que o footer encoste na parte
	// 	// inferior da janela
	// 	$('section').css('min-height', contentHeight);  
		
	// 	var fixedToprHeight = $('.fixed-top').outerHeight(true, true);
	// 	var headerMainHeight = $('.header-main').outerHeight(true, true);
	// 	var navHeight = Math.floor(fixedToprHeight - headerMainHeight); 
	// 	$('body').css('margin-top', navHeight); 
		
	// }).resize(); // Executa o evento uma vez para que seja aplicada as correções 	

	$("#btn-login").click(function(){		
		var email = $("#login-email").val();
		var senha = $("#login-senha").val();

		if(email == "" || senha == ""){
			$("#alerta-login").html("<div class='alert alert-danger'>Preencha todos os campos!</div>");
		} else{

			var dt = "action=auth_login&email="+email+"&senha="+senha;

			$.ajax({
				type: "POST",
				url: "app/ajax/AJAX_Usuario.php",
				data: dt,
				success: function(data){
					$("#alerta-login").html(data);
				}
			});
		}

	});

	$("#btn-logout").click(function(){		

		var dt = "action=logout";

		$.ajax({
			type: "POST",
			url: "app/ajax/AJAX_Usuario.php",
			data: dt,
			success: function(data){

    			window.location = '';

			}
		});
		

	});

	var owl = $('.owl-carousel');
	owl.owlCarousel({
		items: 5,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		
		responsiveClass: true,
		responsive: {
		  0: {
			items: 1,
			nav: true
		  },
		  600: {
			items: 3,
			nav: false
		  },
		  1000: {
			items: 5,
			nav: true,
			margin: 20
		  }
		}
	  
	})
			
	$('.owl-dots').hide();
  
});
	
// jquery end
</script>
