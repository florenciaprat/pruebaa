<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class loginView{
    private $smarty;

    function __construct($user) {
        $this->smarty = new Smarty();
        $this->smarty->assign('user', $user);

        
    }

    function showFormLogin($error = null) {
        $this->smarty->assign("title", 'Log in');
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/login.tpl');
    }

}
?>