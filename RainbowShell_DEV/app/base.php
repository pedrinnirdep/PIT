<?php

session_start();
require_once 'autoload.php';

$usuarios = new Usuarios();
$produtos = new Produtos();
$estampas = new Estampas();
$compras = new Compras();
$enderecos = new Enderecos();
$carrinho = new Carrinho();
$core = new Core();

?>