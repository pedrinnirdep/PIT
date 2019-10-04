<?php

require_once 'model/Tipo.php';

class TipoController
{
    public function all(){

        $obj = new Tipo();
        $tipos = $obj->all();
        include "view/Tipo_all.php";

    }

    public function read(){

        $tipo = new Tipo($_GET['id_tipo']);
        $tipo->read();
        include 'view/Tipo_read.php';

    }

    public function update(){

        $tipo = new Tipo($_GET['id_tipo']);

        if ( isset($_POST['nome'])  ) {

            $tipo->setNome($_POST['nome']);
            $tipo->save();

            header("Location: ./?classe=Tipo&acao=all");

        }

        $tipo->update();
        include 'view/Tipo_update.php';

    }

    public function delete(){

        $tipo = new Tipo($_GET['id_tipo']);
        $tipo->delete();
        header("Location: ./?classe=Tipo&acao=all");


    }

    public function create(){


        if(isset($_POST['nome'])){
            $tipo = new Tipo();
            $tipo->create($_POST['nome']);
            header("Location: ./?classe=Tipo&acao=all");
        }


        include 'view/Tipo_create.php';


    }
}