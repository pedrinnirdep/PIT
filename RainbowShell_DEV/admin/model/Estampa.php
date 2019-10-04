<?php

class Estampa
{
    private $id_estampa;
    private $nome;
    private $descricao;
    private $imagem;
    private $comissao;
    private $tag;
    private $aprovacao;
    private $estampa_id_usuario;

    private $con;

    public function __construct($id_estampa=NULL, $nome=NULL, $descricao=NULL, $imagem=NULL, $comissao=NULL, $tag=NULL, $aprovacao=NULL, $estampa_id_usuario=NULL)
    {
        $this->id_estampa = $id_estampa;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
        $this->comissao = $comissao;
        $this->tag = $tag;
        $this->aprovacao = $aprovacao;
        $this->estampa_id_usuario = $estampa_id_usuario;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM tbl_estampa ORDER BY aprovacao");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }

    public function read(){

        $sql = $this->con->prepare("SELECT * FROM tbl_estampa WHERE id_estampa=?");
        $sql->execute( array($this->id_estampa) );
        $estampa = $sql->fetchObject();

        if ( $estampa ){
        
        $this->id_estampa = $estampa->id_estampa;
        $this->nome = $estampa->nome;
        $this->descricao = $estampa->descricao;
        $this->imagem = $estampa->imagem;
        $this->comissao = $estampa->comissao;
        $this->tag = $estampa->tag;
        $this->aprovacao = $estampa->aprovacao;
        $this->estampa_id_usuario = $estampa->estampa_id_usuario;
        }


    }

    public function update(){


        $sql = $this->con->prepare("SELECT * FROM tbl_estampa WHERE id_estampa=?");
        $sql->execute( array($this->id_estampa) );
        $estampa = $sql->fetchObject();

        if ( $estampa ){
        
        $this->id_estampa = $estampa->id_estampa;
        $this->nome = $estampa->nome;
        $this->descricao = $estampa->descricao;
        $this->imagem = $estampa->imagem;
        $this->comissao = $estampa->comissao;
        $this->tag = $estampa->tag;
        $this->aprovacao = $estampa->aprovacao;
        $this->estampa_id_usuario = $estampa->estampa_id_usuario;

        }

    }

    public function save(){

        $sql = $this->con->prepare("UPDATE tbl_estampa SET estampa_id_usuario=?, aprovacao=?, tag=?, comissao=?, imagem=?, descricao=?, nome=? WHERE id_estampa=?");
        $sql->execute( array($this->estampa_id_usuario, $this->aprovacao, $this->tag, $this->comissao, $this->imagem, $this->descricao, $this->nome, $this->id_estampa) );

        if ($sql->errorCode()=='00000'  ){
            $_SESSION['msg']="<div class='alert alert-success'>Registro Alterado</div>";
        }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }

    public function delete(){

        $sql = $this->con->prepare("DELETE FROM tbl_estampa WHERE id_estampa=?");
        $sql->execute( array($this->id_estampa) );
    }

    public function create($nome, $descricao, $imagem, $comissao, $tag, $aprovacao, $estampa_id_usuario){

        $sql = $this->con->prepare("INSERT INTO tbl_estampa VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute( array($nome, $descricao, $imagem, $comissao, $tag, $aprovacao, $estampa_id_usuario) );

    }

    public function getId_estampa()
    {
        return $this->id_estampa;
    }

    public function setId_estampa($id_estampa)
    {
        $this->id_estampa = $id_estampa;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    public function getComissao()
    {
        return $this->comissao;
    }

    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    public function getAprovacao()
    {
        return $this->aprovacao;
    }

    public function setAprovacao($aprovacao)
    {
        $this->aprovacao = $aprovacao;
    }

    public function getEstampa_id_usuario()
    {
        return $this->estampa_id_usuario;
    }

    public function setEstampa_id_usuario($estampa_id_usuario)
    {
        $this->estampa_id_usuario = $estampa_id_usuario;
    }

    public function __toString()
    {
        return "$this->id_estampa $this->nome $this->descricao $this->imagem $this->comissao $this->tag $this->aprovacao $this->estampa_id_usuario <br>";
    }

}