<?php

class CarritoView{
    function showCarrito($productos, $carrito){
        require './templates/carrito.template.phtml';
    }
    function showSucces(){
        require './templates/success.template.phtml';
    }
}
?>