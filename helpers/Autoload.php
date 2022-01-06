<?php

class Autoload
{
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'load']);
    }

    public static function load($class_name) {
        // rétirer App tu nom
        // App\\Helpers\\Validatior
        $class_name = str_replace('App\\', '', $class_name);
        // Helpers\\Validatior
        // mettre la 1ère lettre en minuscule
        $class_name = lcfirst($class_name);
        // transformer les antislash en slash
        $class_name = str_replace('\\', '/', $class_name);
        require_once ROOT . '/' . $class_name . '.php';
    }
}
