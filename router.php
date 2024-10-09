<?php

$routes = require "routes.php";

function routeToController($url, $routes){
    if(array_key_exists($url, $routes)){
        require $routes[$url]; 
    }else{
        abort('404'); 
    }
}

function abort($code){
    http_response_code($code); 

    require "views/{$code}.php";

    die();
}

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
routeToController($url, $routes);