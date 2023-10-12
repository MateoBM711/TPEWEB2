<?php

require_once './app/views/inicio.view.php';
//require_once './app/models/';

class InicioController {
    private $view;
    private $model;

    function __construct(){
        $this->view = new InicioView();
        //$this->model = new InicioModel(); 
    }

    function showInicio(){
        $inicioTemplate = $this->view->showInicio();
    }

}


?>