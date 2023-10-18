<?php
class ProductoModel {
    
    function connect(){
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . NAME, USER, PASSWORD);
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
}



?>