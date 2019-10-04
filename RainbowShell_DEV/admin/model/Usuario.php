<?php

class Usuario
{
    private $id_usuario;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $telefone;
    private $imagem;
    private $email;
    private $senha;
    private $tipo;

    private $con;

    public function __construct($id_usuario=NULL, $nome=NULL, $sobrenome=NULL, $cpf=NULL, $telefone=NULL, $imagem=NULL, $email=NULL, $senha=NULL, $tipo=NULL)
    {
        $this->id_usuario = $id_usuario;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->imagem = $imagem;
        $this->email = $email;
        $this->senha = $senha;
        $this->tipo = $tipo;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM tbl_usuario ORDER BY nome");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);

    }

    public function read(){

        $sql = $this->con->prepare("SELECT * FROM tbl_usuario WHERE id_usuario=?");
        $sql->execute( array($this->id_usuario) );
        $usuario = $sql->fetchObject();

        if ( $usuario ){
            $this->id_usuario = $usuario->id_usuario; 
            $this->nome = $usuario->nome;
            $this->sobrenome = $usuario->sobrenome;
            $this->cpf = $usuario->cpf;
            $this->telefone = $usuario->telefone;
            $this->imagem = $usuario->imagem;
            $this->email = $usuario->email;
            $this->senha = $usuario->senha;
            $this->tipo = $usuario->tipo;
        }


    }

    public function update(){


        $sql = $this->con->prepare("SELECT * FROM tbl_usuario WHERE id_usuario=?");
        $sql->execute( array($this->id_usuario) );
        $usuario = $sql->fetchObject();

        if ( $usuario ){

            $this->id_usuario = $usuario->id_usuario;
            $this->nome = $usuario->nome;
            $this->sobrenome = $usuario->sobrenome;
            $this->cpf = $usuario->cpf;
            $this->telefone = $usuario->telefone;
            $this->imagem = $usuario->imagem;
            $this->email = $usuario->email;
            $this->senha = $usuario->senha;
            $this->tipo = $usuario->tipo;

        }

    }

    public function save(){

        $sql = $this->con->prepare("UPDATE tbl_usuario SET tipo=?, senha=?, email=?, imagem=?, telefone=?, cpf=?, sobrenome=?, nome=? WHERE id_usuario=?");
        $sql->execute( array($this->tipo, $this->senha, $this->email, $this->imagem, $this->telefone, $this->cpf, $this->sobrenome, $this->nome, $this->id_usuario) );

        if ($sql->errorCode()=='00000'  ){
            $_SESSION['msg']="<div class='alert alert-success'>Registro Alterado</div>";
        }else{
            $_SESSION['msg']="<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }
    }

    public function delete(){

        $sql = $this->con->prepare("DELETE FROM tbl_usuario WHERE id_usuario=?");
        $sql->execute( array($this->id_usuario) );
    }

    public function create($nome, $sobrenome, $cpf, $telefone, $imagem, $email, $senha, $tipo){

        $sql = $this->con->prepare("INSERT INTO tbl_usuario VALUES(NULL, ?, ?, ?, ?, ?, ?, ?, ?)");
        $sql->execute( array($nome, $sobrenome, $cpf, $telefone, $imagem, $email, $senha, $tipo) );

    }

    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function __toString()
    {
        return "$this->id_usuario $this->nome $this->sobrenome $this->cpf $this->telefone $this->imagem $this->email $this->senha $this->tipo <br>";
    }

}