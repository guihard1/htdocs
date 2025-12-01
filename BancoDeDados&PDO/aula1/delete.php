<?php

require_once 'connection.php';

// $pdo

$id = '1';

$sql = 'DELETE FROM usuarios WHERE id = :id';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo 'Usuário excluido com sucesso!<br>';
} else {
    echo 'Falha ao excluir. Usuário inexistente!<br>';
}

/**
 * CRUD
 * C - Create (Criar) - Inserir dados no banco de dados
 * R - Read (Ler) - Ler dados do banco de dados
 * U - Update (Atualizar) - Atualizar os dados do banco de dados
 * D - Delete (Deletar) - Deletar os dados do banco de dados
 *
 *
 * PLUS: rowCount() é usado para contabilizar a quantidade de linhas de um determinado item, bastante usado.
 * */