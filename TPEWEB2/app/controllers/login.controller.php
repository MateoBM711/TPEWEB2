<?php 
//require_once './app/models/';
//require_once 'TPEWEB2\app\models\login.view.php';

class LoginController {
    private $model;
    private $view;

    function __construct() {
      //  $this->view = new LoginView();
        $this->model = new LoginModel();
    }
    
}