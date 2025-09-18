<?php

$tecnologias = ['HTML', 'CSS', 'Javascript', 'PHP'];

$erro = null;
$sucesso = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulário</h1>
<!--Abaixo inves de fazer abertura e fechamento de chaves, foi utilizado ":"
 como forma de abrir chaves e pra fechar foi utilizado o endif dentro da tag
 php abaixo.-->
    <form method="POST">
        <select name="opcao">
            <?php
            foreach ($tecnologias as $tecnologia) : ?>
            <option value="<?= $tecnologia ?>"><?= $tecnologia ?> </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Enviar">

    </form>

    <?php if(exibirErro($erro)): ?>
        <p style="color: red"><?= $erro ?></p>
    <?php endif; ?>

    <?php if(exibirErro($sucesso)): ?>
        <p style="color: green"><?= $sucesso ?></p>
    <?php endif; ?>

</body>

</html>
