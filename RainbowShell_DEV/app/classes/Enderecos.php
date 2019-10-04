<?php

require_once 'Core.php';

class Enderecos extends Core{

    public function inserirEndereco($cep, $logradouro, $numero, $complemento, $bairro, $cidade, $estado, $idUsuario)
    {
        

        $sql = "INSERT INTO `tbl_endereco`(`id_endereco`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `endereco_id_usuario`) 
                                    VALUES (null, :cep, :logradouro, :numero, :complemento, :bairro, :cidade, :estado, :idUsuario)";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(":cep", $cep, \PDO::PARAM_INT);
        $stmt->bindParam(":logradouro", $logradouro, \PDO::PARAM_STR);
        $stmt->bindParam(":numero", $numero, \PDO::PARAM_INT);
        $stmt->bindParam(":complemento", $complemento, \PDO::PARAM_STR);
        $stmt->bindParam(":bairro", $bairro , \PDO::PARAM_STR);
        $stmt->bindParam(":cidade", $cidade, \PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, \PDO::PARAM_STR);
        $stmt->bindParam(":idUsuario", $idUsuario, \PDO::PARAM_INT);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo Core::sucesso("Sucesso!");
        } else{
            echo Core::erro("Erro no sistema, contate o administrador!");
        }
        
        
    }

    public function alterarEndereco($idEndereco, $cep, $logradouro, $numero, $complemento, $bairro, $cidade, $estado, $idUsuario)
    {

        $sql = "UPDATE  `tbl_endereco` SET 
                `cep`=:cep,
                `logradouro`=:logradouro,
                `numero`=:numero,
                `complemento`=:complemento,
                `bairro`=:bairro,
                `cidade`=:cidade,
                `estado`=:estado,
                `endereco_id_usuario`=:idUsuario
                WHERE id_endereco = :enderecoId";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(":enderecoId", $idEndereco, \PDO::PARAM_INT);
        $stmt->bindParam(":cep", $cep, \PDO::PARAM_INT);
        $stmt->bindParam(":logradouro", $logradouro, \PDO::PARAM_STR);
        $stmt->bindParam(":numero", $numero, \PDO::PARAM_INT);
        $stmt->bindParam(":complemento", $complemento, \PDO::PARAM_STR);
        $stmt->bindParam(":bairro", $bairro , \PDO::PARAM_STR);
        $stmt->bindParam(":cidade", $cidade, \PDO::PARAM_STR);
        $stmt->bindParam(":estado", $estado, \PDO::PARAM_STR);
        $stmt->bindParam(":idUsuario", $idUsuario, \PDO::PARAM_INT);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo Core::sucesso("Sucesso!");
        } else{
            echo Core::erro("Erro no sistema, contate o administrador!");
        }
        
        
    }

    public function listarEndereco($id){
        $sql = "SELECT * FROM tbl_endereco WHERE endereco_id_usuario = :id LIMIT 1";
        $stmt = Database::prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetchObject();
        $_SESSION['endereco'] = $row;
        return $row;
        
    }

}

?>

