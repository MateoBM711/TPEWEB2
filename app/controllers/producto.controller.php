<?php
require_once './app/views/producto.view.php';
require_once './app/models/producto.model.php';
class ProductoController
{
    private $model;
    private $view;

    function __construct()
    {
        AuthHelper::verify();

        $this->view = new ProductoView();
        $this->model = new ProductoModel();
    }

    function showProductosbyCategoria($categoria)
    {

        $productos = $this->model->getProductosbyCategoria($categoria);
        $productoTemplate = $this->view->showProductosbyCategoria($categoria, $productos);
    }

    function showProductobyId($id)
    {
        $producto = $this->model->getProductobyId($id);
        $productoTemplate = $this->view->showProductobyId($producto);
    }

    function updateProd($id)
    {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $imagen = $_POST['imagen'];
        $id_categoria = $_POST['id_categoria'];
        $producto = $this->model->updateProd($nombre, $descripcion, $precio, $imagen, $id_categoria, $id);
    }

    function showEditarProducto($id)
    {
        $producto = $this->model->getProductobyId($id);
        $productoTemplate = $this->view->showEditarProducto($producto);
    }
}
