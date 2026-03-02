
<?php

session_start(); //banco de dados
require_once "./Model/ProdutoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/UsuarioCadastrar.php";
    }

    public function cadastrar(){
        $nomeProduto = $_POST['nomeProduto'];
        $valorVenda = $_POST['valorVenda'];
        $qtdDisponivel = $_POST ['qtdDisponivel'];
        $dataValidade = $_POST ['data'];

        $produto = new Produto ($nomeProduto, $valorVenda, $qtdDisponivel, $dataValidade);
        $produto ->salvar();
        header('Location: /PBE/PB_PHP/atividade01/produto/telaCadastro');
        exit;
    }

    public function listarProduto(){
        // session_destroy();
        $produto = produto::listar();
        echo"<pre>";
        print_r($produto);
        echo"</pre>";
        require 'View/produtoListar.php';

    }

    public function telaEditar(){
        $produto = produto::buscar($_GET['id']); // busca qual produto vai editar
        require 'View/produtoEditar.php';
    }

    public function atualizar(){
        $produto = new produto($_POST['nomeProduto'], $_POST ['qtdDisponivel'], $_POST ['valorProduto'], $_POST ['dataValidade']);
        $produto->atualizar($_GET['id']);
        header('Location:/PBE/PB_PHP/atividade01/produto/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        produto::excluir($_GET['id']); 
        header('Location: /PBE/PB_PHP/atividade01/produto/listar');
        exit;
    }
}

 