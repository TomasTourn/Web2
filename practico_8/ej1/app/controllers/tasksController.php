<?php

require_once "app/views/apiView.php";
require_once "app/models/tasksModel.php";

class tasksController{

    private $view;
    private $model;
    private $data;

    function __construct(){
        $this->model= new tasksModel();
        $this->view = new ApiView();
        
        // lee el body del request
        $this->data = file_get_contents("php://input");
 

    }

    private function getData() {
        return json_decode($this->data);
    }



    function getAll(){
     
        $tasks= $this->model->getAll();
        return $this->view->response($tasks);
    }

    function getOne($params=null){
        $id=$params[':ID'];
        $this->model->getOne($id);
    
    }


}