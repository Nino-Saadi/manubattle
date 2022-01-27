<?php
require_once "../database/Database.php";
require "../models/SignUp.php";
require_once "../controllers/SignUpContr.php";

if (isset($_POST["valid_inscription"])) {

  //Extract de la data
  $username = $_POST["sub_username"];
  $password = $_POST["sub_password"];
  $passwordCheck = $_POST["sub_check_password"];
  $race = $_POST["sub_race"];

  // Initialisation du nouveau utilisateur
  $signup = new SignUpContr($username, $password, $passwordCheck, $race);

  // Runing error message
  $signup->signupUser();

  // Redirection
  header("location: ../welcome.php?erorr=none");

}

 ?>
