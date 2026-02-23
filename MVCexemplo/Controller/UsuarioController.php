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
        $usuarios = Usuario::listar();
        echo"<pre>";
        print_r($usuarios);
        echo"</pre>";
        require 'View/usuarioListar.php';

    }
}