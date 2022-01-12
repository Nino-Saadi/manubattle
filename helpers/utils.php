<?php


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

function checkId($param)
{
    // on vérifie l'existance d'un paramètre id, non null, de type numérique
    if (!empty($param) && ctype_digit($param)) {
        // on nettoie le paramètre pour se protéger contre les injections de code.
        return filter_var($param, FILTER_SANITIZE_NUMBER_INT);
    }

    return null;
}


function init_session() : bool
{
  if(!session_id())
  {
    session_start();
    session_regenerate_id();
    return true;
  }

  return false;
}
