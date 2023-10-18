<?php

class LoginModel {
    
    private $db;
    
    function __construct(){
        $this->db = new PDO("mysql:host=" . HOST . ";dbname=" . NAME, USER, PASSWORD);
    }

    function getCliente($username){

        $query = $this->db->prepare('SELECT * FROM cliente WHERE username = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}


?>