<?php
require_once './app/views/carrito.view.php';
require_once './app/models/carrito.model.php';
require_once './app/helpers/auth.helper.php';

class CarritoController{
    private $model;
    private $view;

    function __construct(){
        AuthHelper::verify();
        $this->view = new CarritoView();
        $this->model = new CarritoModel();
    }
    function showCarrito(){   
        $carrito = $this->model->getCarrito();
        $carritoTemplate = $this->view->showCarrito();
    }
}

?>