<?php

trait Logger {

    public function log($message) {
        echo '<br>[LOG]: '. $message . '<br>';
    }
}

class User {

    use Logger;

    public function createUser() {
        echo 'Usuário criado.<br>';
        $this->log('Usuário criado.<br>');
    }

    public function loginUser() {
        echo 'Usuário logado.<br>';
        $this->log('Usuário logado.');
    }
}

class File {

    use Logger;

    public function created() {
        echo 'Arquivo criado.<br>';
        $this->log('Arquivo criado.');
    }

    public function deleted() {
        echo 'Arquivo excluido.<br>';
        $this->log('Arquivo excluido.');
    }
}

$user = new User();
$user->createUser();
$user->loginUser();