<?php

include 'session.php';

$id = $_GET['id'];
$usuario = null;

foreach ($_SESSION['usuarios'] as $u){
    if($u['id'] == $id){
        $usuario = $u;
        break;
    }
}

if(!$usuario){
    die("Usuário não encontrado!");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuários</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h2>Editar Usuários</h2>
    <form method="POST" action="atualizar.php">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required placeholder="Nome">
        <label for="email">E-mail: </label>
        <input type="email" name="email" value="<?= $usuario['email'] ?>" required placeholder="example@gmail.com">
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>