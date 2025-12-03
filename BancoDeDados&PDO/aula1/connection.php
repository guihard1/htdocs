<?php

require_once 'env.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME";

try {
    $pdo = new PDO($dsn, $ENV_USERNAME, $ENV_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Banco de dados conectado!<br><br>';
} catch (PDOException $e) {
    echo 'Conexão recusada: <br>' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>teste</title>
</head>
<body>
</body>
</html>