<?php
require_once './app/views/categorias.view.php';
require_once './app/models/categorias.model.php';
class CategoriasController {
    private $model;
    private $view;
    
    function __construct(){
        
        $this->view = new CategoriasView();
        $this->model = new CategoriaModel(); 
    }
    
    function showCategorias(){
        $categorias = $this->model->getCategorias();
        $categoriasTemplate = $this->view->showCategorias($categorias);
}
}
?>