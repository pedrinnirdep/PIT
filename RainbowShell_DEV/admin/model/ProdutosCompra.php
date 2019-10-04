<?php

class ProdutosCompra
{
    private $id_produtos_compra;
    private $quantidade;
    private $produtos_compra_id_produto;
    private $produtos_compra_id_compra;

    private $con;

    public function __construct($id_produtos_compra=NULL, $quantidade=NULL, $produtos_compra_id_produto=NULL, $produtos_compra_id_compra=NULL)
    {
        $this->id_produtos_compra = $id_produtos_compra;
        $this->quantidade = $quantidade;
        $this->produtos_compra_id_produto = $produtos_compra_id_produto;
        $this->produtos_compra_id_compra = $produtos_compra_id_compra;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM tbl_produtos_compra ORDER BY id_produtos_compra");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }

    public function read(){

        $sql = $this->con->prepare("SELECT * FROM tbl_produtos_compra WHERE id_produtos_compra=?");
        $sql->execute( array($this->id_produtos_compra) );
        $produtos_compra = $sql->fetchObject();

        if ( $produtos_compra ){
        
            $this->id_produtos_compra = $produtos_compra->id_produtos_compra;
            $this->quantidade = $produtos_compra->quantidade;
            $this->produtos_compra_id_produto = $produtos_compra->produtos_compra_id_produto;
            $this->produtos_compra_id_compra = $produtos_compra->produtos_compra_id_compra;
        }


    }

    public function update(){


        $sql = $this->con->prepare("SELECT * FROM tbl_produtos_compra WHERE id_produtos_compra=?");
        $sql->execute( array($this->id_produtos_compra) );
        $produtos_compra = $sql->fetchObject();

        if ( $produtos_compra ){
        
            $this->id_produtos_compra = $produtos_compra->id_produtos_compra;
            $this->quantidade = $produtos_compra->quantidade;
            $this->produtos_compra_id_produto = $produtos_compra->produtos_compra_id_produto;
            $this->produtos_compra_id_compra = $produtos_compra->produtos_compra_id_compra;

        }

    }

    public function save(){

        $sql = $this->con->prepare("UPDATE tbl_produtos_compra SET produtos_compra_id_compra=?, produtos_compra_id_produto=?, quantidade=? WHERE id_produtos_compra=?");
        $sql->execute( array($this->produtos_compra_id_compra, $this->produtos_compra_id_produto, $this->quantidade, $this->id_produtos_compra) );

        if ($sql->errorCode()=='00000'  ){
            $_SESSION['msg']="<div class='alert alert-success'>Registro Alterado</div>";
        }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }

    public function delete(){

        $sql = $this->con->prepare("DELETE FROM tbl_produtos_compra WHERE id_produtos_compra=?");
        $sql->execute( array($this->id_produtos_compra) );
    }

    public function create($quantidade, $produtos_compra_id_produto, $produtos_compra_id_compra){

        $sql = $this->con->prepare("INSERT INTO tbl_produtos_compra VALUES(NULL, ?, ?, ?)");
        $sql->execute( array($quantidade, $produtos_compra_id_produto, $produtos_compra_id_compra) );

    }

    public function getId_produtos_compra()
    {
        return $this->id_produtos_compra;
    }

    public function setId_produtos_compra($id_produtos_compra)
    {
        $this->id_produtos_compra = $id_produtos_compra;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getProdutosCompraIdProduto()
    {
        return $this->produtos_compra_id_produto;
    }

    public function setProdutosCompraIdProduto($produtos_compra_id_produto)
    {
        $this->produtos_compra_id_produto = $produtos_compra_id_produto;
    }

    public function getProdutosCompraIdCompra()
    {
        return $this->produtos_compra_id_compra;
    }

    public function setProdutosCompraIdCompra($produtos_compra_id_compra)
    {
        $this->produtos_compra_id_compra = $produtos_compra_id_compra;
    }

    public function __toString()
    {
        return "$this->id_produtos_compra $this->quantidade $this->produtos_compra_id_produto $this->produtos_compra_id_compra <br>";
    }

}