<?php

class InicioView{

    function showInicio($categorias) {
        $count = count($categorias);
        require './templates/inicio.template.phtml';
    
    }

}



?>