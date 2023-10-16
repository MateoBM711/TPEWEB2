<?php

class AuthHelper {

    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($user) {
        AuthHelper::init();
        $_SESSION['USERNAME'] = $user->username;
        $_SESSION['USER_PASSWORD'] = $user->password; 
    }

    public static function logout() {
        AuthHelper::init();
        session_destroy();
    }

    public static function verify() {
        AuthHelper::init();
        if (!isset($_SESSION['USERNAME'])) {
            header('Location: ' . BASE_URL . '/login');
            die();
        }
    }
}
?>