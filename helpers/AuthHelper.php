<?php

class AuthHelper
{
    public function __construct(){
        session_start();
    }

    public function checkLoggedIn()
    {
        if (!isset($_SESSION['IS_LOGGED'])) {
            session_start();
            header("Location: " . BASE_URL . 'login');
            die();
        }
    }


    public function getUser(){
        return $_SESSION;
    }
}
