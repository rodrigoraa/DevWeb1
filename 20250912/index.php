<?php
include 'session.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h2>Usuários</h2>
    <a href="form.php" class="btn-azul">Cadastrar Novo</a>
    <br><br>
    <table>
        <tr>
            <th>ID</th><th>Nome</th><th>Email</th><th>Ações</th>
        </tr>
        <?php foreach ($_SESSION['usuarios'] as $u): ?>
            <tr>
                <td><?= $u['id']?></td>
                <td><?= $u['nome']?></td>
                <td><?= $u['email']?></td>
                <td>
                    <a href="editar.php?id=<?= $u['id'] ?>" class="btn-azul">Editar</a>
                    <a href="deletar.php?id=<?= $u['id'] ?>" onClick="return confirm('Excluir?')" class="btnDeletar">Deletar</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>