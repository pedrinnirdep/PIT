<?php

class Produto
{
    private $id_produto;
    private $datamod;
    private $nome;
    private $descricao;
    private $valor;
    private $imagem;
    private $produto_id_estampa;
    private $produto_id_tipo;

    private $con;

    public function __construct($id_produto=NULL, $datamod=NULL, $nome=NULL, $descricao=NULL, $valor=NULL, $imagem=NULL, $produto_id_estampa=NULL, $produto_id_tipo=NULL)
    {
        $this->id_produto = $id_produto;
        $this->datamod = $datamod;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->imagem = $imagem;
        $this->produto_id_estampa = $produto_id_estampa;
        $this->produto_id_tipo = $produto_id_tipo;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM tbl_produto ORDER BY nome");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }

    public function read(){

        $sql = $this->con->prepare("SELECT * FROM tbl_produto WHERE id_produto=?");
        $sql->execute( array($this->id_produto) );
        $produto = $sql->fetchObject();

        if ( $produto ){
        
        $this->id_produto = $produto->id_produto;
        $this->datamod = $produto->datamod;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->valor = $produto->valor;
        $this->imagem = $produto->imagem;
        $this->produto_id_estampa = $produto->produto_id_estampa;
        $this->produto_id_tipo = $produto->produto_id_tipo;
        }

    }

    public function update(){


        $sql = $this->con->prepare("SELECT * FROM tbl_produto WHERE id_produto=?");
        $sql->execute( array($this->id_produto) );
        $produto = $sql->fetchObject();

        if ( $produto ){

        $this->id_produto = $produto->id_produto;
        $this->datamod = $produto->datamod;
        $this->nome = $produto->nome;
        $this->descricao = $produto->descricao;
        $this->valor = $produto->valor;
        $this->imagem = $produto->imagem;
        $this->produto_id_estampa = $produto->produto_id_estampa;
        $this->produto_id_tipo = $produto->produto_id_tipo;
        }

    }

    public function save(){

        $sql = $this->con->prepare("UPDATE tbl_produto SET produto_id_tipo=?, produto_id_estampa=?, imagem=?, valor=?, descricao=?, nome=?, datamod=? WHERE id_produto=?");
        $sql->execute( array($this->produto_id_tipo, $this->produto_id_estampa, $this->imagem, $this->valor, $this->descricao, $this->nome, $this->datamod, $this->id_produto) );

        if ($sql->errorCode()=='00000'  ){
            $_SESSION['msg']="<div class='alert alert-success'>Registro Alterado</div>";
        }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }

    public function delete(){

        $sql = $this->con->prepare("DELETE FROM tbl_produto WHERE id_produto=?");
        $sql->execute( array($this->id_produto) );
    }

    public function create($datamod, $nome, $descricao, $valor, $imagem, $produto_id_estampa, $produto_id_tipo){

        $sql = $this->con->prepare("INSERT INTO tbl_produto VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute( array($datamod, $nome, $descricao, $valor, $imagem, $produto_id_estampa, $produto_id_tipo) );

    }

    public function getId_produto()
    {
        return $this->id_produto;
    }

    public function setId_produto($id_produto)
    {
        $this->id = $id_produto;
    }

    public function getDatamod()
    {
        return $this->datamod;
    }

    public function setDatamod($datamod)
    {
        $this->datamod = $datamod;
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


    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    public function getProdutoIdEstampa()
    {
        return $this->produto_id_estampa;
    }

    public function setProdutoIdEstampa($produto_id_estampa)
    {
        $this->produto_id_estampa = $produto_id_estampa;
    }

    public function getProdutoIdTipo()
    {
        return $this->produto_id_tipo;
    }

    public function setProdutoIdTipo($produto_id_tipo)
    {
        $this->produto_id_tipo = $produto_id_tipo;
    }

    public function __toString()
    {
        return "$this->id_produto $this->datamod $this->nome $this->descricao $this->valor $this->imagem $this->produto_id_estampa $this->produto_id_tipo <br>";
    }

}