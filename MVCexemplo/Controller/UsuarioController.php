<?php

session_start(); //banco de dados
require_once "./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        require "View/UsuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
        header('Location: /PBE/PB_PHP/MVCExemplo/usuario/telaCadastro');
        exit;
    }

    public function listarUsuarios(){
        // session_destroy();
        $usuario = Usuario::listar();
        echo"<pre>";
        print_r($usuario);
        echo"</pre>";
        require 'View/usuarioListar.php';

    }

    public function telaEditar(){
        $usuario = Usuario::buscar($_GET['id']); // busca qual usuario vai editar
        require 'View/usuarioEditar.php';
    }

    public function atualizar(){
        $usuario = new Usuario($_POST['nome'], $_POST ['email']);
        $usuario->atualizar($_GET['id']);
        header('Location:/PBE/PB_PHP/MVCExemplo/usuario/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Usuario::excluir($_GET['id']); 
        header('Location: /PBE/PB_PHP/MVCExemplo/usuario/listar');
        exit;
    }
}