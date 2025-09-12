<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h2>Novo Usuário</h2>
    <form method="POST" action="salvar.php">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required placeholder="Nome">
        <label for="email">E-mail: </label>
        <input type="email" name="email" required placeholder="example@gmail.com">
        <div class="botoes">
            <button type="submit" class="btnCad">Salvar</button>
            <br>
            <a href="index.php" class="btnCad">Voltar</a>
        </div>
    </form>
</body>

</html>