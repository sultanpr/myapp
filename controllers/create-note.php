<?php

$config = require ("config.php"); 
$db = new database($config['database'], 'root'); 

$heading = "Create Note"; 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $errors = []; 

        if(strlen($_POST['body']) === 0){
            $errors['body'] = 'A body is required'; 
        }

        if(strlen($_POST['body']) > 1000){
            $errors['body'] = 'You can not enter more than 100 characters'; 
        }
        
        
        if(strlen($_POST['title']) === 0){
            $errors['title'] = 'A title is required'; 
        }

        if(strlen($_POST['title']) > 200){
            $errors['title'] = 'You can not input more than 200 characters'; 
        }

        if(empty($errors)){
            $db->query('INSERT INTO notes (title, body, user_id) VALUES (:title, :body, :user_id)', [
                'title' => $_POST['title'],
                'body' => $_POST['body'],
                'user_id' => 1 
                
            ]);
        }

}

require "views/create-note.view.php";