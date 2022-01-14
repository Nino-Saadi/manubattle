<?php
namespace App\Controllers;
abstract class Controller
{

    function render($partial_path, $params = array())
    {
        // Crée des variables à partir d'un tableau associatif : les clés déviennent les variables et les valeurs les contenus
        extract($params);
        // on capture le contenu du template index et on l'envoie dans la variable $content
        ob_start();

        require 'templates/' . $partial_path . '.php';

        $content = ob_get_clean();

        require 'templates/default.php';
    }

    public function __call($name, $arguments)
    {
        \HttpRequest::HttpNotFound();

        $this->notFound();
    }

    public function notFound()
    {
        $title = 'Page d\'erreur 404';
        $heading = '';
        $this->render('errors/404', compact('title', 'heading'));
    }
}
