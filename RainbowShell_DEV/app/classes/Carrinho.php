<?php

require_once 'Core.php';

class Carrinho extends Core {

    public function adicionarCarrinho($id, $tamanho, $cor, $quantidade){
        // Inicialize a sessão se não estiver iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Inicialize $_SESSION['carrinho'] e $_SESSION['carrinho']['produto'] se não estiverem definidos
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = ['produto' => []];
        }

        if (!isset($_SESSION['carrinho']['produto'][$id])) {
            $_SESSION['carrinho']['produto'][$id] = [];
        }

        // Adicionar ou atualizar o produto no carrinho
        if (count($_SESSION['carrinho']['produto'][$id]) == 0) {
            $new_produto = array(
                'cor' => $cor,
                'tamanho' => $tamanho,
                'quantidade' => $quantidade
            );
            $_SESSION['carrinho']['produto'][$id] = $new_produto;
        } elseif (count($_SESSION['carrinho']['produto'][$id]) > 0) {
            $_SESSION['carrinho']['produto'][$id]['cor'] = $cor;
            $_SESSION['carrinho']['produto'][$id]['quantidade'] = $quantidade;
            $_SESSION['carrinho']['produto'][$id]['tamanho'] = $tamanho;
        }
    }

    public function removerCarrinho($id){
        // Inicialize a sessão se não estiver iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        unset($_SESSION['carrinho']['produto'][$id]);
    }
}
?>
