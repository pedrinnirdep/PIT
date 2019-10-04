<?php

require_once 'Core.php';

class Estampas extends Core{

    public function enviarEstampa($nome, $descricao, $comissao, $tag, $id_usuario, $imagemNome, $diretorio, $imagemTmp)
    {

        $imgInsert = Core::imgUpload($diretorio, $imagemNome, $imagemTmp);

        if($imgInsert['status'] == 1)
        {

            $img = $imgInsert['img'];

            $sql = "INSERT INTO `tbl_estampa`(`id_estampa`, `nome`, `descricao`, `imagem`, `comissao`, `tag`, `aprovacao`, `estampa_id_usuario`) VALUES (null, :nome, :descricao, :imagem, :comissao, :tag, 0, :estampa_id_usuario)";
            $stmt = Database::prepare($sql);
            $stmt->bindParam(":nome", $nome, \PDO::PARAM_STR);
            $stmt->bindParam(":descricao", $descricao, \PDO::PARAM_STR);
            $stmt->bindParam(":imagem", $img, \PDO::PARAM_STR);
            $stmt->bindParam(":comissao", $comissao, \PDO::PARAM_INT);
            $stmt->bindParam(":tag", $tag , \PDO::PARAM_STR);
            $stmt->bindParam(":estampa_id_usuario", $id_usuario, \PDO::PARAM_INT);
            $stmt->execute();
    
            if($stmt->rowCount() > 0){
                //criar sessão
                echo Core::sucesso("Estampa enviada para aprovação!");
            } else{
                echo Core::erro("Erro no sistema, contate o administrador!");
            }
        }
        else
        {
            echo Core::erro($imgInsert['message']);
        }
    }

    public function listarEstampasUsuario($id){
        $sql = "SELECT * FROM tbl_estampa WHERE estampa_id_usuario = :idUsuario";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(":idUsuario", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    public function deletarEstampa($id, $img){
        $sql = "DELETE FROM tbl_estampa WHERE id_estampa = :idEstampa";
        $stmt = Database::prepare($sql);
        $stmt->bindParam(":idEstampa", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll();
        unlink($_SERVER['DOCUMENT_ROOT'] . '/PIT/RainbowShell_DEV/' . $img);

    }
    
}

?>

