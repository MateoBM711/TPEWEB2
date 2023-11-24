<?php
require_once './app/helpers/auth.helper.php';
class ProductoView
{
    private $helper;
    function __construct()
    {
        AuthHelper::verify();
        $this->helper = new AuthHelper();
    }

    function showProductosbyCategoria($categoria, $productos)
    {
        require './templates/listProductos.template.phtml';
    }

    function showProductobyId($producto)
    {
        $isAdmin = $this->helper->esAdmin();
        print_r($isAdmin);
        require './templates/producto.template.phtml';
    }

    function showEditarProducto($producto)
    {
        require './templates/editarProducto.template.phtml';
    }
}
