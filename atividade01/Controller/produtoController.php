<?php

session_start();
require_once "./Model/produtoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/produtoCadastrar.php";
    }

    public function cadastrar(){
        // echo $_POST['']
        $nomeProduto = $_POST['nomeProduto'];
        $valorVenda = $_POST['valorVenda'];
        $qtdDisponivel = $_POST ['qtdDisponivel'];
        $dataValidade = $_POST ['data'];

        $produto = new Produto ($nomeProduto, $valorVenda, $qtdDisponivel, $dataValidade);
        $produto ->salvar();
        header ('LOcation: /PBE/PB_PHP/atividade01/produto/telaCadastro');
        exit;
        
    }

    public function listarProduto(){
        $produto = Produto::listar();
                echo"<pre>";
        print_r($produto);
        echo"</pre>";
        require 'View/produtoListar.php';
    }
}