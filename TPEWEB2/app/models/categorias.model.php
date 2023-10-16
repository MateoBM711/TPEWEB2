<?php

class CategoriaModel {
    
    function connect(){
        $db = new PDO('mysql:host=localhost;' . 'dbname=local_limpieza;charset=utf8', 'root', '');
        return $db;
    }
    
    
    
    
    function getCategorias(){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM categoria');
        $query->execute();

        $categorias = $query->fetchAll(PDO::FETCH_OBJ);

        return $categorias;
    }
}