<?php

Class Compra
{
    private $id_compra;
    private $data_compra;
    private $data_entrega;
    private $frete;
    private $desconto;
    private $valor_total;
    private $status;
    private $compra_id_usuario;
    private $compra_id_endereco;


    private $con;


    
    public function __construct($id_compra=NULL, $data_compra=NULL, $data_entrega=NULL, $frete=NULL,  $desconto=NULL ,  $valor_total=NULL ,  $status=NULL ,  $compra_id_usuario=NULL ,  $compra_id_endereco=NULL)
    {
        $this->id_compra = $id_compra;
        $this->data_compra = $data_compra;
        $this->data_entrega = $data_entrega;
        $this->frete = $frete;
        $this->desconto = $desconto;
        $this->valor_total = $valor_total;
        $this->status = $status;
        $this->compra_id_usuario = $compra_id_usuario;
        $this->compra_id_endereco = $compra_id_endereco;


        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }


    public function all(){

        $sql= $this->con->prepare("SELECT * FROM tbl_compra ORDER BY id_compra");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }


    public function read(){

        $sql = $this->con->prepare("SELECT * FROM tbl_compra WHERE id_compra=?");
        $sql->execute( array($this->id_compra) );
        $compra = $sql->fetchObject();

        if ( $compra ){
            $this->id_compra = $compra->id_compra; 
            $this->data_compra = $compra->data_compra;
            $this->data_entrega = $compra->data_entrega;
            $this->frete = $compra->frete;
            $this->desconto = $compra->desconto;
            $this->valor_total = $compra->valor_total;
            $this->status = $compra->status;
            $this->compra_id_usuario = $compra->compra_id_usuario;
            $this->compra_id_endereco = $compra->compra_id_endereco;
        }


    }

    function update(){


        $sql = $this->con->prepare("SELECT * FROM tbl_compra WHERE id_compra=?");
        $sql->execute( array($this->id_compra) );
        $compra = $sql->fetchObject();

        if ( $compra ){
            $this->id_compra = $compra->id_compra; 
            $this->data_compra = $compra->data_compra;
            $this->data_entrega = $compra->data_entrega;
            $this->frete = $compra->frete;
            $this->desconto = $compra->desconto;
            $this->valor_total = $compra->valor_total;
            $this->status = $compra->status;
            $this->compra_id_usuario = $compra->compra_id_usuario;
            $this->compra_id_endereco = $compra->compra_id_endereco;
        }




    }

    public function save(){

        $sql = $this->con->prepare("UPDATE tbl_compra SET data_compra=?, data_entrega=?, frete=?, desconto=?, valor_total=? , status=?, compra_id_usuario=?, compra_id_endereco=? WHERE id_compra=?");
        $sql->execute( array($this->data_compra, $this->data_entrega, $this->frete, $this->desconto, $this->valor_total, $this->status, $this->compra_id_usuario, $this->compra_id_endereco, $this->id_compra) );

        if ($sql->errorCode()=='00000'  ){
            $_SESSION['msg']="<div class='alert alert-success'>Registro Alterado</div>";
        }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }

    public function delete(){


        $sql = $this->con->prepare("DELETE  FROM tbl_compra WHERE id_compra=?");
        $sql->execute( array($this->id_compra) );

    }

    public function  create($data_compra, $data_entrega,  $frete,  $desconto,  $valor_total,  $status,  $compra_id_usuario, $compra_id_endereco){

        $sql = $this->con->prepare("INSERT INTO tbl_compra VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute( array($data_compra, $data_entrega,  $frete,  $desconto,  $valor_total,  $status,  $compra_id_usuario, $compra_id_endereco) );

    }

    /**
     * Get the value of id_compra
     */ 
    public function getId_compra()
    {
        return $this->id_compra;
    }

    /**
     * Set the value of id_compra
     *
     * @return  self
     */ 
    public function setId_compra($id_compra)
    {
        $this->id_compra = $id_compra;

        return $this;
    }

    /**
     * Get the value of data_compra
     */ 
    public function getData_compra()
    {
        return $this->data_compra;
    }

    /**
     * Set the value of data_compra
     *
     * @return  self
     */ 
    public function setData_compra($data_compra)
    {
        $this->data_compra = $data_compra;

        return $this;
    }

    /**
     * Get the value of data_entrega
     */ 
    public function getData_entrega()
    {
        return $this->data_entrega;
    }

    /**
     * Set the value of data_entrega
     *
     * @return  self
     */ 
    public function setData_entrega($data_entrega)
    {
        $this->data_entrega = $data_entrega;

        return $this;
    }

    /**
     * Get the value of frete
     */ 
    public function getFrete()
    {
        return $this->frete;
    }

    /**
     * Set the value of frete
     *
     * @return  self
     */ 
    public function setFrete($frete)
    {
        $this->frete = $frete;

        return $this;
    }

    /**
     * Get the value of desconto
     */ 
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * Set the value of desconto
     *
     * @return  self
     */ 
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;

        return $this;
    }

    /**
     * Get the value of valor_total
     */ 
    public function getValor_total()
    {
        return $this->valor_total;
    }

    /**
     * Set the value of valor_total
     *
     * @return  self
     */ 
    public function setValor_total($valor_total)
    {
        $this->valor_total = $valor_total;

        return $this;
    }

    
    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of compra_id_usuario
     */ 
    public function getCompra_id_usuario()
    {
        return $this->compra_id_usuario;
    }

    /**
     * Set the value of compra_id_usuario
     *
     * @return  self
     */ 
    public function setCompra_id_usuario($compra_id_usuario)
    {
        $this->compra_id_usuario = $compra_id_usuario;

        return $this;
    }

    /**
     * Get the value of compra_id_endereco
     */ 
    public function getCompra_id_endereco()
    {
        return $this->compra_id_endereco;
    }

    /**
     * Set the value of compra_id_endereco
     *
     * @return  self
     */ 
    public function setCompra_id_endereco($compra_id_endereco)
    {
        $this->compra_id_endereco = $compra_id_endereco;

        return $this;
    }

    public function __toString()
    {
        return "$this->id_compra $this->data_compra $this->data_entrega $this->frete $this->desconto $this->valor_total
         $this->status $this->compra_id_usuario $this->compra_id_endereco <br>";
    }

    }