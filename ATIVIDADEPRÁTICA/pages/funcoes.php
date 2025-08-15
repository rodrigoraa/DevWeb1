<?php
function verificaArquivo($arquivo)
{
    $handle = fopen($arquivo, "r");
    if ($handle) {
        fclose($handle);
        return true;
    } else {
        return false;
    }
}

function carregarNoticias($arquivo)
{
    $noticias = [];
    $handle = fopen($arquivo, "r");
    if ($handle) {
        while (($linha = fgets($handle)) !== false) {
            $linha = trim($linha);
            if ($linha !== "") {
                $noticias[] = $linha;
            }
        }
        fclose($handle);
    }
    return $noticias;
}

function obterNoticiaAleatoria($noticias)
{
    if (empty($noticias)) {
        return "Nenhuma notícia disponível";
    }
    $indiceAleatorio = array_rand($noticias);
    return $noticias[$indiceAleatorio];
}
?>