<?php

require_once './app/views/inicio.view.php';
require_once './app/models/categorias.model.php';

class InicioController {
    private $view;
    private $model;

    function __construct(){
        $this->view = new InicioView();
        $this->model = new CategoriaModel(); 
    }

    function showInicio(){
        $categorias = $this->model->getCategorias();
        $inicioTemplate = $this->view->showInicio();
    }

}


?>