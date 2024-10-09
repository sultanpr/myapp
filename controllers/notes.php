
<?php 

$config = require ("config.php"); 
$db = new database($config['database'], 'root'); 

$heading = "My Notes"; 

$notes = $db->query('select * from notes')->findAll();

require "views/notes.view.php";

