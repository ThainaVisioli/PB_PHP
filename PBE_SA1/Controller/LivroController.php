<?php

session_start();
require_once "./Model/livroModel.php";

class livroController{ 

    public function telaCadastro(){
        require "View/livroCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $anoPublicado = $_POST['anoPublicado'];

        $livro = new Livro($titulo, $autor, $anoPublicado);
        $livro->salvar();
        header('Location: /PBE/PB_PHP/PBE_SA1/livro/telaCadastro');
        exit;
    }

    public function listarLivro(){
        $livro = Livro::listar();
        echo"<pre>";
        print_r($livro);
        echo"<pre>";
        require 'View/livroListar.php';

    }

    public function telaEditar(){
        $livros = livros::buscar($_GET['id']);
        require 'View/livrosEditar.php';
    }

    public function atualizar(){
        $livro = new Livro($_POST['titulo'], $_POST['autor'], $_POS['anoPublicado']);
        $livro->atualizar($_GET['id']);
        header('Location: /PBE/PB_PHP/PBE_SA1/livro/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Livro::excluir($_GET['id']);
        header('Location: /PBE/PB_PHP/PBE_SA1/livro/listar');
        exit;
    }
}