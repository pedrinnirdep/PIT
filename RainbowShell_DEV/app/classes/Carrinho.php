<?php

require_once 'Core.php';

class Carrinho extends Core{

    // public function adicionarCarrinho($id, $tamanho, $cor, $quantidade){
    
    //     $produto = array($id=> array( $tamanho, $cor, $quantidade));
    //     array_push($_SESSION['carrinho'], $produto);

    // }

    public function adicionarCarrinho($id, $tamanho, $cor, $quantidade){
    
        if(count($_SESSION['carrinho']['produto'][$id]) == 0)
        {
            $new_roduto = array(
                'cor' => $cor,
                'tamanho' => $tamanho,
                'quantidade' => $quantidade
            );
            
            $_SESSION['carrinho']['produto'][$id] = $new_roduto;
    
        }
        elseif(count($_SESSION['carrinho']['produto'][$id]) > 0)
        {
            $_SESSION['carrinho']['produto'][$id]['cor'] = $cor;
            $_SESSION['carrinho']['produto'][$id]['quantidade'] = $quantidade;
            $_SESSION['carrinho']['produto'][$id]['tamanho'] = $tamanho;
        }

    }

    public function removerCarrinho($id){
    
        unset($_SESSION['carrinho']['produto'][$id]);
    
    }

}

?>

