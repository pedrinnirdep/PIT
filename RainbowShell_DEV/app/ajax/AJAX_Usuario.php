<?php

require_once '../base.php';

if(isset($_POST["action"]) && $_POST["action"] == 'register_user')
{
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
    $usuarios->registrar($nome, $sobrenome, $telefone, $email, $senha);
}
else if(isset($_POST["action"]) && $_POST["action"] == 'auth_login')
{
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	$usuarios->logar($email, $senha);
}
else if(isset($_POST["action"]) && $_POST["action"] == 'logout')
{
    unset($_SESSION['usuario']);
}
else if(isset($_POST["action"]) && $_POST["action"] == 'update_usuario')
{
	$id = $_POST["idUsuario"];
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$cpf = $_POST["cpf"];
	
    $usuarios->alterarDados($id, $email, $nome, $sobrenome, $cpf, $telefone);
}
else if(isset($_POST["action"]) && $_POST["action"] == 'update_img')
{
    $img = $_FILES["img-upload"];
    $id_usuario = $_SESSION['usuario']->id_usuario;

    $diretorio = "img/avatar/$id_usuario/";
    $imagemNome = $id_usuario.".png";
    $imagemTmp = $img['tmp_name'];
	
    $usuarios->alterarImgUsuario($id_usuario, $imagemNome, $diretorio, $imagemTmp);
}
else if(isset($_POST["action"]) && $_POST["action"] == 'verifica_email')
{
	$email = $_POST['email'];

	// Remove all illegal characters from email
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);

	// Validate e-mail
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$resposta = array(
			'msg' => $core->sucesso("Email válido!"), 
			'disabled' => false
		);
	} else {
		$resposta = array(
			'msg' => $core->erro("Email inválido!"), 
			'disabled' => true
		);
	}
	// $usuarios->verifyEmail($email, 'rainbowshellpit@gmail.com');
	echo json_encode($resposta);
}

?>

