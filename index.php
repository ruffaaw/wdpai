<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('projects', 'DefaultController');
Routing::get('homepage', 'DefaultController');
Routing::get('profile', 'DefaultController');
Routing::get('product', 'DefaultController');
Routing::get('search', 'DefaultController');
Routing::get('searchDesktops', 'DefaultController');
Routing::get('searchLaptops', 'DefaultController');
Routing::get('searchSmartphones', 'DefaultController');
Routing::get('searchTvs', 'DefaultController');
Routing::get('shoppingCart', 'DefaultController');


Routing::post('login', 'SecurityController');

Routing::post('addProject', 'ProjectController');


Routing::run($path);

?>
