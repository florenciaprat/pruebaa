<?php
require_once './models/UserModel.php';
require_once './views/loginView.php';
require_once './helpers/AuthHelper.php';

class AuthController{
    private $model;
    private $view;
    private $authHelper;
    
    function __construct(){
        $this->authHelper= new AuthHelper();
        $this->model= new UserModel();
        $this->view= new loginView($this->authHelper->getUser());
    }

    
    public function showFormLogin() {
        $this->view->showFormLogin();
    }


    public function validateUser() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUserByEmail($email);

        if ($user && password_verify($password, $user->password)) {

            
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);
        } else {
           $this->view->showFormLogin("El usuario o la contraseña no existe.");
        } 
    }
    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }



}