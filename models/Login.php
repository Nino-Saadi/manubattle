<?php
require_once '../database/Database.php';
require_once '../helpers/utils.php';

class Login extends Dbh{

  protected function getUser($username, $password) {
    // récupération du mp correspondant aux user_name
      $stmt = $this->connect()->prepare('SELECT `user_password` FROM `utilisateurs`  WHERE `user_name` = ?;');
      $stmt->execute([$username]);
      if(!$stmt->execute([$username]))
      {
          $stmt = null;
          header("location: ../auth.php?error=stmtfailed");
          exit();
      }

      if($stmt->rowCount() == 0)
      {
          $stmt = null;
          header("location: ../auth.php?error=userNotFound");
          exit();
      }


      $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC); // requête stocker dans une variable
      $pwdHashed = $pwdHashed[0]["user_password"];
      $checkPwd = password_verify($password, $pwdHashed); // Vérification de la correspondance entre le password et le password hacher contenu dans la BDD

      if($checkPwd == false) {
          $stmt = null;
          header("location: ../auth.php?error=wrongPassword");
          exit();
      }
      elseif($checkPwd == true) {
          $stmt = $this->connect()->prepare('SELECT * FROM `utilisateurs` WHERE `user_name` = ? AND `user_password` = ?;');
          $stmt->execute(array($username, $pwdHashed));
          if(!$stmt->execute([$username, $pwdHashed])) {
              $stmt = null;
              header("location: ../auth.php?error=stmtFailed");
              exit();
          }

          // if($stmt->rowCount() == 0) {
          //     $stmt = null;
          //     header("location: ../auth.php?error=userNotFound");
          //     exit();
          // }

          $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $user = $user[0];

          session_start();
          $_SESSION["userid"] = $user["id_user"];
          $_SESSION["username"] = $user["user_name"];
          $_SESSION["race"] = $user["user_race"];
          $_SESSION["win"] = $user["user_total_win"];
          $_SESSION["game"] = $user["user_total_game"];
          $_SESSION["score"] = $user["user_score"];
          $_SESSION["level"] = $user["user_level"];

          $stmt = null;

      }
  }

  public function userList(){
    $stmt = $this->connect()->query('SELECT `user_name` AND `user_score` FROM `utilisateurs` ORDER BY `user_score`;');

    $user_list = $stmt->fetchAll;
    return $user_list;
  }



}
