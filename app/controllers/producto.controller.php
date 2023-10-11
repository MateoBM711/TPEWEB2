<?php
require_once 'TPEWEB2\app\views\producto.view.php';
require_once 'TPEWEB2\app\models\producto.model.php';
class ProductoController {
    private $model;
    private $view;
    
    function __construct(){
        $this->view = new ProductoView();
        $this->model = new ProductoModel(); 
    }
    
    function showProductosbyCategoria($categoria){
        include_once 'templates/header.php'; 
        
        $productos = $this->model->getProductosbyCategoria($categoria);
        $productoTemplate = $this->view->showProductosbyCategoria($categoria, $productos);
        include_once 'templates/footer.php';
}
}
?>