<?php

class HttpRequest
{

    public static function redirectTo($path)
    {
        header('Location:' . $path . '.php');
        exit();
    }

    public static function HttpNotFound() {
        header("HTTP/1.1 404 Not Found");
    }
}
