<?php

class Tipo
{
    private $id_tipo;
    private $nome;

    private $con;

    public function __construct($id_tipo=NULL,$nome=NULL)
    {
        $this->id_tipo = $id_tipo;
        $this->nome = $nome;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM tbl_tipo ORDER BY id_tipo");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }

    public function read(){

        $sql = $this->con->prepare("SELECT * FROM tbl_tipo WHERE id_tipo=?");
        $sql->execute( array($this->id_tipo) );
        $tipo = $sql->fetchObject();

        if ( $tipo ){
        
            $this->id_tipo = $tipo->id_tipo;
            $this->nome = $tipo->nome;
        }

    }

    public function update(){


        $sql = $this->con->prepare("SELECT * FROM tbl_tipo WHERE id_tipo=?");
        $sql->execute( array($this->id_tipo) );
        $tipo = $sql->fetchObject();

        if ( $tipo ){

            $this->id_tipo = $tipo->id_tipo;
            $this->nome = $tipo->nome;
        }

    }

    public function save(){

        $sql = $this->con->prepare("UPDATE tbl_tipo SET nome=? WHERE id_tipo=?");
        $sql->execute( array($this->nome, $this->id_tipo) );

        if ($sql->errorCode()=='00000'  ){
            $_SESSION['msg']="<div class='alert alert-success'>Registro Alterado</div>";
        }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }

    public function delete(){

        $sql = $this->con->prepare("DELETE FROM tbl_tipo WHERE id_tipo=?");
        $sql->execute( array($this->id_tipo) );
    }

    public function create($nome){

        $sql = $this->con->prepare("INSERT INTO tbl_tipo VALUES(NULL, ?)");
        $sql->execute( array($nome) );

    }

    public function getId_tipo()
    {
        return $this->id_tipo;
    }

    public function setId_tipo($id_tipo)
    {
        $this->id_tipo = $id_tipo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function __toString()
    {
        return "$this->id_tipo $this->nome <br>";
    }

}