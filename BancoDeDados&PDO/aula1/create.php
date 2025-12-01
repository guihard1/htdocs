<?php

require_once 'connection.php';

//$pdo

$sql = 'INSERT INTO usuarios (name, username, password) VALUES (:name, :username, :password)';

$stmt = $pdo->prepare($sql);

$_name = 'edwardCullen';
$_username = 'edward';
$_password = '1555';

$stmt->bindParam(':name', $_name); //PRA PASSAR O PARAMETRO
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':password', $_password);

if ($stmt->execute()) {
    if ($stmt->rowCount() > 0) {
        echo 'Usuário cadastrado com sucesso!<br>';
    }
} else {
    echo "Nenhum usuário inserido no banco!<br>";
    // O print_r vai mostrar um array com o código do erro e a mensagem
    print_r($stmt->errorInfo());
}