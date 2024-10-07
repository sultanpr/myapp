<?php

require "functions.php";

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($url === '/'){
    require "controllers/index.php";
} 
else if($url === '/about'){
    require "controllers/about.php";
} 
else if($url === '/notes'){
    require "controllers/notes.php";
} 
else if($url === '/contact'){
    require "controllers/contact.php";
}

