<?php

class CategoriaModel
{

    function connect()
    {
        $db = new PDO("mysql:host=localhost; dbname=local_limpieza", "root", "");
        return $db;
    }

    public function getCategorias()
    {
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM categoria');
        $query->execute();

        $categorias = $query->fetchAll(PDO::FETCH_OBJ);

        return $categorias;
    }
    public function getCategoriabyId($id){
            $db = $this->connect();
    
            $query = $db->prepare('SELECT * FROM categoria WHERE id_categoria = ?');
            $query->execute([$id]);
    
            $categoria = $query->fetchAll(PDO::FETCH_OBJ);
    
            return $categoria;
    }
    function updateCategoria($nombre, $descripcion, $imagen,$id){
        $db = $this->connect();
        $query = $db->prepare('UPDATE categoria
                               SET nombre = ?, descripcion = ?, img = ? 
                               WHERE id_categoria = ?');
        $query->execute([$nombre, $descripcion, $imagen, $id]);
    }
}
