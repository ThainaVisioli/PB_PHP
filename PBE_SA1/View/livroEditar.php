<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela editar livro</title>
</head>
<body>
    <h2>Editar livro</h2>
    <a href = "/PBE/PB_PHP/PBE_SA1/livro/listar"> Ir para tela listar</a> <br> 
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled> <br> <br>
        <input type="text" name="titulo" value="<?= htmlspecialchars($livro['TITULO'])?>" require> <br> <br>
        <input type="text" name="autor" value="<?= htmlspecialchars($livro['AUTOR'])?>" require> <br> <br>
        <input type="text" name="anoPublicado" value="<?= htmlspecialchars($livro['ANOPUBLICADO'])?>" require> <br> <br>
        <button type="submit" style="background-color: #2a298eff";> Editar</button>
        </form>
    </body>
</html>

 

             