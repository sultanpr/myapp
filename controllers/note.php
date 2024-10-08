<?php

$config = require ("config.php"); 
$db = new database($config['database'], 'root'); 

$heading = "My Notes"; 

$id = $_GET['id'];


$note = $db->query('select * from notes where user_id = :id', ['id' => $id] )->fetch();


require "views/note.view.php";