<?php

require_once "./database/Database.php";

class Livro{
    private $titulo;
    private $autor;
    private $anoPublicado;

    public function __construct($titulo, $autor, $anoPublicado){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicado = $anoPUblicado;
    }

    public function salvar(){
     $pdo = Database::conectar();
     $sql = "INSERT INTO livro (titulo, autor, anoPublicado) VALUES (:titulo, :autor, anoPublicado:)";
     $stmt = $pdo->prepare($sql);
     $stmt->execute(['titulo' => $this->titulo, 'autor' => $this->autor, 'anoPublicado' => $this->anoPublicado]);

    }

    public static function listar(){
        $pdo = Database::conectar();
        $stmt = $pdo->query("SELECT * FROM livro");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscar ($id){
            $pdo = Database::conectar();
            $stmt = $pdo->prepare("SELECT * FROM livro WHERE id = :id");
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(POD::FETCH_ASSOC);
        }

    public function atualizar($id){
          $pdo = Database::conectar();
          $stmt = $pdo->prepare("UPDATE livro SET  titulo = :titulo, autor = :autor WHERE id = :id");
          $stmt->execute(['id' => $id, 'titulo' => $this->titulo, 'email' => $this->email, 'anoPublicado' => $this->anoPublicado]);
        
    }

    public static function excluir($id){
            $pdo = Database::conectar();
            $stmt = $pdo->prepare("DELETE * FROM livro WHERE id = :id");
            $stmt->execute(['id' => $id]);
           
    }
}

    
