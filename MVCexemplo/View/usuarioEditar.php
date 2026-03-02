<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela editar Usuario</title>
</head>
    <body>
        <h2>Editar usuário</h2>
        <a href= "/PBE/PB_PHP/MVCExemplo/usuario/listar">Ir para a tela - listar</a> <br> <br>
        <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled> <br> <br>
            <input type="text" name="nome" value="<?= htmlspecialchars($usuario['nome'])?>" require> <br> <br>
            <input type="text" name="email" value="<?= htmlspecialchars($usuario['email'])?>" require> <br> <br>
            <button type="submit" style="background-color: #00ffb3ff";> Editar</button>
        </form>
    </body>
</html>