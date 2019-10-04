<?php include("inc/header.php"); 
$usuarios->EntreLogado();
$endereco = $enderecos->listarEndereco($_SESSION['usuario']->id_usuario);
?>



<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<main class="card">
				<p class='text-success text-center' id='alertas'></p>
					<div class="row no-gutters">
						<aside class="col-md-6 border-right">
						<input type="hidden" class="form-control" id="id-usuario" value="<?=$_SESSION['usuario']->id_usuario?>">
									
							<div class="card-body col-md-9 mx-auto">
							
								<header class="card-header bg-white text-center">
									<h3 class="card-title mt-2">Foto de Perfil</h3>
								</header><br>
							<!--FORM-->
								<form method="post" id="update-img" enctype="multipart/form-data">
									<input type="hidden" class="form-control" name="action" id="action" value="update_img">	
									<div class="form-group text-center">
										<a href='<?=$_SESSION['usuario']->imagem?>' data-fancybox=''><img id='blah' class='img-md rounded-circle' src='<?=$_SESSION['usuario']->imagem?>'></a><br><br>									
										<label>Alterar Imagem de Perfil:</label>
									</div>

									<div class="form-group text-center">
										<input type="file" name="img-upload" id="img-upload" required>
										<button name="submit" class="btn btn-outline-info" type="submit"><i class="fa fa-edit"></i>Alterar</button>
									</div>
								</form>
									<header class="card-header bg-white text-center">
										<h3 class="card-title mt-2">Meus Dados</h3>
									</header><br>
									
									<div class="row">
										<div class="form-group mx-auto">
											<label>Nome:</label>
											<input type="text" class="form-control" name="nome" id="nome" value="<?=$_SESSION['usuario']->nome?>" disabled >

										</div>
										<div class="form-group mx-auto">
											<label>Sobrenome:</label>
											<input type="text" class="form-control" name="sobrenome" id="sobrenome" value="<?=$_SESSION['usuario']->sobrenome?>" disabled >
					   
										</div>
									</div>

									<div class="form-group">
										<label>Email:</label>
										<input type="text" class="form-control" name="email" id="email" value="<?=$_SESSION['usuario']->email?>" disabled>

									</div>
									
									<div class="form-group">
										<a class="btn form-control btn-outline-info" onclick="modalDados()"><i class="fa fa-edit"></i> Alterar Dados</a>
									</div>
								
							</div>
							
						</aside> <!-- col.// -->
						
						<aside class="col-sm-6">							
							<div class="card-body col-md-9 mx-auto">
							
								<header class="card-header bg-white text-center">
									<h3 class="card-title mt-2">Meu Endereço</h3>
								</header><br>
							
								<!--FORM-->
								<form>
								<?php if($endereco) { ?>	
									<input type="hidden" class="form-control" id="id-endereco" name="id-endereco" value="<?=$endereco->id_endereco?>">	
										<div class="form-group">
											<label>CEP</label>
											<input id="cep" name="cep" type="text" class="form-control" value="<?=$endereco->cep?>" disabled>
										</div>
										<div class="form-group">
											<label>Logradouro</label>
											<input id="logradouro" name="logradouro" type="text" class="form-control" value="<?=$endereco->logradouro?>" disabled>
										</div>
										<div class="form-group">
											<label>Número</label>
											<input id="numero" name="numero" type="number" class="form-control" value="<?=$endereco->numero?>" disabled>
										</div>
										<div class="form-group">
											<label>Complemento</label>
											<input id="complemento" name="complemento" type="text" class="form-control" value="<?=$endereco->complemento?>" disabled>
										</div>									
										<div class="form-group">
											<label>Bairro</label>
											<input id="bairro" name="bairro" type="text" class="form-control" value="<?=$endereco->bairro?>" disabled>
										</div>
										<div class="form-group">
											<label>Cidade</label>
											<input id="cidade" name="cidade" type="text" class="form-control" value="<?=$endereco->cidade?>" disabled>
										</div>
										<div class="form-group">
											<label>Estado</label>
											<select id="uf" name="uf" class="form-control" disabled>
												<option value="<?=$endereco->estado?>"><?=$endereco->estado?></option>
											</select>
										</div>
										
										<div class="form-group">
											<a class="btn form-control btn-outline-info" onclick="modalEndereco()"><i class="fa fa-edit"></i> Alterar Dados</a>
										</div>
								<?php } else { ?>
								<input type="hidden" class="form-control" id="id-endereco" name="id-endereco" value="">	
										<div class="form-group">
											<label>CEP</label>
											<input id="cep" name="cep" type="text" class="form-control"  disabled>
										</div>
										<div class="form-group">
											<label>Logradouro</label>
											<input id="logradouro" name="logradouro" type="text" class="form-control"  disabled>
										</div>
										<div class="form-group">
											<label>Número</label>
											<input id="numero" name="numero" type="number" class="form-control"  disabled>
										</div>
										<div class="form-group">
											<label>Complemento</label>
											<input id="complemento" name="complemento" type="text" class="form-control"  disabled>
										</div>									
										<div class="form-group">
											<label>Bairro</label>
											<input id="bairro" name="bairro" type="text" class="form-control"  disabled>
										</div>
										<div class="form-group">
											<label>Cidade</label>
											<input id="cidade" name="cidade" type="text" class="form-control"  disabled>
										</div>
										<div class="form-group">
											<label>Estado</label>
											<select id="uf" name="uf" class="form-control" disabled>
											</select>
										</div>
										
										<div class="form-group">
											<a class="btn form-control btn-outline-info" onclick="modalEndereco()"><i class="fa fa-edit"></i> Alterar Dados</a>
										</div>
								<?php } ?>
							</form>
						</div>
							
						</aside> <!-- col.// -->
						
						<div class="card-body col-md-11 mx-auto">
							
								<header class="card-header bg-white text-center">
									<h3 class="card-title mt-2">Minhas Estampas</h3>
									<button class="btn btn-outline-info" onclick="redirectEstampa()">Adicionar Estampa</button>
								</header><br>								
								
								
								<table class="table table-hover table-responsive-lg">
									<thead class="text-muted">
										<tr>
										  <th scope="col" class="text-dark" >Imagem</th>
										  <th scope="col" class="text-dark">Nome</th>
										  <th scope="col" class="text-dark">Tipo</th>
										  <th scope="col" class="text-dark">Descrição</th>
										  <th scope="col" class="text-dark">Comissão</th>
										  <th scope="col" class="text-dark">Ativo</th>
										  <th scope="col" class="text-dark">Ação</th>
										</tr>
									</thead>
									<tbody>
										
										<?php if(count($estampas->listarEstampasUsuario($_SESSION['usuario']->id_usuario)) > 0) : ?>	
											<?php foreach($estampas->listarEstampasUsuario($_SESSION['usuario']->id_usuario) as $estampa) : ?>
											<?php $idEstampa = $estampa["id_estampa"]; ?>
											<input type="hidden" class="form-control" id="id-estampa" name="id-estampa" value="<?=$idEstampa?>">	
											<tr>
											<td>
												<figure class="media">
													<div><img src="<?=$estampa['imagem']?>" class="" style="height: 10%;"></div>														
												</figure> 
											</td>
											<td> 
												<figcaption class="media-body">
													<h5 class="title text-truncate"><?=$estampa['nome']?></h5>															
												</figcaption>
											</td>
											<td> 
												<figcaption class="media-body">
													<h6 class="title text-truncate"><?=$estampa['tag']?></h6>															
												</figcaption>
											</td>
											<td> 
												<figcaption class="media-body">
													<h6 class="title text-truncate"><?=$estampa['descricao']?></h6>															
												</figcaption>
											</td>
											<td> 
												<div class="form-group">
													<input type="number" class="form-control bg-white" value="<?=$estampa['comissao']?>" disabled>
												</div>
											</td>
											<td> 
												<?php if($estampa['aprovacao'])
												{
													echo "<i class='fas fa-check-circle'></i>";
												}
												else
												{
													echo "<i class='fas fa-times-circle'></i>";
												}
												?>
												
											</td>
											<td class="text-right"> 
												<a href="" class="btn btn-outline-danger" onclick="deletarEstampa(<?=$idEstampa?>, '<?=$estampa['imagem']?>')"> × Remover</a>
											</td>
											</tr>
											<?php endforeach; ?>	
										<?php else: ?>
											<!-- caso não tiver nenhum produto -->
										<?php endif; ?>
										
									</tbody>
								</table>
							</div>
						
					</div> <!-- row.// -->
				</main> <!-- card.// -->

		</div> <!-- col // -->

		</div> <!-- row.// -->

	</div><!-- container // -->
	
	<div class="container">
	<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
		  
			<!-- Modal content-->
				<div class="modal-content">			  
					<div class="modal-body">
						<div class="card-header">
							<h3 class="mb-0">Cadastrar Endereço:</h3>
						</div>
						<div class="card-body">
						<p class='text-success text-center' id='alertas-modal-endereco'></p>
							<form>
								<div class="form-group">
									<label for="cep">CEP*</label>
									<input id="cep_modal" type="text" pattern="[0-9]{8}" class="form-control cep" required>
								</div>
								<div class="form-group">
									<label for="logradouro">Logradouro(Rua/Avenida/Praça)*</label>
									<input id="logradouro_modal" type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="numero">Número*</label>
									<input id="numero_modal" type="number" pattern="[0-9]{3}" class="form-control" required>
								</div>
								<div class="form-group">
										<label for="complemento">Complemento</label>
										<input id="complemento_modal" type="text" class="form-control" required>
									</div>			
								<div class="form-group">
									<label for="bairro">Bairro*</label>
									<input id="bairro_modal" type="text" class="form-control" required>
								</div>
								<div class="form-group">
									<label for="cidade">Cidade*</label>
									<input id="cidade_modal" type="text" class="form-control" required disabled>
								</div>
								<div class="form-group">
									<label for="uf">Estado*</label>
									<select id="uf_modal"  class="form-control" required disabled>
										<option value=""></option>
										<option value="AC">Acre</option>
										<option value="AL">Alagoas</option>
										<option value="AP">Amapá</option>
										<option value="AM">Amazonas</option>
										<option value="BA">Bahia</option>
										<option value="CE">Ceará</option>
										<option value="DF">Distrito Federal</option>
										<option value="ES">Espírito Santo</option>
										<option value="GO">Goiás</option>
										<option value="MA">Maranhão</option>
										<option value="MT">Mato Grosso</option>
										<option value="MS">Mato Grosso do Sul</option>
										<option value="MG">Minas Gerais</option>
										<option value="PA">Pará</option>
										<option value="PB">Paraíba</option>
										<option value="PR">Paraná</option>
										<option value="PE">Pernambuco</option>
										<option value="PI">Piauí</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="RN">Rio Grande do Norte</option>
										<option value="RS">Rio Grande do Sul</option>
										<option value="RO">Rondônia</option>
										<option value="RR">Roraima</option>
										<option value="SC">Santa Catarina</option>
										<option value="SP">São Paulo</option>
										<option value="SE">Sergipe</option>
										<option value="TO">Tocantins</option>
									</select>
								</div>
								
								<div class="modal-footer">
									<button type="button" class="btn btn-info" onclick="inserirEndereco()">Salvar Dados</button>
									<button type="button" class="btn btn-warning" data-dismiss="modal">Voltar</button>
								</div>
								
							</form>
						</div> 
					</div>
				</div>			
			</div>
		</div>		
	</div>

	<div class="modal fade" id="modalUsuario" role="dialog">
		<div class="modal-dialog">
		
			  <!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
				
					<div class="card-header">
						<h3 class="mb-0">Atualizar dados:</h3>
					</div>				  
		  
					<div class="card-body">
					<p class='text-success text-center' id='alertas-modal-usuario'></p>
						<form>
							<div class="form-group">
								<label for="uname1">Nome:*</label>
								<input type="text" class="form-control" name="nome_modal" id="nome_modal"  required>

							</div>
							<div class="form-group">
								<label>Sobrenome:*</label>
								<input type="text" class="form-control" name="sobrenome_modal" id="sobrenome_modal"  required>
		 
							</div>
							<div class="form-group">
								<label>Email:*</label>
								<input type="text" class="form-control" name="email_modal" id="email_modal"  required>

							</div>

							<div class="form-group">
								<label>CPF:</label>
								<input type="text" class="form-control cpf" name="cpf_modal" id="cpf_modal"  >

							</div>

							<div class="form-group">
								<label>Telefone:</label>
								<input type="text" class="form-control telefone" name="telefone_modal" id="telefone_modal"  >

							</div>
										
								<div class="modal-footer">
									<button type="button" id="btn-enviar-usuario" class="btn btn-info" onclick="alterarDadosUsuario()">Salvar Dados</button>
									<button type="button" class="btn btn-warning" data-dismiss="modal">Voltar</button>
								</div>
								
						</form>
					</div>
				</div>			
			</div>		  
		</div>
	</div>
	
