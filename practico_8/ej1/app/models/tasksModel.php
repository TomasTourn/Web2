<?php 


class tasksModel{


    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de tareas completa.
     */
    public function getAll() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM task");
        $query->execute();

        // 3. obtengo los resultados
        $tasks = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $tasks;
    }
    public function getOne($id) {
        $query = $this->db->prepare("SELECT * FROM task WHERE id = ?");
        $query->execute([$id]);
        $task = $query->fetch(PDO::FETCH_OBJ);
        
        return $task;
    }

    public function insert($title, $description, $priority) {
        $query = $this->db->prepare("INSERT INTO task (titulo, descripcion, prioridad, finalizada) VALUES (?, ?, ?, ?)");
        $query->execute([$title, $description, $priority, false]);

        return $this->db->lastInsertId();
    }





}