<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>
<body>
    <a href= "/PBE/PB_PHP/atividade01/produto/telaCadastro">
    <h2>Produtos</h2>;
    <table border="1">
        <tr>
            <th>nomeProduto</th>
            <th>valorVenda</th>
            <th>qtdDisponivel</th>
            <th>dataValidade</th>
        </tr>
        <?php foreach($produto as $u): ?>
            <tr>
                <td><?= $u['nomeProduto']?></td>
                <td><?= $u['valorVenda']?></td>
                <td><?= $u['qtdDisponivel']?></td>
                <td><?= $u['dataValidade']?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>