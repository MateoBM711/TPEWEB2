<?php
    class ProductoView {
        function showProductosbyCategoria($categoria, $productos){
            $categoria = $this->$categoria;
            include_once './templates/producto.template.phtml';
            
        }
    }



?>