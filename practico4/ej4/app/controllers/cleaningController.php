<?php

require_once "app/models/cleaningModel.php";
require_once "app/views/cleaningView.php";

class CleaningController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new cleaningModel();
        $this->view = new cleaningView();
    }



    function showProducts(){
        
        //get the data
        $products= $this->model->getAll();
        //send the data to view to print it
        $this->view->showProducts($products);

    }

    function showInfo($name){
        $product= $this->model->getOne($name);
        $this->view->productInfo($product);

    }

}