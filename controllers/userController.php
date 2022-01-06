<?php

namespace App\controllers;

class UserController extends Controller{


  public function login()
  {

     return $this->view('auth.login');
  }

  public function loginPost()
  {
    $validator = new Validator($_POST);
    $errors = $validator->validate([
      'username'=>['required', 'min:3'],
      'password'=>['required']
    ])

    if ($errors) {
       $SESSION['errors'][]= $errors;
       header('Location: /login');
       exit;
    }

    $user = (new User($this->getDB()))->getByUsername($_POST['username']);

    // Condition permettant de vérifier si le mot de passe correspond bien au mp du user
    if (password_verify($_POST['password'], $user->password)){
      if
    } else{
      return header('Location: /Login');
    }

  }
}

 ?>
