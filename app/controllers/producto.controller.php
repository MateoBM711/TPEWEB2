<?php
require_once './app/views/producto.view.php';
require_once './app/models/producto.model.php';
class ProductoController {
    private $model;
    private $view;
    
    function __construct(){
        $this->view = new ProductoView();
        $this->model = new ProductoModel(); 
    }
    
    function showProductosbyCategoria($categoria){
        
        $productos = $this->model->getProductosbyCategoria($categoria);
        $productoTemplate = $this->view->showProductosbyCategoria($categoria, $productos);
    }


}
?>