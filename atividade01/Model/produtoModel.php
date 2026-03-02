<?php

class Produto{
    private $nomeProduto;
    private $valorVenda;
    private $qtdDisponivel;
    private $dataValidade;

    public function __construct($nomeProduto, $valorVenda, $qtdProduto, $dataValidade){
        $this ->nomeProduto = $nomeProduto;
        $this ->valorVenda = $valorVenda;
        $this ->qtdDisponivel = $qtdDisponivel;
        $this ->dataValidade = $dataValidade;
}

    public function salvar(){
        if(!isset($_SESSION['produto'])){
            $_SESSION['produto'] = [];
        }

        $_SESSION['produto'][] = [
            'nomeProduto' => $this-> nomeProduto,
            'valorVenda' =>  $this-> valorVenda,
            'qtdDisponivel' =>  $this-> qtdDisponivel,
            'dataValidade' => $this-> dataValidade
        ];

    }

    public static function listar(){
        return $_SESSION['produto'] ?? [];
        }

    public static function buscar ($id){
        return $_SESSION['produto'][$id] ?? null; // busca apenas uma informação 
        }

    public function atualizar($id){
        if(isset($_SESSION['produto'][$id]))// verifica se o produto existe
            $_SESSION['produto'][$id] = [ // atualiza com novos dados
                    'nomeProduto' => $this->nomeProduto,
                    'valorVenda' => $this->valorVenda,
                    'qtdDisponivel' => $this->qtdDisponivel,
                    'dataValidade' => $this->dataValidade
            ];
    }
    
      public static function excluir($id){
        if(isset($_SESSION['produto'][$id])){ // verifica se o produto existe 
            unset($_SESSION['produto'][$id]); //remove o produto
        }
    }
    
    }