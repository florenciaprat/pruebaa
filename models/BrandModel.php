<?php

class BrandModel {

private $db;

public function __construct() {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial;charset=utf8' , 'root', '');
}


 
public function getAllBrands() {
    $query = $this->db->prepare("SELECT * FROM brands");
    $query->execute();
    $brands = $query->fetchAll(PDO::FETCH_OBJ);
    
    return $brands;
}
public function getBrand($id){
    $query = $this->db->prepare("SELECT * from brands WHERE brand_ID = ?");
    $query->execute(array($id));
    $brand = $query->fetch(PDO::FETCH_OBJ);
    return $brand;
}

public function getProducts($id){
    $query = $this->db->prepare("SELECT a.* FROM products a INNER JOIN brands b ON a.brand_ID = b.brand_ID WHERE a.brand_ID = ?");
    $query->execute(array($id));
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    
    return $products;

}

public function deleteBrandById($id){
    $query = $this->db->prepare("DELETE FROM brands WHERE brand_ID = ?");
    $query->execute(array($id));    
}

public function InsertBrand($name, $country, $foundation, $website){
    $query = $this->db->prepare("INSERT INTO brands (name, country, foundation, website) VALUES (?, ?, ?, ?)");
    $query->execute([$name, $country, $foundation, $website]);

    return $this->db->lastInsertId();
}

public function editProduct($name, $country, $foundation, $website, $brand_ID){
    $query = $this->db->prepare('UPDATE brands SET name = ?, country = ?, foundation = ?, website = ? WHERE brand_ID = ?');
    $query->execute([$name, $country, $foundation, $website, $brand_ID]);
}

}