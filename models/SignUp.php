<?php
require_once '../database/Database.php';
// require_once "User.php";

class SignUp extends Dbh {

  protected function setUser($username, $password, $race){
    $stmt = $this->connect()->prepare('INSERT INTO `utilisateurs` (`user_name`, `user_password`, `user_score`,`user_total_game`,`user_total_win`, `user_level`, `user_race`, `id_grade`) VALUES (?, ?, 0, 0, 0, 0, ?, 1);');

    $hashpwd = password_hash($password, PASSWORD_DEFAULT);

    if (!$stmt->execute([$username, $hashpwd, $race])) {
      $stmt = null;
      header ("location: ../auth.php?error=stmtfailed");
    }

    $stmt = null;
  }

  protected function checkUser($username){
    $stmt = $this->connect()->prepare('SELECT `user_name` FROM `utilisateurs` WHERE `user_name`=?');
    if (!$stmt->execute([$username])) {
      $stmt = null;
      header("location:../auth.php?error=stmtfailed");
      exit();
    }
    $resultCheck;
    if ($stmt->rowCount() > 0) {
      $resultCheck = false;
    } else{
      $resultCheck = true;
    }
    return $resultCheck;
  }


}
 ?>
