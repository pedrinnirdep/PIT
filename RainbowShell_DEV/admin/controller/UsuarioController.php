<?php

require_once 'model/Usuario.php';

class UsuarioController
{
    public function all(){

        $obj = new Usuario();
        $usuarios = $obj->all();
        include "view/Usuario_all.php";

    }

    public function read(){

        $usuario = new Usuario($_GET['id_usuario']);
        $usuario->read();
        include 'view/Usuario_read.php';

    }

    public function update(){

        $usuario = new Usuario($_GET['id_usuario']);

        if ( isset($_POST['nome'])  ) {

            $usuario->setNome($_POST['nome']);
            $usuario->setSobrenome($_POST['sobrenome']);
            $usuario->setCpf($_POST['cpf']);
            $usuario->setTelefone($_POST['telefone']);
            $usuario->setImagem($_POST['imagem']);
            $usuario->setEmail($_POST['email']);
            $usuario->setSenha($_POST['senha']);
            $usuario->setTipo($_POST['tipo']);
            $usuario->save();

            header("Location: ./?classe=Usuario&acao=all");

        }

        $usuario->update();
        include 'view/Usuario_update.php';

    }

    public function delete(){

        $usuario = new Usuario($_GET['id_usuario']);
        $usuario->delete();
        header("Location: ./?classe=Usuario&acao=all");


    }

    public function create(){

        if(isset($_POST['nome'])){
            $usuario = new Usuario();
            $usuario->create($_POST['nome'],$_POST['sobrenome'],$_POST['cpf'],$_POST['telefone'],$_POST['imagem'],$_POST['email'],$_POST['senha'],$_POST['tipo']);
            header("Location: ./?classe=Usuario&acao=all");
        }


        include 'view/Usuario_create.php';


    }
}