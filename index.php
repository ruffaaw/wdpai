<?php

require 'Routing.php';

session_start();

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('products', 'ProductController');
Routing::post('productsDesktops', 'ProductController');
Routing::post('productsLaptops', 'ProductController');
Routing::post('productsSmartphones', 'ProductController');
Routing::post('productsTvs', 'ProductController');
Routing::post('search', 'ProductController');
Routing::post('register', 'RegisterController');
Routing::post('loginButtons', 'SecurityController');
Routing::post('login', 'SecurityController');
Routing::post('addProject', 'ProjectController');
Routing::post('searchProjects','ProjectController');
Routing::get('shopping-cart','DefaultController');
Routing::post('sort','ProductController');
Routing::post('logout', 'SecurityController');

Routing::run($path);

?>
