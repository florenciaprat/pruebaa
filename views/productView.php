<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class productView{
    private $smarty;

    function __construct($user) {
        $this->smarty = new Smarty();
        $this->smarty->assign('user', $user);

        
    }
    function showProducts($products, $brands){
        $this->smarty->assign('titulo', 'Add your product');
        $this->smarty->assign('products', $products);
        $this->smarty->assign('brands', $brands);
        $this->smarty->display('templates/productList.tpl');
    }
    function showProduct($product){
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/viewProduct.tpl');

    }
    function editProduct($product, $brands){
        $this->smarty->assign('titulo', 'Edit the product');
        $this->smarty->assign('product', $product);
        $this->smarty->assign('brands', $brands);
        $this->smarty->display('./templates/editProduct.tpl');
    
       }
    
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showErrorDefault(){
    $this->smarty->assign('error', 'Error 404 not found');
    $this->smarty->display('templates/errorDefault.tpl');
    }

}?>
