<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de livros</title>
</head>
<body>
    <a href= "/PBE/PB_PHP/PBE_SA1/livro/telaCadastro"> Voltar para tela inicial</a>
    <h2>Livros</h2>;
    <table border="1">
        <tr>
            <td>titulo</td>
            <td>autor</td>
            <td>anoPublicado</td>
        </tr>
        <?php foreach($livro as $id => $u): ?>
            <tr>
                <td><? $u['TITULO']?></td>
                <td><? $u['AUTOR']?></td>
                <td><? $u['ANOPUBLICADO']?></td>
            </tr>
        <a href="/PBE/PB_PHP/PBE_SA1/livro/telaEditar?id=<?= $id?>">Editar</a>]

            <td><a href="/PBE/PB_PHP/PBE_SA1/livro/excluir?id=<?= $id?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>