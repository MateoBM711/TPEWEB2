<?php

require './config.php';

class CarritoModel {

    function connect(){
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . NAME, USER, PASSWORD);
        return $db;
    }

    function getCarrito($username){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM pedido WHERE username_cliente = ?');
        $query->execute([$username]);

        $carrito = $query->fetchAll(PDO::FETCH_OBJ);

        return $carrito;
    }
    
    function getProductoFromCarrito($id){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM pedido WHERE id_producto = ?');
        $query->execute([$id]);

        $producto = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $producto;
    }

    function insertProd($username, $idProd, $cant){
        $db = $this->connect();

        $query = $db->prepare('INSERT INTO pedido (`username_cliente`, `id_producto`, `cantidad`) VALUES (?, ?, ?)');
        $query->execute([$username, $idProd, $cant]);
    }

    function updateCantidadProductos($username, $id, $cantidad){
        $db = $this->connect();

        $query = $db->prepare('UPDATE pedido SET username_cliente = ?, id_producto = ?, cantidad = ? WHERE id_producto = ?');
        $query->execute([$username, $id, $cantidad, $id]);
    }

    function deleteProd($id){
        $db = $this->connect();

        $query = $db->prepare('DELETE FROM pedido WHERE id_producto = ? ');
        $query->execute([$id]);
    }
}


?>