<?php

require_once 'model/ProdutosCompra.php';
require_once 'model/Produto.php';
require_once 'model/Compra.php';

class ProdutosCompraController
{
    public function all(){

        $obj = new ProdutosCompra();
        $produtoscompras = $obj->all();
        include "view/ProdutosCompra_all.php";

    }

    public function read(){

        $produtoscompra = new ProdutosCompra($_GET['id_produtos_compra']);
        $produtoscompra->read();
        include 'view/ProdutosCompra_read.php';

    }

    public function update(){

        $produtoscompra = new ProdutosCompra($_GET['id_produtos_compra']);

        $obj = new Produto();
        $produtos = $obj->all();

        $obj = new Compra();
        $compras = $obj->all();

        if ( isset($_POST['quantidade'])  ) {

            $produtoscompra->setQuantidade($_POST['quantidade']);
            $produtoscompra->setProdutosCompraIdProduto($_POST['produtos_compra_id_produto']);
            $produtoscompra->setProdutosCompraIdCompra($_POST['produtos_compra_id_compra']);
            $produtoscompra->save();

            header("Location: ./?classe=ProdutosCompra&acao=all");

        }

        $produtoscompra->update();
        include 'view/ProdutosCompra_update.php';

    }

    public function delete(){

        $produtoscompra = new ProdutosCompra($_GET['id_produtos_compra']);
        $produtoscompra->delete();
        header("Location: ./?classe=ProdutosCompra&acao=all");


    }

    public function create(){

        $obj = new Produto();
        $produtos = $obj->all();

        $obj = new Compra();
        $compras = $obj->all();

        if(isset($_POST['quantidade'])){
            $produtoscompra = new ProdutosCompra();
            $produtoscompra->create($_POST['quantidade'],$_POST['produtos_compra_id_produto'],$_POST['produtos_compra_id_compra']);
            header("Location: ./?classe=ProdutosCompra&acao=all");
        }


        include 'view/ProdutosCompra_create.php';


    }
}