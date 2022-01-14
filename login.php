<?php

require './database/Database.php';
require './helpers/utils.php';
init_session();
// Permet de hacher puis de vérifier par la suite le mot de passe


// On verifie que l'utilisateur à bien rentrer les données en post
if(isset($_POST['valide_connection']))
  if(isset($_POST['form_username']) && !empty($_POST['form_username']) &&
     isset($_POST['form_password']) && !empty($_POST['form_password']))
   {
     $username = $_POST['form_username'];
     $password = $_POST['form_password'];

     // $sql = ' SELECT * FROM utilisateur WHERE user_name = :name';
     // $fields = ['name' => $username];

     $stmt = Database::getInstance()->prepare('SELECT * FROM `utilisateurs` WHERE `user_name` = ?');
     $stmt->execute([$username]);
     $req = $stmt->fetch();

     // pretty_print_r($req);
     // pretty_print_r(password_verify($password, $req['user_password']);

     if($req)
     {
        if(password_verify($password, $req['user_password']))
        {
          echo 'Connecté';
          // header('location: index.php')
          // init_session();

          // $_SESSION['user_name'] = $username;
        }
        echo 'Identifiant ou mot de passe incorect';
      }
 }
 ?>
