<?php
include 'session.php';

$id = $_GET['id'];
$_SESSION['usuarios'] = array_filter($_SESSION['usuarios'], fn($u) => $u['id'] != $id);

header("Location: index.php");
exit;
?>