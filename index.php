<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('projects', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('addProject', 'ProjectController');

Routing::get('homepage', 'DefaultController');
Routing::get('login', 'DefaultController');
Routing::get('product', 'DefaultController');
Routing::get('profile', 'DefaultController');
Routing::get('search', 'DefaultController');
Routing::get('shoppingCart', 'DefaultController');
Routing::run($path);

?>
