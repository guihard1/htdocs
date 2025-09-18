<?php

session_start();

if (empty($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}
//abaixo eu faço: se houver o cookie 'tema' e com o !empty eu faço: se não estiver vazio o cookie 'tema'
if (!empty($_COOKIE['tema'])) {
    $tema = $_COOKIE['tema'];

    if ($tema == 'escuro') {
        $cor = 'rgba(0,0,0,0.55)';
    } else {
        $cor = '#FFFFFF';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Secret Page</title>
</head>
<body style="background-color: <?= $cor ?>">
    <?php

    echo "Bem-vindo, " . $_SESSION['login'] . "</b>";
    echo "<br/>";
    echo '<a href="logout.php" style="text-decoration: none; color: ">Sair</a>';

    ?>
</body>
</html>

<!--
/*
 * Deve exibir "Bem vindo [LOGIN DO USUARIO] se ele estiver logado".
 * Deve ter a opção de sair.
 *
 * $_SESSION pega a sessão do usuario, auto-explicativo.
 * */
