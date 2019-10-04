<?php

Class Endereco
{
    private $id_endereco;
    private $cep;
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $complemento;
    private $endereco_id_usuario;


    private $con;

    

    public function __construct($id_endereco=NULL, $cep=NULL, $logradouro=NULL, $numero=NULL,  $bairro=NULL ,  $cidade=NULL ,  $estado=NULL ,  $complemento=NULL ,  $endereco_id_usuario=NULL)
    {
        $this->id_endereco = $id_endereco;
        $this->cep = $cep;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->complemento = $complemento;
        $this->endereco_id_usuario = $endereco_id_usuario;


        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }


    public function all(){

        $sql= $this->con->prepare("SELECT * FROM tbl_endereco ORDER BY id_endereco");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }


    public function read(){

        $sql = $this->con->prepare("SELECT * FROM tbl_endereco WHERE id_endereco=?");
        $sql->execute( array($this->id_endereco) );
        $endereco = $sql->fetchObject();

        if ( $endereco ){
            $this->id_endereco = $endereco->id_endereco; 
            $this->cep = $endereco->cep;
            $this->logradouro = $endereco->logradouro;
            $this->numero = $endereco->numero;
            $this->bairro = $endereco->bairro;
            $this->cidade = $endereco->cidade;
            $this->estado = $endereco->estado;
            $this->complemento = $endereco->complemento;
            $this->endereco_id_usuario = $endereco->endereco_id_usuario;
        }


    }

    function update(){


        $sql = $this->con->prepare("SELECT * FROM tbl_endereco WHERE id_endereco=?");
        $sql->execute( array($this->id_endereco) );
        $endereco = $sql->fetchObject();

        if ( $endereco ){
            $this->id_endereco = $endereco->id_endereco; 
            $this->cep = $endereco->cep;
            $this->logradouro = $endereco->logradouro;
            $this->numero = $endereco->numero;
            $this->bairro = $endereco->bairro;
            $this->cidade = $endereco->cidade;
            $this->estado = $endereco->estado;
            $this->complemento = $endereco->complemento;
            $this->endereco_id_usuario = $endereco->endereco_id_usuario;
        }




    }

    public function save(){

        $sql = $this->con->prepare("UPDATE tbl_endereco SET cep=?, logradouro=?, numero=?, bairro=?, cidade=? , estado=?, complemento=?, endereco_id_usuario=? WHERE id_endereco=?");
        $sql->execute( array($this->cep, $this->logradouro, $this->numero, $this->bairro, $this->cidade, $this->estado, $this->complemento, $this->endereco_id_usuario, $this->id_endereco) );

        if ($sql->errorCode()=='00000'  ){
            $_SESSION['msg']="<div class='alert alert-success'>Registro Alterado</div>";
        }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
        
    }


    public function delete(){


        $sql = $this->con->prepare("DELETE  FROM tbl_endereco WHERE id_endereco=?");
        $sql->execute( array($this->id_endereco) );


    }

    public function  create($cep, $logradouro,  $numero,  $bairro,  $cidade,  $estado,  $complemento, $endereco_id_usuario){

        $sql = $this->con->prepare("INSERT INTO tbl_endereco VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute( array($cep, $logradouro,  $numero,  $bairro,  $cidade,  $estado,  $complemento, $endereco_id_usuario) );

    }


    public function getId_endereco()
    {
        return $this->id_endereco;
    }

    public function setId_endereco($id_endereco)
    {
        $this->id_endereco = $id_endereco;

        return $this;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function getComplemento()
    {
        return $this->complemento;
    }

    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    public function getEndereco_id_usuario()
    {
        return $this->endereco_id_usuario;
    }

    public function setEndereco_id_usuario($endereco_id_usuario)
    {
        $this->endereco_id_usuario = $endereco_id_usuario;

        return $this;
    }

    public function __toString()
    {
        return "$this->id_endereco $this->cep $this->logradouro $this->numero $this->bairro $this->cidade $this->estado $this->complemento $this->endereco_id_usuario <br>";
    }
}