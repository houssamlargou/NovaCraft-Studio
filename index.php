<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/" => "views/home.php",
    "/about" => "views/about.php",
    "/contact" => "views/contact.php",
    "/services" => "views/services.php",
];

if(array_key_exists($uri, $routes)){
    return require $routes[$uri];
} else {
    http_response_code(404);
    require "views/404.php";
    die();
}