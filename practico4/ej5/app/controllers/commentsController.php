<?php

    require_once "app/views/commentsView.php";
    require_once "app/models/commentsModel.php";


class commentsController{

    private $model;
    private $view;

    function __construct(){
        $this->model= new commentsModel();
        $this->view = new commentsView();
    }
   



    function showComments(){

        $comments= $this->model->getAll();
        $this->view->showComments($comments);
    }

    function showForm(){
        $this->view->showForm();
    }

    function addComment(){

        $comment=$_POST['comment'];
   
        $this->model->addComment($comment);
        $comments = $this->model->getAll();
        $this->view->showComments($comments);
    }


}