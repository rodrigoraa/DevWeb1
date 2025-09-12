<?php
include 'session.php';

$novo = [
    "id" => time(),
    "nome" => $_POST['nome'],
    "email" => $_POST['email']
];

$_SESSION['usuarios'][] = $novo;

header("Location: index.php");
exit;
?>