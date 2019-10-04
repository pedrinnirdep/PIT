<?php

require_once '../base.php';

if($_POST["action"] == 'comprar'){
	
//  var cor = $("#cor").val();
// 	var tamanho = $("#tamanho").val();
// 	var idProduto = $("#idProduto").val();
// 	var idCliente = $("#idCliente").val();
// 	var quantidade = $("#quantidade").val();
//  var produtoValor = 40;

    $cliente = $_POST["idCliente"];
    $cor = $_POST["cor"];
    $tamanho = $_POST["tamanho"];
    $idProduto = $_POST["idProduto"];
    
    $compras->inserirCompra($cliente, $cor, $tamanho, $idProduto);

}

?>