<?php
class ProductoModel {
    
    function connect(){
        $db = new PDO('mysql:host=localhost;' . 'dbname=local_limpieza;charset=utf8', 'root', '');
        return $db;
    }
    
    
    
    
    function getProductosbyCategoria($idCategoria){
        $db = $this->connect();

        $query = $db->prepare('SELECT p.* FROM producto p JOIN categoria c ON p.id_categoria = " . "\"" . $idCategoria . "\"');
        $query->execute();

        $productos = $query->fetchAll(PDO::FETCH_OBJ);

        return $productos;
    }
}



?>