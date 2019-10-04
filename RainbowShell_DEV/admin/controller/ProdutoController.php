<?php
require_once 'model/Produto.php';
require_once 'model/Estampa.php';
require_once 'model/Tipo.php';

class ProdutoController
{
    public function all(){

        $obj = new Produto();
        $produtos = $obj->all();
        include "view/Produto_all.php";

    }

    public function read(){

        $produto = new Produto($_GET['id_produto']);
        $produto->read();
        include 'view/Produto_read.php';

    }

    public function update(){

        $produto = new Produto($_GET['id_produto']);

        $obj = new Estampa();
        $estampas = $obj->all();

        $obj = new Tipo();
        $tipos = $obj->all();

        if ( isset($_POST['nome'])  ) {

            $produto->setDatamod($_POST['datamod']);
            $produto->setNome($_POST['nome']);
            $produto->setDescricao($_POST['descricao']);
            $produto->setValor($_POST['valor']);
            $produto->setImagem($_POST['imagem']);
            $produto->setProdutoIdEstampa($_POST['produto_id_estampa']);
            $produto->setProdutoIdTipo($_POST['produto_id_tipo']);
            $produto->save();

            header("Location: ./?classe=Produto&acao=all");

        }

        $produto->update();
        include 'view/Produto_update.php';

    }

    public function delete(){

        $produto = new Produto($_GET['id_produto']);
        $produto->delete();
        header("Location: ./?classe=Produto&acao=all");


    }

    public function create(){

        $obj = new Estampa();
        $estampas = $obj->all();

        $obj = new Tipo();
        $tipos = $obj->all();


        if(isset($_POST['nome'])){
            $produto = new Produto();
            $produto->create($_POST['datamod'],$_POST['nome'],$_POST['descricao'],$_POST['valor'],$_POST['imagem'],$_POST['produto_id_estampa'],$_POST['produto_id_tipo']);
            header("Location: ./?classe=Produto&acao=all");
        }


        include 'view/Produto_create.php';


    }
}