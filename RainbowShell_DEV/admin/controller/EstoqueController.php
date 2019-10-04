<?php
require_once 'model/Estoque.php';
require_once 'model/Tipo.php';

class EstoqueController
{

    public function all(){

        $obj = new Estoque();
        $estoques = $obj->all();
        include "view/Estoque_all.php";
        
    }

    public function read(){

        $estoque = new Estoque($_GET['id_estoque']);
        $estoque->read();
        include 'view/Estoque_read.php';

    }


    public function update(){

        $estoque = new Estoque($_GET['id_estoque']);

        $obj = new Tipo();
        $tipos = $obj->all();

        if ( isset($_POST['cor']) ) {

            $estoque->setCor($_POST['cor']);
            $estoque->setTamanho($_POST['tamanho']);
            $estoque->setMaterial($_POST['material']);
            $estoque->setCapacidade($_POST['capacidade']);
            $estoque->setVolume($_POST['volume']);
            $estoque->setQuantidade($_POST['quantidade']);
            $estoque->setPreco_compra($_POST['preco_compra']);
            $estoque->setEstoque_id_tipo($_POST['estoque_id_tipo']);

            $estoque->save();

            header("Location: ./?classe=Estoque&acao=all");

        }

        $estoque->update();
        include 'view/Estoque_update.php';

    }



    public function delete(){

        $estoque = new Estoque($_GET['id_estoque']);
        $estoque->delete();
        header("Location: ./?classe=Estoque&acao=all");

    }

    
    public function create(){

        $obj = new Tipo();
        $tipos = $obj->all();

        if(isset($_POST['cor'])){
            $estoque = new Estoque();
            $estoque->create($_POST['cor'],$_POST['tamanho'],$_POST['material'], $_POST['capacidade'],$_POST['volume'],$_POST['quantidade'],$_POST['preco_compra'],$_POST['estoque_id_tipo']);
            header("Location: ./?classe=Estoque&acao=all");
        }   

        include 'view/Estoque_create.php';


    }


}