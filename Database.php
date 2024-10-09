<?php

class database{
    public $connection; 
    public $statement; 

    public function __construct($config, $user, $pass = '') {
        
        $dsn = "mysql:".http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $user, $pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []){

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params); 
        return $this; 


    }
    public function findAll(){
        return $this->statement->fetchAll(); 
    }

    public function find(){
        return $this->statement->fetch(); 
    }

    public function findOrFail(){
        $result = $this->find(); 

        if(!$result){
            abort('404'); 
        }

        return $result;
    }



}