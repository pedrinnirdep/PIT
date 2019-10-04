<?php
require_once 'model/Compra.php';
require_once 'model/Usuario.php';
require_once 'model/Endereco.php';

class CompraController
{

    public function all(){

        $obj = new Compra();
        $compra = $obj->all();
        include "view/Compra_all.php";
        
    }

    public function read(){

        $compra = new Compra($_GET['id_compra']);
        $compra->read();
        include 'view/Compra_read.php';

    }


    public function update(){

        $compra = new Compra($_GET['id_compra']);

        $obj = new Usuario();
        $usuarios = $obj->all();

        $obj = new Endereco();
        $enderecos = $obj->all();

        if ( isset($_POST['valor_total']) ) {

            $compra->setData_compra($_POST['data_compra']);
            $compra->setData_entrega($_POST['data_entrega']);
            $compra->setFrete($_POST['frete']);
            $compra->setDesconto($_POST['desconto']);
            $compra->setValor_total($_POST['valor_total']);
            $compra->setStatus($_POST['status']);
            $compra->setCompra_id_usuario($_POST['compra_id_usuario']);
            $compra->setCompra_id_endereco($_POST['compra_id_endereco']);

            $compra->save();

            header("Location: ./?classe=Compra&acao=all");

        }

        $compra->update();
        include 'view/Compra_update.php';

    }



    public function delete(){

        $compra = new Compra($_GET['id_compra']);
        $compra->delete();
        header("Location: ./?classe=Compra&acao=all");

    }

    
    public function create(){

        $obj = new Usuario();
        $usuarios = $obj->all();

        $obj = new Endereco();
        $enderecos = $obj->all();

        if(isset($_POST['valor_total'])){
            $compra = new Compra();
            $compra->create($_POST['data_compra'],$_POST['data_entrega'],$_POST['frete'], $_POST['desconto'],$_POST['valor_total'],$_POST['status'],$_POST['compra_id_usuario'],$_POST['compra_id_endereco']);
            header("Location: ./?classe=Compra&acao=all");
        }   

        include 'view/Compra_create.php';


    }





}