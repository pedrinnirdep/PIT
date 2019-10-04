<?php

class Relatorio{
    private $p_num;
    private $data_inicio;
    private $data_fim;

    private $con;

    public function __construct($p_num=null, $data_inicio=null, $data_fim=null){

        $this->p_num = $p_num;
        $this->data_inicio = $data_inicio;
        $this->data_fim = $data_fim;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function FiltroRelatorio(){
        $sql = $this->con->prepare("CALL filtro_mais_comprados(?, '')");
        $sql->execute(array($this->p_num));

        $resposta = $sql->fetchAll(PDO::FETCH_CLASS);

        return $resposta;
    }

    public function FiltroRelatorioData(){
        $sql = $this->con->prepare("call rel_mais_comprados(1, '2019-10-21', '2019-09-22')");
        $sql->execute(array($this->p_num, $this->data_inicio, $this->data_fim));

        $resposta = $sql->fetchAll(PDO::FETCH_CLASS);

        return $resposta;
    }
}