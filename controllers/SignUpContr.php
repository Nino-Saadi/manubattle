<?php
require_once '../database/Database.php';
require_once '../models/SignUp.php';
require_once '../helpers/utils.php';

class SignUpContr extends SignUp{

  private $username;
  private $password;
  private $passwordCheck;
  private $race;


  public function __construct($username, $password, $passwordCheck, $race){
    $this->username = $username;
    $this->password = $password;
    $this->passwordCheck = $passwordCheck;
    $this->race = $race;
  }

  public function signupUser(){
    if ($this->emptyInput() == false) {
      header("location: subscribe.php?error=emptyInput");
      echo "Les Champs ne sont pas remplis";
      exit();
    }
    if ($this->invalidUserName() == false) {
      header("location: subscribe.php?error=invalidUserName");
      echo "Le nom d'utilisateur incorect ";
      exit();
    }
    if ($this->invalidPwd() == false) {
      header("location: subscribe.php?error=invalidPwd");
      echo "Le mot de passe est incorect";
      exit();
    }

    if ($this->pwdMatch() == false) {
      header("location: subscribe.php?error=passwordUnmatch");
      echo "Le mot de passe ne correspond pas";
      exit();
    }

    if ($this->userNameTaken() == false) {
      header("location: subscribe.php?error=userNameTaken");
      echo "Le nom d'utilisateurs est déjà utilisé";
      exit();
   }

    $this->setUser($this->username, $this->password, $this->race);
  }



  // Fonction permettant de checker si les input on bien était rempli
  private function emptyInput(){
    if (empty($this->username) || empty($this->password) || empty($this->passwordCheck) || empty($this->race))
    {
      $result = false;
    } else {
      $result = true;
    }
    return $result;
  }

  // Fonction permettant de sécuriser le username lors de l'inscription
  private function invalidUserName(){
    if (!preg_match("/^[a-zA-z0-9]*$/", $this->username))
    {
      $result = false;
    } else{
      $result = true;
    }
    return $result;
  }


  // Fonction permettant de sécuriser le username lors de l'inscription
  private function invalidPwd(){
    if (!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/", $this->password))
    {
      $result = false;
    } else{
      $result = true;
    }
    return $result;
  }


  //Fonction permettant de checker et de vérifier une seconde fois le password pour pouvoir le confirmer par la suite
  private function pwdMatch(){
    if ($this->password !== $this->passwordCheck)
    {
      $result = false;
    } else{
      $result = true;
    }
    return $result;
  }



  private function userNameTaken()
  {
    if (!$this->checkUser($this->username)) {
      $resultCheck = false;
    } else{
      $resultCheck = true;
    }

    return $resultCheck;
  }


}

 ?>
