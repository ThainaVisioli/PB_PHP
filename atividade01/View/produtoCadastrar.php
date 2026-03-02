<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto cadastrar</title>
</head>
<body>
     <a href= "/PBE/PB_PHP/atividade01/produto/listar">Ir para a tela listar</a>
        <form method="POST" action="salvar">
            <input type="text" name="nomeProduto" placeholder="Nome do produto" require>
            <input type="number" name="valorVenda" placeholder="Valor da venda" require>
            <input type="number" name="qtdDisponivel" placeholder="Quantidade disponivel" require>
            <label for="data">Data de validade:</label>
            <input type="date" id="data" name="data">
            <button type="submit">Enviar</button>
        </form>
</body>
</html>