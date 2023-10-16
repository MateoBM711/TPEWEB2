<?php

class LoginView{
    
   public function showLoginForm($error = null){
        require './templates/login.template.phtml';
        
    }
    public function showError($error){
        require './templates/error.templates.phtml';
    }
}