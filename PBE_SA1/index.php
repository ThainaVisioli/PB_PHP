<?php 

require_once "Controller/livroController.php";

$livroController = new LivroController();
$route = $_GET["route"] ?? '';

switch ($route) {
    case 'livro/telaCastro' :
        $livroController->telaCadastro();
        break;
    
    case "livro/salvar" :
        $livroController->cadastrar();
        break;

    case "livro/listar" :
        $livroController->listar();
        break;

    case "livro/telaEditar":
        $livroController->telaEditar();
        break;

    case "livro/atualizar" :
        $livroController->atualizar();
        break;

    case "livro/excluir" :
        $livroController->excluir();
        break;

    default:
    echo "Pagina não encontrada";
    break;
}