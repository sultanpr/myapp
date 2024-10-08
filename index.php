<?php

// require "functions.php";

// require "router.php";


require "Database.php";
$config = require ("config.php"); 

$db = new database($config, 'root'); 
$posts = $db->query('select * from posts');

foreach($posts as $post){
    echo "<li>".$post['title']."</li>";
}