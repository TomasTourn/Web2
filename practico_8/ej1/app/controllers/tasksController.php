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
        $task= $this->model->getOne($id);
              // si no existe devuelvo 404
              if ($task)
              $this->view->response($task);
          else 
              $this->view->response("La tarea con el id=$id no existe", 404);
    }

    function addTask(){

        $task=$this->getData();

        if(empty($task->titulo)||empty($task->descripcion)||empty($task->prioridad)){
            $this->view->response("completar datos",400);
        }else{
            $id=$this->model->addTask($task->titulo,$task->descripcion,$task->prioridad);
            $this->view->response("la tarea se inserto con exito con el id: $id",201);
        }
    }
    function deleteTask($params = null){

        $id= $params[':ID'];

        $task= $this->getData();

        if($task){
            $this->model->deleteTask($id);
            $this->view->response("la tarea fue eliminada con exito");
        }else{

            $this->view->response("la tarea con el id: $id no existe",404);
        }
    }

    function updateTask($params = null){

        $id= $params[':ID'];

       $task= $this->getData();

       if($task){
        $this->model->updateTask($id,$task);
        $this->view->response($task);
       }else{
        $this->view->response("la edicion salio mal, vuelva a intentarlo",404);
       }



    }

}