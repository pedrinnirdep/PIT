<?php

require_once 'model/Estampa.php';
require_once 'model/Usuario.php';

class EstampaController
{
    public function all(){

        $obj = new Estampa();
        $estampas = $obj->all();
        include "view/Estampa_all.php";

    }

    public function read(){

        $estampa = new Estampa($_GET['id_estampa']);
        $estampa->read();
        include 'view/Estampa_read.php';

    }

    public function update(){

        $estampa = new Estampa($_GET['id_estampa']);

        $obj = new Usuario();
        $usuarios = $obj->all();

        if ( isset($_POST['nome'])  ) {

            $estampa->setNome($_POST['nome']);
            $estampa->setDescricao($_POST['descricao']);
            $estampa->setImagem($_POST['imagem']);
            $estampa->setComissao($_POST['comissao']);
            $estampa->setTag($_POST['tag']);
            $estampa->setAprovacao($_POST['aprovacao']);
            $estampa->setEstampa_id_usuario($_POST['estampa_id_usuario']);
            $estampa->save();

            header("Location: ./?classe=Estampa&acao=all");

        }

        $estampa->update();
        include 'view/Estampa_update.php';

    }

    public function delete(){

        $estampa = new Estampa($_GET['id_usuario']);
        $estampa->delete();
        header("Location: ./?classe=Estampa&acao=all");


    }

    public function create(){

        $obj = new Usuario();
        $usuarios = $obj->all();

        if(isset($_POST['nome'])){
            $estampa = new Estampa();
            $estampa->create($_POST['nome'],$_POST['descricao'],$_POST['imagem'],$_POST['comissao'],$_POST['tag'],$_POST['aprovacao'],$_POST['estampa_id_usuario']);
            header("Location: ./?classe=Estampa&acao=all");
        }


        include 'view/Estampa_create.php';


    }
}