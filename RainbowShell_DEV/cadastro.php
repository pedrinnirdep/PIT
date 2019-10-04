<?php include("inc/header.php"); 
$usuarios->EntreDeslogado();
?>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-main bg p-3">
	<div class="container">
		<center>
			<div class="col-md-6 text-justify">
				<div class="card">
					<header class="card-header bg-white">
						<h3 class="card-title mt-2">Cadastre-se</h3>
						<small class="form-text text-muted">Campos com * são obrigatórios.</small>
					</header>
					<article class="card-body">
					
					<form action="">
					<p class="text-success text-center" id="alertas"></p>
						<div class="form-row">
						<div class="col form-group">
								<label>Nome*</label>
								<input type="text" class="form-control" placeholder="" id="cad-nome">
							</div> <!-- form-group end.// -->
							<div class="col form-group">
								<label>Sobrenome*</label>
								<input type="text" class="form-control" placeholder="" id="cad-sobrenome">
							</div> <!-- form-group end.// -->
						</div> <!-- form-row end.// -->
						<div class="form-group">
							<label>Telefone</label>
							<input type="tel" class="form-control" pattern="[0-9]{2} [0-9]{4}-[0-9]{4}" placeholder="Ex:. 31 1234-5678" id="cad-telefone">						
						</div> <!-- form-group end.// -->
						<div class="form-group">
							<label>Email*</label>
							<input type="email" class="form-control" placeholder="" id="cad-email">						
						</div> <!-- form-group end.// -->
						<div class="form-row">
							<div class="col form-group">
								<label>Senha*</label>
								<input class="form-control" type="password" id="cad-senha">
							</div> <!-- form-group end.// -->
							<div class="col form-group">
								<label>Confirmar Senha*</label>
								<input class="form-control" type="password" id="cad-csenha">
							</div> <!-- form-group end.// -->
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-info btn-block" id="btn-enviar"><span id="btn-value">Cadastrar</span></button>
						</div> <!-- form-group// -->      
						<small class="text-muted">Ao clicar no botão "Cadastrar", você confirma que aceita nossos <br> Termos de Uso e Política de Privacidade.</small>                                          
					</form>
				</article> <!-- card-body end .// -->
				</div> <!-- card.// -->
			</div>
		</center>
	</div>
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->

<!-- ========================= FOOTER ========================= -->

<?php include("inc/footer.php"); ?>

<script>
	$(document).ready(function(){

		$("#cad-email").on('change',function(e){

			var email = $("#cad-email").val();
			var dt = "action=verifica_email&email="+email;

			$.ajax({
				url: "app/ajax/AJAX_Usuario.php",
				type: "POST",
				data:  dt,
				datatype: 'json',
				beforeSend: function(){
					$("#btn-enviar").prop("disabled", true);
					$("#btn-value").html("Verificando email");
				},
				success: function(data){
					$("#alertas").html(JSON.parse(data).msg);
					$("#btn-value").html("Cadastrar");
					$("#btn-enviar").prop("disabled", JSON.parse(data).disabled);
				}
			});
	
		});

		$("#btn-enviar").click(function(){
			var nome = $("#cad-nome").val();
			var sobrenome = $("#cad-sobrenome").val();
			var telefone = $("#cad-telefone").val();
			var email = $("#cad-email").val();
			var senha = $("#cad-senha").val();
			var csenha = $("#cad-csenha").val();

			if(nome == "" || sobrenome == "" || telefone == "" || email == "" || senha == "" || csenha == ""){
				$("#alertas").html("<div class='alert alert-danger'>Preencha todos os campos!</div>");
			} else if(senha != csenha){
				$("#alertas").html("<div class='alert alert-danger'>As senhas não conferem!</div>");
			} else{

				var dt = "action=register_user&nome="+nome+"&sobrenome="+sobrenome+"&telefone="+telefone+"&email="+email+"&senha="+senha;

				$.ajax({
					type: "POST",
					url: "app/ajax/AJAX_Usuario.php",
					data: dt,
					beforeSend: function(){
						$("#btn-enviar").prop("disabled", true);
						$("#btn-value").html("Enviando...");
					},
					success: function(data){
						$("#btn-enviar").prop("disabled", false);
						$("#btn-value").html("Cadastrar");
						$("#alertas").html(data);
						$("#cad-senha").val("");
						$("#cad-csenha").val("");
					}
				});
			}
		});
	});
</script>
