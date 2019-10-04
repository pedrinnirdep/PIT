<?php

Class Estoque
{
    private $id_estoque;
    private $cor;
    private $tamanho;
    private $material;
    private $capacidade;
    private $volume;
    private $quantidade;
    private $preco_compra;
    private $estoque_id_tipo;
    
    private $con;


    public function __construct($id_estoque=NULL, $cor=NULL, $tamanho=NULL, $material=NULL,  $capacidade=NULL,  $volume=NULL,  $quantidade=NULL,  $preco_compra=NULL,  $estoque_id_tipo=NULL)
    {
        $this->id_estoque = $id_estoque;
        $this->cor = $cor;
        $this->tamanho = $tamanho;
        $this->material = $material;
        $this->capacidade = $capacidade;
        $this->volume = $volume;
        $this->quantidade = $quantidade;
        $this->preco_compra = $preco_compra;
        $this->estoque_id_tipo = $estoque_id_tipo;


        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }


    public function all(){

        $sql= $this->con->prepare("SELECT * FROM tbl_estoque ORDER BY id_estoque");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }


    public function read(){

        $sql = $this->con->prepare("SELECT * FROM tbl_estoque WHERE id_estoque=?");
        $sql->execute( array($this->id_estoque) );
        $estoque = $sql->fetchObject();

        if ( $estoque ){
            $this->id_estoque = $estoque->id_estoque; 
            $this->cor = $estoque->cor;
            $this->tamanho = $estoque->tamanho;
            $this->material = $estoque->material;
            $this->capacidade = $estoque->capacidade;
            $this->volume = $estoque->volume;
            $this->quantidade = $estoque->quantidade;
            $this->preco_compra = $estoque->preco_compra;
            $this->estoque_id_tipo = $estoque->estoque_id_tipo;
        }


    }

    function update(){


        $sql = $this->con->prepare("SELECT * FROM tbl_estoque WHERE id_estoque=?");
        $sql->execute( array($this->id_estoque) );
        $estoque = $sql->fetchObject();

        if ( $estoque ){
            $this->id_estoque = $estoque->id_estoque;
            $this->cor = $estoque->cor;
            $this->tamanho = $estoque->tamanho;
            $this->material = $estoque->material;
            $this->capacidade = $estoque->capacidade;
            $this->volume = $estoque->volume;
            $this->quantidade = $estoque->quantidade;
            $this->preco_compra = $estoque->preco_compra;
            $this->estoque_id_tipo = $estoque->estoque_id_tipo;
        }




    }

    public function save(){

        $sql = $this->con->prepare("UPDATE tbl_estoque SET cor=?, tamanho=?, material=?, capacidade=?, volume=?, quantidade=?, preco_compra=?, estoque_id_tipo=?  WHERE id_estoque=?");
        $sql->execute( array($this->cor, $this->tamanho, $this->material, $this->capacidade, $this->volume, $this->quantidade, $this->preco_compra, $this->estoque_id_tipo, $this->id_estoque) );


    }

    public function delete(){


        $sql = $this->con->prepare("DELETE  FROM tbl_estoque WHERE id_estoque=?");
        $sql->execute( array($this->id_estoque) );


    }

    public function  create($cor, $tamanho, $material, $capacidade, $volume, $quantidade, $preco_compra, $estoque_id_tipo){

        $sql = $this->con->prepare("INSERT INTO tbl_estoque VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute( array($cor, $tamanho, $material, $capacidade, $volume, $quantidade, $preco_compra, $estoque_id_tipo ) );

    }


    /**
     * Get the value of id_estoque
     */ 
    public function getId_estoque()
    {
        return $this->id_estoque;
    }

    /**
     * Set the value of id_estoque
     *
     * @return  self
     */ 
    public function setId_estoque($id_estoque)
    {
        $this->id_estoque = $id_estoque;

        return $this;
    }

    /**
     * Get the value of cor
     */ 
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     *
     * @return  self
     */ 
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of tamanho
     */ 
    public function getTamanho()
    {
        return $this->tamanho;
    }

    /**
     * Set the value of tamanho
     *
     * @return  self
     */ 
    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;

        return $this;
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of capacidade
     */ 
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     *
     * @return  self
     */ 
    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of volume
     */ 
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set the value of volume
     *
     * @return  self
     */ 
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @return  self
     */ 
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of preco_compra
     */ 
    public function getPreco_compra()
    {
        return $this->preco_compra;
    }

    /**
     * Set the value of preco_compra
     *
     * @return  self
     */ 
    public function setPreco_compra($preco_compra)
    {
        $this->preco_compra = $preco_compra;

        return $this;
    }

    /**
     * Get the value of estoque_id_tipo
     */ 
    public function getEstoque_id_tipo()
    {
        return $this->estoque_id_tipo;
    }

    /**
     * Set the value of estoque_id_tipo
     *
     * @return  self
     */ 
    public function setEstoque_id_tipo($estoque_id_tipo)
    {
        $this->estoque_id_tipo = $estoque_id_tipo;

        return $this;
    }

    /**
     * Get the value of con
     */ 
    public function getCon()
    {
        return $this->con;
    }

    /**
     * Set the value of con
     *
     * @return  self
     */ 
    public function setCon($con)
    {
        $this->con = $con;

        return $this;
    }
}