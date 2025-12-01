<?php

require_once 'connection.php';
//pegar instancia do $pdo

$sql = 'SELECT * FROM tabelaquenaoexiste';
$stmt = $pdo->prepare($sql);

try {
    $stmt -> execute();
} catch (PDOException $e) {
    echo 'Houve um erro com sua autenticação, tente novamente mais tarde.';
}

/**
 * PDO::ERRMODE_SILENT (silencioso)
 * Normalmente usado em produção.
 *
 *
 * PDO::ERRMODE_WARNING (alerta/aviso)
 *
 *
 * PDO::ERRMODE_EXCEPTION (Lança exceções)
 * Pode acontecer de esse também ser usado em produção as vezes.
 *
 */

