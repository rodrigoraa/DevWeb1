<?php
$noticias = "noticias.txt";

$conteudo = ["PHP é uma linguagem de programação web muito popular. ", "O desenvolvimento web está em constante evolução.", "Frameworks modernos facilitam o desenvolvimento."];

$conteudoString = implode("\n", $conteudo);

$arquivo = fopen($noticias, "w");

if($arquivo === false){
    die("Erro ao criar arquivo.");
}

fwrite($arquivo, $conteudoString);

fclose($arquivo);

echo "Arquivo '$noticias' criado e gravado com sucesso!";