<?php

include 'session.php';

foreach ($_SESSION['usuarios'] as &$u){
    if($u['id'] == $_POST['id']){
        $u['nome'] = $_POST['nome'];
        $u['email'] = $_POST['email'];
        break;
    }
}
unset($u);
header("Location: index.php");
exit;
?>