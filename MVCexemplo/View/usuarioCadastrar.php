<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>
</head>
    <body>
        <a href= "/PBE/PB_PHP/MVCExemplo/usuario/listar">Ir para a tela listar</a>
        <form method="POST" action="salvar">
            <input type="text" name="nome" placeholder="Seu nome" require>
            <input type="text" name="email" placeholder="Seu email" require>
            <button type="submit" style="background-color: #00ffc8ff"; >Enviar</button>
        </form>
    </body>
</html>