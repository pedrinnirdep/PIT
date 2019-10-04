<?php
require_once '../base.php';


if(isset($_POST["action"]) && $_POST["action"] == 'register_estampa'){
	
	$nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $img = $_FILES["img-upload"];
    $comissao = $_POST['comissao'];
    $tag = $_POST['tag'];
    $id_usuario = $_SESSION['usuario']->id_usuario;

    $diretorio = "img/estampa/$id_usuario/";
    $imagemNome = $nome . ".png";
    $imagemTmp = $img['tmp_name'];
	
    $estampas->enviarEstampa($nome, $descricao, $comissao, $tag, $id_usuario, $imagemNome, $diretorio, $imagemTmp);
    
}else if(isset($_POST["action"]) && $_POST["action"] == 'delete_estampa')
{
	
    $idEstampa = $_POST['idEstampa'];
    $img = $_POST['img'];
	
	$estampas->deletarEstampa($idEstampa, $img);
}



?>