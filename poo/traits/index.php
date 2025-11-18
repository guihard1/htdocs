<?php

function meu_autoloader($class_name) {

    $diretorios = ['classes/', 'trait/', 'outro_diretorio'];

    foreach ($diretorios as $diretorio) {

        $diretorio = strtolower($diretorio);
        $class_name = strtolower($class_name);

        if (file_exists($diretorio. $class_name . '.php')) {
            include $diretorio . $class_name . '.php';
            break;
        }
    }
}

spl_autoload_register("meu_autoloader");

trait Logger {

    public function log($message) {
        echo '<br>[LOG]: '. $message . '<br>';
        echo '<br>Datetime: '. date('d-m-Y'). '<br>';
    }
}

class User {

    use Logger;

    public function createUser() {
        echo 'Usuário criado.<br>';
        $this->log('Usuário criado.');
    }

    public function loginUser() {
        echo '<br>Usuário logado.<br>';
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