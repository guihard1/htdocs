<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<main>
    <form action="login.php" method="post">
        <label for="username">Usuário:</label>
        <label>
            <input type="text" name="login" placeholder="Digite seu login">
        </label>
        <br/>
        <label for="password">Senha:</label>
        <label>
            <input type="password" name="password" placeholder="Digite a senha">
        </label><br>
        <label for="lembrar" class="">Tema preferido:</label>
        <label>
            <select name="tema">
                <option value="escuro">escuro</option>
                <option value="claro">claro</option>
            </select>
        </label>

        <input type="submit" value="enviar">
    </form>
</main>
</body>
</html>
