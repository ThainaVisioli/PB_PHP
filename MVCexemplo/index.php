<?php

require_once "Controller/UsuarioController.php";
                        
$usuarioController = new UsuarioController(); //classe
$route = $_GET["route"] ?? '' ;

switch ($route) {
    case 'usuario/telaCadastro' :
        $usuarioController->telaCadastro();
        break;

    case "usuario/salvar":
        $usuarioController->cadastrar();
        break;

    case "usuario/listar":
        $usuarioController->listarUsuarios();
        break;

    default:
        echo "Pagina não encontrada";
        break;
}