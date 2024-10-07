<?php

function dd($value){

    echo "<pre>"; 

    var_dump($value); 

    echo "</pre>"; 

    die();
}

function urIs($uri){
    return $_SERVER['REQUEST_URI'] === $uri; 
}

