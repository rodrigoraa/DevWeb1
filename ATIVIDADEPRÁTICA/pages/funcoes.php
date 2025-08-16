<?php
$arquivoNoticias = "noticias.txt";

if (!verificaArquivo($arquivoNoticias)) {
    echo "<p>O arquivo de notícias não existe!<p>";
} else {
    $listaNoticias = carregarNoticias($arquivoNoticias);
    $noticia = obterNoticiaAleatoria($listaNoticias);

    echo "<div class='noticia'>";
    echo "<p>$noticia</p>";
    echo "</div>";
}
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