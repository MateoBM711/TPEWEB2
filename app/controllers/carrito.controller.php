<?php
require_once './app/views/carrito.view.php';
require_once './app/models/carrito.model.php';
require_once './app/helpers/auth.helper.php';
require_once './app/models/producto.model.php';

class CarritoController{
    private $model;
    private $view;
    private $prodModel;

    function __construct(){
        AuthHelper::verify();
        $this->view = new CarritoView();
        $this->model = new CarritoModel();
        $this->prodModel = new ProductoModel();
    }
    function showCarrito(){  
        
        $username = $_SESSION['USERNAME'];
        $carrito = $this->model->getCarrito($username);
        $productos = $this->getProductosFromCarrito($carrito);
        $carritoTemplate = $this->view->showCarrito($productos, $carrito);
    }

    function getProductosFromCarrito($carrito){
        $productos = array();
        for ($i=0; $i<count($carrito); $i++){
            $idProd = $carrito[$i]->id_producto;
            $producto = $this->prodModel->getProductobyId($idProd);
            array_push($productos, $producto[0]);
        }
        return $productos;
    }
    
    function addProd($idCategoria, $idProd){
     $producto = $this->model->getProductoFromCarrito($idProd);
     $username = $_SESSION['USERNAME'];
     if(empty($producto)){
        $this->model->insertProd($username, $idProd, 1);
     }  
     else {
        $cantidad = $producto[0]->cantidad+1;
        $this->model->updateCantidadProductos($username, $idProd, $cantidad);
     }
        header('Location: ' . BASE_URL . 'productos/' . $idCategoria);
    }

    function removeProd($idProd){
        $producto = $this->model->getProductoFromCarrito($idProd);
        $cantidad = $producto[0]->cantidad;
        if($cantidad == 1){
            $this->model->deleteProd($idProd);
        }  
        else {
           $username = $_SESSION['USERNAME'];
           $this->model->updateCantidadProductos($username, $idProd, $cantidad-1);
        }
           header('Location: ' . BASE_URL . '/carrito');
    }
}
