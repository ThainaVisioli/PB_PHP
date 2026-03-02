<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela editar produto</title>
</head>
    <body>
        <h2>Editar produto</h2>
        <a href= "/PBE/PB_PHP/atividade01/produto/listar">Ir para a tela listar</a> <br> <br>
        <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled> <br> <br>
            <input type="text" name="nomeProduto" value="<?= htmlspecialchars($produto['nomeProduto'])?>" require> <br> <br>
            <input type="text" name="valorVenda" value="<?= htmlspecialchars($produto['valorVenda'])?>" require> <br> <br>
            <input type="text" name="qntDisponivel" value="<?= htmlspecialchars($produto['qtdDisponivel'])?>" require> <br> <br>
             <input type="text" name="dataValidade" value="<?= htmlspecialchars($produto['dataValidade'])?>" require> <br> <br>
            <button type="submit" style="background-color: #552cebff";> Editar</button>
        </form>
    </body>
</html>