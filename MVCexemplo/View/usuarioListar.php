<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <a href= "/PBE/PB_PHP/MVCExemplo/usuario/telaCadastrar">Ir para tela
    <h2>Usuários</h2>;
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach($usuarios as $u): ?>
            <tr>
                <td><?= $u['nome']?></td>
                <td><?= $u['email']?></td>
                <td>proxima aula</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>