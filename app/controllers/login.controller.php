<?php 
require_once './app/models/login.model.php';
require_once './app/views/login.view.php';

class LoginController {
    private $model;
    private $view;

    function showLogin(){
        $LoginFormTemplate = $this->view->showLoginForm();
    }
    function __construct() {
        $this->view = new LoginView();
        $this->model = new LoginModel();
    }
    public function auth() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            $this->view->showError('Faltan completar datos');
            return;
        }

        $user = $this->model->getCliente($username);
        if ($user && password_verify($password, $user->password)) {
            AuthHelper::login($user);
            
            header('Location: ' . BASE_URL);
        } else {
            $this->view->showError('Usuario inválido');
        }
    }

    public function logout() {
        AuthHelper::logout();
        header('Location: ' . BASE_URL);    
    }
    
}