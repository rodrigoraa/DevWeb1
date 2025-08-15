<?php
$arquivo = "noticias.txt";

$handle = fopen($arquivo,"r");

if($handle === false){
    die("Erro ao abrir o arquivo");
}

while(($linha = fgets($handle)) !== false){
    echo $linha . "<br>";
}

fclose($handle);