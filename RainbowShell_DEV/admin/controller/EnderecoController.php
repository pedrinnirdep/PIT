<?php

require_once 'model/Endereco.php';
require_once 'model/Usuario.php';

class EnderecoController
{

    public function all(){

        $obj = new Endereco();
        $enderecos = $obj->all();
        include "view/Endereco_all.php";
        
    }

    public function read(){

        $endereco = new Endereco($_GET['id_endereco']);
        $endereco->read();
        include 'view/Endereco_read.php';

    }


    public function update(){

        $endereco = new Endereco($_GET['id_endereco']);

        $obj = new Usuario();
        $usuarios = $obj->all();

        if ( isset($_POST['cep']) ) {

            $endereco->setCep($_POST['cep']);
            $endereco->setLogradouro($_POST['logradouro']);
            $endereco->setNumero($_POST['numero']);
            $endereco->setBairro($_POST['bairro']);
            $endereco->setCidade($_POST['cidade']);
            $endereco->setEstado($_POST['estado']);
            $endereco->setComplemento($_POST['complemento']);
            $endereco->setEndereco_id_usuario($_POST['endereco_id_usuario']);

            $endereco->save();

            header("Location: ./?classe=Endereco&acao=all");

        }

        $endereco->update();
        include 'view/Endereco_update.php';

    }



    public function delete(){

        $endereco = new Endereco($_GET['id_endereco']);
        $endereco->delete();
        header("Location: ./?classe=Endereco&acao=all");

    }

    
    public function create(){
        
        $obj = new Usuario();
        $usuarios = $obj->all();

        if(isset($_POST['cep'])){
            $endereco = new Endereco();
            $endereco->create($_POST['cep'],$_POST['logradouro'],$_POST['numero'], $_POST['bairro'],$_POST['cidade'],$_POST['estado'],$_POST['complemento'],$_POST['endereco_id_usuario']);

            header("Location: ./?classe=Endereco&acao=all");
            
        }   

        include 'view/Endereco_create.php';


    }





}