<?php

class LoginModel {
    private $db;
    
    
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=local_limpieza;charset=utf8', 'root', '');
    }

    function getCliente($username){

        $query = $this->db->prepare('SELECT * FROM cliente WHERE username = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}


?>