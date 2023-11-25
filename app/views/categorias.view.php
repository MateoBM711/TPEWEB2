<?php
class CategoriasView
{
    private $helper;
    function __construct()
    {
        AuthHelper::verify();
        $this->helper = new AuthHelper();
    }
    function showCategorias($categorias)
    {
        $isAdmin = $this->helper->esAdmin();
        $cantCategorias = $categorias;
        require './templates/categorias.template.phtml';
    }
    function showEditarCategoria($categoria)
    {
        require './templates/editarCategoria.template.phtml';
    }
}
