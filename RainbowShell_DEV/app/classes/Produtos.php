<?php

require_once 'Core.php';

class Produtos extends Core{

    public function listarTodos(){
        $sql = "SELECT * FROM tbl_produto";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    public function listarNovos($limite){
        $sql = "SELECT * FROM tbl_produto ORDER BY datamod DESC LIMIT :limite";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":limite", $limite, \PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    public function listarProdutosMaisComprados(){
        $sql = "SELECT * FROM tbl_produto";
        $stmt = Database::prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    public function listarProdutoId($id){
        $sql = "SELECT * FROM tbl_produto WHERE id_produto = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    public function listarViewProdutos($id){
        $sql = "SELECT * FROM produto_dados WHERE produto_id = :id";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetchObject();
        return $row;
    }

    public function produtoBusca($busca)
    {
        $sql = "SELECT * FROM tbl_produto WHERE nome LIKE :busca";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":busca", "%$busca%", \PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    }

}