</section>

<!-- ========================= FOOTER ========================= -->
<?php include("inc/footer.php"); ?>

<script type="text/javascript">

$(document).ready(function(){

	$(".cep").mask("99999-999");
    $(".telefone").mask("(99) 9 9999-9999");
	$(".cpf").mask("999.999.999-99");

	$("#update-img").on('submit',function(e){
		e.preventDefault();
		$.ajax({
			url: "app/ajax/AJAX_Usuario.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data){
				$("#alertas").html(data);
				setTimeout(function(){// wait for 5 secs(2)
					location.reload(); // then reload the page.(3)
				}, 50); 
			}
		});
	
	});

	$("#cpf_modal").on('change', function(e){

		var cpf = $('#cpf_modal').val();
		if(validarCPF(cpf))
		{
			$("#btn-enviar-usuario").prop("disabled", false);
			$("#alertas-modal-usuario").html('');
		}
		else
		{
			$("#btn-enviar-usuario").prop("disabled", true);
			$("#alertas-modal-usuario").html('<div class="alert alert-danger">CPF Inválido!</div>');
		}

	});

	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
		
			reader.onload = function(e) {
				$('#blah').attr('src', e.target.result);
			}
		
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#img-upload").change(function() {
		readURL(this);
	});

	});

	function modalEndereco()
	{
		$('#myModal').modal('show'); 
		
		$("#cep_modal").change(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$("#logradouro_modal").val(resposta.logradouro);
					$("#bairro_modal").val(resposta.bairro);
					$("#cidade_modal").val(resposta.localidade);
					$("#uf_modal").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numero_modal").focus();
				}
			});
		});	
		
	}
		
	function modalDados()
	{
		$('#modalUsuario').modal('show');
	}
	
	function deletarEstampa(id, img)
	{
		var idEstampa = id;
		var dt = "action=delete_estampa&idEstampa="+id+"&img="+img;

		$.ajax({
			type: "POST",
			url: "app/ajax/AJAX_Estampa.php",
			data: dt,
			success: function(data){
				setTimeout(function(){
					location.reload(); 
				}, 1000); 
			}
		});
			
	}
	
	function inserirEndereco()
	{
		var idEndereco = $('#id-endereco').val();
		var cep = $('#cep_modal').val().replace(/\D/g, '');
		var logradouro = $('#logradouro_modal').val();
		var numero = $('#numero_modal').val();
		var complemento = $('#complemento_modal').val();
		var bairro = $('#bairro_modal').val();
		var cidade = $('#cidade_modal').val();
		var uf = $('#uf_modal').val();	
		var idUsuario = $('#id-usuario').val();

		if(cep == "" || logradouro == "" || numero == "" || bairro == "" || cidade == "" || uf == "" || idUsuario == ""){
			$("#alertas-modal-endereco").html("<div class='alert alert-danger'>Preencha todos os campos!</div>");
		} else if(idEndereco == ""){
			var dt = "action=insert_endereco&cep="+cep+"&logradouro="+logradouro+"&numero="+numero+"&complemento="+complemento+"&bairro="+bairro+"&cidade="+cidade+"&estado="+uf+"&idUsuario="+idUsuario;

			$.ajax({
				type: "POST",
				url: "app/ajax/AJAX_Endereco.php",
				data: dt,
				success: function(data){
					$("#alertas-modal-endereco").html(data);
					setTimeout(function(){
							location.reload();
					}, 10);
				}
			});
		} else{

			var dt = "action=update_endereco&idEndereco="+idEndereco+"&cep="+cep+"&logradouro="+logradouro+"&numero="+numero+"&complemento="+complemento+"&bairro="+bairro+"&cidade="+cidade+"&estado="+uf+"&idUsuario="+idUsuario;

			$.ajax({
				type: "POST",
				url: "app/ajax/AJAX_Endereco.php",
				data: dt,
				success: function(data){
					$("#alertas-modal-endereco").html(data);
					setTimeout(function(){
						location.reload();
					}, 10);
				}
			});
		}
	}

	function redirectEstampa()
	{
		window.location = 'estampa.php';
	}

	function validarCPF(cpf) {	
		cpf = cpf.replace(/[^\d]+/g,'');	
		if(cpf == '') return false;	
		// Elimina CPFs invalidos conhecidos	
		if (cpf.length != 11 || 
			cpf == "00000000000" || 
			cpf == "11111111111" || 
			cpf == "22222222222" || 
			cpf == "33333333333" || 
			cpf == "44444444444" || 
			cpf == "55555555555" || 
			cpf == "66666666666" || 
			cpf == "77777777777" || 
			cpf == "88888888888" || 
			cpf == "99999999999")
				return false;		
		// Valida 1o digito	
		add = 0;	
		for (i=0; i < 9; i ++)		
			add += parseInt(cpf.charAt(i)) * (10 - i);	
			rev = 11 - (add % 11);	
			if (rev == 10 || rev == 11)		
				rev = 0;	
			if (rev != parseInt(cpf.charAt(9)))		
				return false;		
		// Valida 2o digito	
		add = 0;	
		for (i = 0; i < 10; i ++)		
			add += parseInt(cpf.charAt(i)) * (11 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)	
			rev = 0;	
		if (rev != parseInt(cpf.charAt(10)))
			return false;		
		return true;   
	}

	function alterarDadosUsuario()
	{
		var idUsuario = $('#id-usuario').val();
		var nome = $("#nome_modal").val();
		var sobrenome = $("#sobrenome_modal").val();
		var email = $("#email_modal").val();
		var cpf = $("#cpf_modal").val().replace(/[^\d]+/g,'');
		var telefone = $("#telefone_modal").val().replace(/\D/g, '');

		if(nome == "" || sobrenome == "" || email == ""){
			$("#alertas-modal-usuario").html("<div class='alert alert-danger'>Preencha todos os campos obrigatórios!</div>");
		}else{

			var dt = "action=update_usuario&idUsuario="+idUsuario+"&nome="+nome+"&sobrenome="+sobrenome+"&email="+email+"&cpf="+cpf+"&telefone="+telefone;

			$.ajax({
				type: "POST",
				url: "app/ajax/AJAX_Usuario.php",
				data: dt,
				success: function(data){
					$("#alertas-modal-usuario").html(data);
					setTimeout(function(){
						location.reload();
					}, 10);
				}
			});
		}
	}
	

	
</script>


</body>
</html>