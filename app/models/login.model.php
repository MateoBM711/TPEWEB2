<?php

class LoginModel {
    
    function connect(){
    $db = new PDO('mysql:host=localhost;' . 'dbname=local_limpieza;charset=utf8', 'root', '');
    return $db;
    }

    function getCliente($username, $password){
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM cliente WHERE username =');
        $query->execute();

        $cliente = $query->fetchAll(PDO::FETCH_OBJ);
        return $cliente;
    }
}


?>