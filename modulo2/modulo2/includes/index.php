<?php
    /*Include e o Require (é o <link> do HTML)

    include: inclui um arquivo se o arquivo existir.
    Caso não exista, dá um erro do tipo WARNING e continua executando o código.
    Usado quando a inclusão do arquivo é opcional.

    require: Inclui um arquivo se o arquivo existir
    Caso não exista, vai dar um fatalerror e parar a execução do código.
    usado quando o código NÃO PODE continuar sem aquele arquivo.


    E o require da um fatalerror e para a execução.*/
    include 'nome.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inclusão de Arquivos</title
</head>
<body>
    <h1>
        Hello World! Eu sou <?= $nome ?>
    </h1>
</body>
</html>