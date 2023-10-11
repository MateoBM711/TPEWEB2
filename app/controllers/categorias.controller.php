<?php
require_once 'TPEWEB2\app\views\categorias.view.php';
require_once 'TPEWEB2\app\models\categorias.model.php';
class CategoriasController {
    private $model;
    private $view;
    
    function __construct(){
        $this->view = new CategoriasView();
        $this->model = new CategoriaModel(); 
    }
    
    function showCategorias(){
        include_once 'templates/header.php'; 
        
        $categorias = $this->model->getCategorias();
        $categoriasTemplate = $this->view->showCategorias($categorias);
        include_once 'templates/footer.php';
}
}
?>