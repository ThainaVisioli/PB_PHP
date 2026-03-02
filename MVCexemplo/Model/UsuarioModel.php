<?php


class Usuario{
    private $nome;
    private $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }

    public function salvar(){
        if(!isset($_SESSION['usuario'])){
            $_SESSION['usuario']  = [];

        }

        $_SESSION['usuario'][] = [
            'nome' => $this-> nome,
            'email' => $this-> email
        ];
    }

    public static function listar(){
        // retorna a lista de usuarios
        return $_SESSION['usuario'] ?? [];
    }

    public static function buscar ($id){
        return $_SESSION['usuario'][$id] ?? null; // busca apenas uma informação 
        }

    public function atualizar($id){
        if(isset($_SESSION['usuario'][$id]))// verifica se o usuario existe
            $_SESSION['usuario'][$id] = [ // atualiza com novos dados
                    'nome' => $this->nome,
                    'email' => $this->email
            ];
    }

    public static function excluir($id){
        echo $id;
        if(isset($_SESSION['usuario'][$id])){ // verifica se o usuario existe 
            unset($_SESSION['usuario'][$id]); //remove o usuario
        }
    }
}

    
