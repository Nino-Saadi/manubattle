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
