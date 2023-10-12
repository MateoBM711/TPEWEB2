<?php

class CarritoModel {

    function connect(){
        $db = new PDO('mysql:host=localhost;' . 'dbname=local_limpieza;charset=utf8', 'root', '');
        return $db;
    }

    function getCarrito(){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM pedido');
        $query->execute();

        $carrito = $query->fetchAll(PDO::FETCH_OBJ);

        return $carrito;
    }
}


?>