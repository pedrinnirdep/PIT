<?php

require_once '../base.php';

if(isset($_POST["action"]) && $_POST["action"] == 'adicionar_carrinho'){
	
	$id = $_POST["id"];
	$tamanho = $_POST["tamanho"];
	$cor = $_POST["cor"];
	$quantidade = $_POST["quantidade"];
	$index = count($_SESSION['carrinho']['produto']);
	
	$carrinho->adicionarCarrinho($id, $tamanho, $cor, $quantidade);

} else if(isset($_POST["action"]) && $_POST["action"] == 'remover_carrinho'){
	
	$id = $_POST["id"];
	
	$carrinho->removerCarrinho($id);
}

?>