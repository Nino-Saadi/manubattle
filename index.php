<?php

require 'config/config.php';
require_once 'helpers/HttpRequest.php';
// require_once 'controllers/userSubscribe.php';



// class userSubscribe extends Controller {
function subscribe(){
    // Tableaux contenant les chemins, script, header
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      extract($_POST);
      pretty_print_r($_POST);
    }
}

subscribe();


// Création d'une nouvelle instance de Book

// $page = $_GET['page'] ?? 'home';
//
// if ($page === 'home') {
//     $controller = new App\Controllers\User();
//     $controller->index();
// } else {
//     // book/show
//     $page = explode('/', $page);
//
//     $controller_name = 'App\\Controllers\\' . $page[0];
//     $method_name = $page[1];
//
//     $router = new $controller_name();
//
//     $router->$method_name();
// }
