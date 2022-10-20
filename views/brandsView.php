<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class brandsView{
    private $smarty;

    function __construct($user) {
        $this->smarty = new Smarty();
        $this->smarty->assign('user', $user);

        
    }

function showBrands($brands, $error){
        $this->smarty->assign('brands', $brands);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('titulo', 'Add your brand');
        $this->smarty->display('templates/brandList.tpl');
        
    }

    function showBrandProducts($brandProducts, $brand){
        $this->smarty->assign('brand', $brand);
        $this->smarty->assign('products', $brandProducts);
        $this->smarty->display('templates/brandProducts.tpl');
    }    
  
   function showFormEdit($brand){
    $this->smarty->assign('titulo', 'Edit the brand');
    $this->smarty->assign('brand', $brand);
    $this->smarty->display('./templates/editBrand.tpl');

   }
}
?>