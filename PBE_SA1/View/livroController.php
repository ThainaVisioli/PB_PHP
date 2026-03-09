<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro Cadastrar</title>
</head>
<body>
    <a href= "/PBE/PB_PHP/PBE_SA1/livro/listar"> Ir para tela listar</a>
    <form method="POST" action="salvar">
        <input type="text" name="titulo" placeholder="Nome do livro" require>
        <input type="text" name="autor" placeholder="Nome do autor" require>
        <input type="text" name="anoPublicado" placeholder="Ano de Publicação" reuqire>
        <button type="submit" style="bacground-color: #00ffc8ff"; >Enviar</button>
        </form>
    </body>
</html>