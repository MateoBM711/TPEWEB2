<?php
class CategoriasView {
    function showCategorias($categorias){
        $cantCategorias = $categorias;
        require './templates/categorias.template.phtml';
    }
}
?>