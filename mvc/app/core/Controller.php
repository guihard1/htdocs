<?php

class Controller {
    protected function view($view, $viewData = [] )
    {
        extract($viewData);
        $viewFile = dirname(__DIR__) . '/views/' . $view .'.php';

        if(!file_exists($viewFile)) {
            throw new Exception("View $view does not exist.");
        }
        require_once $viewFile;
    }
}