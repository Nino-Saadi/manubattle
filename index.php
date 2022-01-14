<?php

require 'config/config.php';
require_once 'helpers/HttpRequest.php';
require 'controllers/Book.php';
require 'controllers/Author.php';

// Création d'une nouvelle instance de Book

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    $controller = new App\Controllers\User();
    $controller->index();
} else {
    // book/show
    $page = explode('/', $page);

    $controller_name = 'App\\Controllers\\' . $page[0];
    $method_name = $page[1];

    $router = new $controller_name();

    $router->$method_name();
}
