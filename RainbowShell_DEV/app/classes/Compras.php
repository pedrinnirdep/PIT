<?php

require_once 'Core.php';

class Compras extends Core{

    public function obterEndereco($id){
        $sql = "SELECT id_endereco FROM tbl_endereco WHERE tbl_cliente_id_cliente = :id LIMIT 1";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetchObject();

        if($stmt->rowCount() > 0)
        {
            return $row->id_endereco;
        }
        else
        {
            return false;
        }
        
    }

    public function inserirProdutoDeCompra($quantidade, $cor, $tamanho, $idProduto)
    {
        $sql = 
        "INSERT INTO `tbl_produtos_de_compra`(`id_produtos_de_compra`, `quantidade`, `var`, `session`, `tbl_produto_id_produto`, `tbl_compra_id_compra`) 
        VALUES (null, :quantidade, :var, 0, :id, null); SELECT LAST_INSERT_ID() as lastId;";
        $stmt = Database::prepare($sql);
        $var = "Cor: ".$cor.", Tamanho: ".$tamanho;
        $stmt->bindParam(":quantidade", $quantidade, \PDO::PARAM_STR);
        $stmt->bindParam(":var", $var, \PDO::PARAM_STR);
        $stmt->bindParam(":id", $idProduto, \PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetchObject();
        

        if($stmt->rowCount() > 0){
            //criar sessão
            echo Core::sucesso("Sucesso!");
        } else{
            echo Core::erro("Erro no sistema, contate o administrador!");
        }
    }

    public function inserirCompra($cliente, $cor, $tamanho, $idProduto)
    {
        
        if($cliente == "")
        {
            echo 1;
            
        }
        else if(Compras::obterEndereco($cliente) == false)
        {
            echo 2;
        }
        else
        {
            $sql = 
            "INSERT INTO `tbl_compra`
            (`id_compra`, `datacompra`, `dataentrega`, `frete`, `desconto`, `status`, `valor_total`, `var`, `temp_tbl_id_produto`, `tbl_endereco_id_endereco`, `tbl_cliente_id_cliente`) 
            VALUES (null, CURRENT_DATE(), DATE_ADD(CURRENT_DATE(),INTERVAL 15 DAY), 0, 0, 0, 40, :var, :produto, :ender, :cliente)";
            $stmt = Database::prepare($sql);
            $ender = Compras::obterEndereco($cliente);
            $var = "Cor: ".$cor.", Tamanho: ".$tamanho;
            $stmt->bindParam(":var", $var, \PDO::PARAM_STR);
            $stmt->bindParam(":produto", $idProduto, \PDO::PARAM_INT);
            $stmt->bindParam(":ender", $ender, \PDO::PARAM_STR);
            $stmt->bindParam(":cliente", $cliente, \PDO::PARAM_INT);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                //criar sessão
                echo 0;
            } else{
                echo 3;
            }
        }   
    }
}