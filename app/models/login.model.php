<?php

class LoginModel
{

    function connect()
    {
        $db = new PDO("mysql:host=localhost; dbname=local_limpieza", "root", "");
        return $db;
    }

    function getCliente($username)
    {
        $db = $this->connect();

        $query = $db->prepare('SELECT * FROM cliente WHERE username = ?');
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
