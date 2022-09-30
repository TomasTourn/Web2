<?php

class commentsModel{


    private $db;

    function __construct(){ //start the connection with the db
        $this->db = $this->connectDB();
    }
    
    private function connectDB(){
        $db = new PDO('mysql:host=localhost;'.'dbname=anonymouscomments;charset=utf8','root',''); 
        return $db;
    }


    
    function getAll(){
       
    
        $query = $this->db->prepare('SELECT * FROM comments');
        $query-> execute();
    
        $comments  = $query->fetchAll(PDO::FETCH_OBJ);
    
    
        return $comments;
    }


    function addComment($comment){

        $query = $this->db->prepare('INSERT INTO comments (comment) VALUES (?)');

        $query-> execute([$comment]);
        
        return $this->db->lastInsertId();//para no pasar id como parametro

    }

}