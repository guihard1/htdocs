<?php
require_once 'connection.php';

//Importar usuários, MAS se um FALHAR, quero fazer o rollback (nenhum usuário é importado)

try {
    $pdo->beginTransaction();

    $user1 = 'testeeeee';
    $userName = 'testeeeeeee';
    $userPass = 'testeeeee@@';

    $sql = 'INSERT INTO usuarios(name, username, password) VALUES(:name, :username, :password)';

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $user1);
    $stmt->bindParam(':username', $userName);
    $stmt->bindParam(':password', $userPass);
    $stmt->execute();

    $pdo->exec('SAVEPOINT user1_savepoint');

    echo '<hr>';

    $user2 = 'kktt';
    $userName2 = 'kkttk';
    $userPass2 = 'kkkkkkttk';

    $sql2 = 'INSERT INTO usuarios(name, username, password) VALUES (:name, :username, :password)';

    $stmt2 = $pdo->prepare($sql2);
    $stmt2->bindParam(':name', $user2);
    $stmt2->bindParam(':username', $userName2);
    $stmt2->bindParam(':password', $userPass2);
    $stmt2->execute();
    echo 'Usuário 2 inserido com sucesso!<br>';

    $sqlSelectUser2 = 'SELECT * FROM usuarios WHERE username = :username';
    $stmtSelectUser2 = $pdo->prepare($sqlSelectUser2);
    $stmtSelectUser2->bindParam(':username', $userName);
    $stmtSelectUser2->execute();
    $result = $stmtSelectUser2->fetch(PDO::FETCH_ASSOC);
    echo 'Usuário 2 encontrado com sucesso.<br>';

    $pdo->exec('SAVEPOINT user2_savepoint');

    $user3 = 'Manolin';
    $userName3 = 'Linmano';
    $userPass3 = 'geqgqeg';

    $sql3 = 'INSERT INTO usuarios(name, username, password) VALUES(:name, :username, :password)';
    $stmt3 = $pdo->prepare($sql3);
    $stmt3->bindParam(':name', $user3);
    $stmt3->bindParam(':username', $userName3);
    $stmt3->bindParam(':password', $userPass3);
    $stmt3->execute();

    $pdo->exec('SAVEPOINT user3_savepoint');

    $pdo->exec('ROLLBACK TO SAVEPOINT user1_savepoint');

    $pdo->commit();

} catch (PDOException $e) {
    echo 'Erro na transação.' . $e->getMessage();
}