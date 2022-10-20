<?php

class ProductModel {

    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial;charset=utf8' , 'root', '');
    }
    
    public function getAllProducts() {
        $query = $this->db->prepare("SELECT products.*, brands.name as brands FROM products JOIN brands ON products.brand_ID = brands.brand_ID");
        $query->execute();
        $products= $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $products;
    }

    public function getProduct($id){
        $query = $this->db->prepare("SELECT products.*, brands.name as brands FROM products JOIN brands ON products.brand_ID = brands.brand_ID WHERE product_id = ?");
        $query->execute(array($id));
        $product = $query->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    public function deleteProductFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM products WHERE product_ID = ?");
        $response = $sentencia->execute(array($id));
    }
    public function InsertarProducto($name, $milliliters, $price, $brand_ID){
        $query = $this->db->prepare("INSERT INTO products (name, milliliters, price, brand_ID) VALUES (?, ?, ?, ?)");
        $query->execute([$name, $milliliters, $price, $brand_ID]);

        return $this->db->lastInsertId();



    }

    public function editProduct($name, $milliliters, $price, $brand_ID, $product_ID){
    $query = $this->db->prepare('UPDATE products SET name = ?, milliliters = ?, price = ?, brand_ID = ? WHERE product_ID = ?');
    $query->execute([$name, $milliliters, $price, $brand_ID, $product_ID]);
}


   
   
}
