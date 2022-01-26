<?php
require_once '../database/Database.php';
require_once '../helpers/utils.php';

class Login extends Dbh{

  protected function getUser($username, $password) {
    // récupération du mp correspondant aux user_name
      $stmt = $this->connect()->prepare('SELECT `user_password` FROM `utilisateurs`  WHERE `user_name` = ?;');

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
      $checkPwd = password_verify($password, $pwdHashed[0]["user_password"]); // Vérification de la correspondance entre le password et le password hacher contenu dans la BDD

      if($checkPwd == false) {
          $stmt = null;
          header("location: ../auth.php?error=wrongPassword");
          exit();
      }
      elseif($checkPwd == true) {
          $stmt = $this->connect()->prepare('SELECT * FROM `utilisateurs` WHERE `user_name` = ? AND `user_password` = ?;');

          if(!$stmt->execute([$username, $password])) {
              $stmt = null;
              header("location: ../auth.php?error=stmtFailed");
              exit();
          }

          if($stmt->rowCount() == 0) {
              $stmt = null;
              pretty_print_r($stmt);
              header("location: ../auth.php?error=userNotFound");
              exit();
          }

          $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

          session_start();
          $_SESSION["userid"] = $user[0]["id_user"];
          $_SESSION["username"] = $user[0]["user_name"];

          $stmt = null;
      }
  }
}
