<?php

class cleaningModel{

    private $db;

    function __construct(){ //start the connection with the db
        $this->db = $this->connectDB();
    }
    
    private function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=cleaninghouse;charset=utf8','root',''); 
        return $db;
    }


    function getAll(){
       
    
        $query = $this->db->prepare('SELECT * FROM product');
        $query-> execute();
    
        $products  = $query->fetchAll(PDO::FETCH_OBJ);
    
    
        return $products;
    }


    function getOne($name){
        $query = $this->db->prepare('SELECT * FROM product WHERE name = ?');
        $query-> execute([$name]);
    
        $product  = $query->fetch(PDO::FETCH_OBJ);
    
    
        return $product;
    }



}