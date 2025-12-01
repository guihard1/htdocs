<?php

require_once 'connection.php';

//$pdo
//DESSA FORMA FICA PROTEGIDO DE SQL INJECTION
$id = '1';

//$sql = 'SELECT * FROM usuarios where id = :id';

$sql = 'SELECT * FROM usuarios';

$stmt = $pdo->prepare($sql); //prepara a query.
//$stmt->bindParam(':id', $id); //Faz a substituição do valor :id trazendo o valor guardado na variavel $id.
$result = $stmt->execute(); //faz a execução do comando.

//$stmt = $pdo->prepare($sql);
//$result = $stmt->execute();


//Array Associativo
if($stmt) {
//    $data = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetchAll pra pegar o conteudo do banco
//
//    foreach ($data as $linha) {
//        echo '<h1> '. $linha['username']. ' </h1>';
//        echo '<pre>';
//        var_dump($linha);
//        echo '</pre>';
//        echo '<hr>';
//    }

    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

    echo '<h1> Registros encontrados: '. $stmt->rowCount(). '</h1><br>';

    foreach ($data as $linha) {
        echo '<h1> '. $linha->username . ' </h1>';
        echo '<pre>';
        var_dump($linha);
        echo '</pre>';
        echo '<hr>';
    }
}