<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <a href= "/PBE/PB_PHP/MVCExemplo/usuario/telaCadastro">Voltar para tela inicial</a>
    <h2>Usuários</h2>;
    <table border="1">
        <tr>
            <td>Nome</td>
            <td>Email</td>
            <td>Editar</td>
        </tr>
        <?php foreach($usuario as $id => $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['email']?></td>
                <td><a href="/PBE/PB_PHP/MVCExemplo/usuario/telaEditar?id=<?= $id?>">Editar</a>

                 <td><a href="/PBE/PB_PHP/MVCExemplo/usuario/excluir?id=<?= $id?>">Excluir</a>
            </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>