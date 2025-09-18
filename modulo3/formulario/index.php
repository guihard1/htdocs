<?php
require 'functions.php';

$erro = null;
$sucesso = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto'];

    //Sanitização
    $texto = htmlentities($texto);

    //Remover espaços antes e depois da palavra
    $texto = trim($texto);

    //Mantém apenas o e-mail valido
    $texto = filter_var($texto, FILTER_SANITIZE_EMAIL);

//    @obrigatório
//    if(strpos($texto, '@') == false) {
//        $erro = 'O texto precisa ter um @';
//    }

    //Primeira validação - Se o campo está preenchido
    if(filter_var($texto, FILTER_VALIDATE_EMAIL) == false) {
        $erro = 'Insira um e-mail válido.';
    } elseif (empty($texto)) {
        $erro = "O campo texto é obrigatório.";
    } elseif (strlen($texto) < 5) {
        $erro = "O campo texto tem menos de 5 caracteres.";
    } elseif (strlen($texto) > 20) {
        $erro = "Não pode ter mais de 20 caracteres.";
    } else {
        $sucesso = "O campo texto foi enviado com sucesso.";
    }
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
    <?php if(exibirErro($erro)): ?>
    <p style="color: red"><?= $erro ?></p>
    <?php endif; ?>

    <?php if(exibirErro($sucesso)): ?>
    <p style="color: green"><?= $sucesso ?></p>
    <?php endif; ?>
    <form method="POST">
        <input type="text" name="texto" placeholder="Digite o texto">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
