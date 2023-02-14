<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('projects', 'ProjectController');
Routing::get('products', 'ProductController');
Routing::get('profile', 'DefaultController');
Routing::get('product', 'DefaultController');
Routing::get('shoppingCart', 'DefaultController');

//Routing::get('search', 'DefaultController');
Routing::get('productsDesktops', 'ProductController');
Routing::get('productsLaptops', 'ProductController');
Routing::get('productsSmartphones', 'ProductController');
Routing::get('productsTvs', 'ProductController');

Routing::post('register', 'RegisterController');

Routing::post('login', 'SecurityController');

Routing::post('addProject', 'ProjectController');
Routing::post('search','ProjectController');


Routing::run($path);

?>
