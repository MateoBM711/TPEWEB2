<?php

class CategoriaModel {
    
    function connect(){
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . NAME, USER, PASSWORD);
        return $db;
    }
    
    public function getCategorias(){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM categoria');
        $query->execute();

        $categorias = $query->fetchAll(PDO::FETCH_OBJ);

        return $categorias;
    }
}