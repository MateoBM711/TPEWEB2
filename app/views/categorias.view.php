<?php
class CategoriasView {
    function showCategorias($categorias){
        $count = count($categorias);
        require './templates/categorias.template.phtml';
    }
}
?>