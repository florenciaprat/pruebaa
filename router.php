<?php

require_once './controllers/ProductController.php';
require_once './controllers/BrandController.php';
require_once './controllers/AuthController.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    $action = 'home';
    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }
   $params = explode('/', $action);

   switch($params[0]){
    case 'home':
        $productController = new ProductController();
        $productController-> showHome();
        break;
    case 'login':
        $authController= new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController= new AuthController();
        $authController->logout();
        break;
    case 'view-product':
        $productController = new ProductController();
        $productController->viewProduct($params[1]);
        break;
    case 'delete-product':
        $productController = new ProductController();
        $productController->deleteProduct($params[1]);
        break;
    case 'add-product':
        $productController = new ProductController();
        $productController->addProduct();
        break;
    case 'add-brand':
        $brandController = new BrandController();
        $brandController->addBrand();
        break;
    case 'edit-product-form':
        $productController = new ProductController();
        $productController->updateProduct($params[1]);
        break;
    case 'edit-product':
        $productController = new ProductController();
        $productController->editProduct($params[1]);
        break;
    case 'brands':
        $brandController = new BrandController();
        $brandController->showBrands();
        break;
    case 'delete-brand':
        $brandController = new BrandController();
        $brandController->deleteBrand($params[1]);
        break;
    case 'edit-brand-form':
        $brandController = new BrandController();
        $brandController->updateBrand($params[1]);
        break;
    case 'edit-brand':
        $brandController = new BrandController();
        $brandController->editBrand($params[1]);
        break;
    case 'view-brand-products':
        $brandController = new BrandController();
        $brandController->viewBrandProducts($params[1]);
        break;
     default:
        $productController=new ProductController();
        $productController->showErrorDefault();
        break;
   }
