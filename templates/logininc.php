<?php

require_once "../database/Database.php";
require "../models/Login.php";
require_once "../controllers/LoginContr.php";

if(isset($_POST["valid_login"]))
{

    // Getting data from the form
    $username = $_POST["form_username"];
    $password = $_POST["form_password"];

    // Instantiating SignupContr
    $login = new LoginContr($username, $password);
    // Running error handlers and user signup
    $login->loginUser();

    // Send back to the front page
    header("location: ../sidebar.php?error=none");
}
