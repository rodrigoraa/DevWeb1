<?php
$arquivoNoticias = "../noticias/noticias.txt";

if (!verificaArquivo($arquivoNoticias)) {
    echo "<p>O arquivo de notícias não existe!<p>";
} else {
    $listaNoticias = carregarNoticias($arquivoNoticias);
    $noticia = obterNoticiaAleatoria($listaNoticias);

    echo "<div class='noticia'>";
    echo "<p>$noticia</p>";
    echo "</div>";
}
?>