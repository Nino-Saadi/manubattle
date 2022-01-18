<?php


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

function disconnect()
{
  session_start();
  session_destroy();
  header("Location:");
}


function is_logged():bool
{
  return true;
}

function pretty_print_r($var) {
    echo '<pre>'.print_r($var, true).'</pre>';
  }
