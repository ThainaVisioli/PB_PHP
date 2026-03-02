<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>
<body>
    <a href= "/PBE/PB_PHP/atividade01/produto/telaCadastro">Voltar para tela inicial</a>
    <h2>Produtos</h2>;
    <table border="1">
        <tr>
            <td>nomeProduto</td>
            <td>valorVenda</td>
            <td>qtdDisponivel</td>
            <td>dataValidade</td>
            <td>Editar</td>
        </tr>
        <?php foreach($produto as $id => $u): ?>
            <tr>
                <td><?= $u['nomeProduto']?></td>
                <td><?= $u['valorVenda']?></td>
                <td><?= $u['qtdDisponivel']?></td>
                <td><?= $u['dataValidade']?></td>
                <td><a href="/PBE/PB_PHP/atividade01/produto/telaEditar?id=<?= $id?>">Editar</a>
            
                    <td><a href="/PBE/PB_PHP/atividade01/produto/excluir?id=<?= $id?>">Excluir</a>
            </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>