<?php

namespace App\models;

require_once 'Model.php';
require_once '../helpers/utils.php';


class User extends Model{

  private $id_user;
  private $username;
  private $password;
  private $score;
  private $totalGame;
  private $totalWin;
  private $level;
  private $race;

  protected $table = 'utilisateurs';

  public function userDetails()
  {
    // on utilise la méthode prepare car notre requête a pas besoin d'un paramètre envoyé par l'utilisateur.
    $stmt = Database::getInstance()->prepare('SELECT * ` FROM `utilisateurs` WHERE `id` = ?');

    $stmt->execute([$this->id_user]);

    //  on extrait les données de la réponse réçue.
    $users = $stmt->fetchAll();

    return $users;

  }

  public function subscribe()
  {
    // on utilise la méthode prepare car notre requête a pas besoin d'un paramètre envoyé par l'utilisateur.
    $stmt = Database::getInstance()->prepare('INSERT INTO `user_name`, `user_password`, `user_race` FROM ? VALUES (?,?,?)');

    // on exécute la requête en précisant la valeur du paramètre

    $stmt->execute([$this->table, $this->username, $this->password, $this->race]);

    if ($stmt == true) {
            echo "Records added successfully.";
        } else {
            echo "error";
        }

    return $user;
  }


  public function login()
  {
    // on utilise la méthode prepare car notre requête a pas besoin d'un paramètre envoyé par l'utilisateur.
    $stmt = Database::getInstance()->prepare('INSERT INTO `user_name`, `user_password`, `user_race` FROM `?` WHERE `id` = ?');

    // on exécute la requête en précisant la valeur du paramètre

    $stmt->execute([$this-> table, $this->id_user]);

    return $user;

  }



public function checkUserName(){

  $stmt = Database::getInstance()->prepare('SELECT * FROM `utilisateurs` WHERE `user_name` = ?');

  $stmt->execute([$username]);

  $user = $stmt->fetch();

  return $user;

  // if ($user){
  //   echo "le nom d'utilisateur est déjà utilisé";
  // } else {
  //   echo "Ok";
  // }
}


  public function getByUsername(string $username): User
  {
    // on utilise la méthode prepare car notre requête a pas besoin d'un paramètre envoyé par l'utilisateur.
    $stmt = Database::getInstance()->prepare('SELECT * FROM ' . $this->table . ' WHERE `id` = ?');

    // on exécute la requête en précisant la valeur du paramètre

    $stmt->execute([$this->id_user]);

    //  on extrait les données de la réponse réçue.

    $username = $stmt->fetch();

    return $user;

  }


}
