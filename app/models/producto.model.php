<?php
class ProductoModel {
    
    function connect()
    {
        $db = new PDO("mysql:host=localhost; dbname=local_limpieza", "root", "");
        return $db;
    }
    
    function getProductosbyCategoria($idCategoria = null){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM producto WHERE id_categoria = ?');
        $query->execute([$idCategoria]);

        $productos = $query->fetchAll(PDO::FETCH_OBJ);

        return $productos;
    }

    function getProductobyId($id){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM producto WHERE id = ?');
        $query->execute([$id]);

        $producto = $query->fetchAll(PDO::FETCH_OBJ);

        return $producto;
    }
    
    function getProductos(){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM producto');
        $query->execute();

        $productos = $query->fetchAll(PDO::FETCH_OBJ);

        return $productos;
    }

    function updateProd($nombre, $descripcion, $precio, $imagen, $id_categoria, $id){
        $db = $this->connect();
        $query = $db->prepare('UPDATE producto
                               SET nombre = ?, descripcion = ?, precio = ?, imagen = ?, id_categoria = ? 
                               WHERE id = ?');
        $query->execute([$nombre, $descripcion, $precio, $imagen, $id_categoria, $id]);
    }
}



?>