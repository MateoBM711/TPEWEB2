<?php
require_once './app/views/categorias.view.php';
require_once './app/models/categorias.model.php';
class CategoriasController {
    private $model;
    private $view;
    
    function __construct(){
        AuthHelper::verify();

        $this->view = new CategoriasView();
        $this->model = new CategoriaModel(); 
    }
    
    function showCategorias(){
        $categorias = $this->model->getCategorias();
        $categoriasTemplate = $this->view->showCategorias($categorias);
    }
    function showEditarCategoria($id)
    {
        $categoria = $this->model->getCategoriabyId($id);
        $categoriaTemplate = $this->view->showEditarCategoria($categoria);
    }
    function updateCategoria($id)
    {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $imagen = $_POST['imagen'];
        $categoria = $this->model->updateCategoria($nombre, $descripcion, $imagen, $id);
    }
}
?>