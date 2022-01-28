<?php

// require_once "../database/Database.php";
// require "../models/Login.php";
// require_once "../controllers/LoginContr.php";

if(isset($_POST["valid_login"]))
{

    // Getting data from the form
    $username = $_POST["form_username"];
    $password = $_POST["form_password"];

    // Instantiating SignupContr
    include "../database/Database.php";
    include "../models/Login.php";
    include "../controllers/LoginContr.php";
    $login = new LoginContr($username, $password);
    // Running error handlers and user signup
    $login->loginUser();
    $login->listUser();
    // Send back to the front page
    header("location: ../profil.php");
}
