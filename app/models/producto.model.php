<?php
class ProductoModel {
    
    function connect(){
        $db = new PDO('mysql:host=localhost;' . 'dbname=local_limpieza;charset=utf8', 'root', '');
        return $db;
    }
    
    
    function getProductosbyCategoria($idCategoria = null){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM producto WHERE id_categoria = ?');
        $query->execute([$idCategoria]);

        $productos = $query->fetchAll(PDO::FETCH_OBJ);

        return $productos;
    }
}



?>