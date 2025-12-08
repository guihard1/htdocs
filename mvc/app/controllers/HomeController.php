<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Usuario.php';

class HomeController extends Controller {
    public function index() {

        $usuario = new Usuario();
        $data = $usuario->getUserData();
        var_dump($data);

        $nome = 'Luiz Guilherme';
        $idade = 29;

        $this->view('home/index', ['nome' => $nome, 'idade' => $idade]);
    }
}