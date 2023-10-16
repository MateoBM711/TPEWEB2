<?php
require_once './app/views/carrito.view.php';
require_once './app/models/carrito.model.php';
class CarritoController{
    private $model;
    private $view;

    function __construct(){
        $this->view = new CarritoView();
        $this->model = new CarritoModel();
    }
    function showCarrito(){
        $carrito = $this->model->getCarrito();
        $carritoTemplate = $this->view->showCarrito();
    }
}

?>