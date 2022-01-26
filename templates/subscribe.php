<?php
require '../helpers/utils.php';
require_once '../database/Database.php';
include "../default_front.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  extract($_POST);
  pretty_print_r($_POST);

}
  // if(isset($_POST['valid_inscription']))
    // if(isset($_POST['sub_username']) && !empty($_POST['sub_username']) &&
    //    isset($_POST['sub_password']) && !empty($_POST['sub_password'])&&
    //    isset($_POST['sub_check_password']) && !empty($_POST['sub_check_password'])&&
    //    isset($_POST['sub_race']) && !empty($_POST['sub_race']))
  //      {
         // $username = $_POST['sub_username'];
         // $password = $_POST['sub_password'];
         // $password2 = $_POST['sub_check_password'];
         // $race = $_POST['sub_race'];
         // $patternMp = '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/';
         // // $patternUser = ;
         // $passhash = password_hash($password, PASSWORD_DEFAULT);



         // function checkUserName(){
         //
         //   $username = $_POST['sub_username'];
         //
         //   $stmt = Database::getInstance()->prepare('SELECT * FROM `utilisateurs` WHERE `user_name` = ?');
         //
         //   $stmt->execute([$username]);
         //
         //   $user = $stmt->fetch();
         //
         //   return $user;
         //
         // }
         //
         // if ($username == checkUserName()) {
         //   echo "nom d'utilisateur existe déjà";
         // } else{
         //   echo "ok";
         // }
// pretty_print_r(Database::getInstance());

       //   function regex($patern, $subject)
       //   {
       //       $regex_result = preg_match($patern, $subject);
       //       return $regex_result;
       //   }
       //
       // if (regex($patternMp, $password)) {
       //   $password = $passhash;
       //   echo $password;
       // } else{
       //   echo "Votre mot de passe doit contenir aux moins 8 caractère, 1 majuscule, 1 minuscule, 1 nombre";
       // }



      // if (checkUserName($username) ) {
      //
      // }

       // $stmt = Database::getInstance()->prepare('INSERT INTO `user_name`, `user_password`, `user_race` FROM `utilisateurs` VALUES (?,?,?)');
       //
       // // on exécute la requête en précisant la valeur du paramètre
       //
       // $stmt->execute([$username, $passhash, $race]);
       //
       // if ($stmt == true) {
       //         echo "Records added successfully.";
       //     } else {
       //         echo "error";
       //     }








       // if ($username.lenght() <= 15 && $username.lenght()  >= 8) {
       //   echo "Pseudo valide";
       // }else{
       //   echo "Votre pseudo doit contenir moins plus de 15 caractère et/ou déjà pris";
       // }
       //
       // // ^ start the regex \ S* Any set of characters / (?=\S{8,}) At least 8 length / (?=\S*[a-z]) One lowercase / (?=\S*[A-Z]) One Uppercase / (?=\S*[\d]) At least one number / $ end the regex
       // if (!preg_match($pattern, $password)){
       //   echo " votre mot de passe doit contenir aux moins 8 caractère, 1 majuscule, 1 minuscule, 1 nombre";
       // }else {
       //   echo "ok";
       // }

       // // Tableaux contenant les chemins, script, header
       // if ($_SERVER["REQUEST_METHOD"] == "POST") {
       //   extract($_POST);
       //   pretty_print_r($_POST);
       // }
     // }
?>
<body>
  <?php init_session(); ?>
    <header class="header">
        <div class="header__container">
            <h1>Inscription</h1>
            <main>
              <form action = "signupinc.php" method="POST">
                 <div class="form-group">
                   <label for="sub_username">Nom d'utilisateur</label>
                   <input type="text" class="form-control" id="sub_username" name="sub_username"   placeholder="Gandalf Le Blanc">
                 </div>
<br>
                 <div class="form-group">
                   <label for="sub_password">Mot de Passe</label>
                   <input type="password" class="form-control" id="sub_password" name="sub_password"   placeholder="Mot de passe">
                 </div>
<br>
                 <div class="form-group">
                   <label for="sub_check_password">Confirmation du mot de passe </label>
                   <input type="password" class="form-control" id="sub_check_password" name="sub_check_password"   placeholder="Mot de passe">
                 </div>
<br>
                 <div class="form-group">
                   <label for="sub_race">Choississez votre race</label>
                   <input type="radio" name="sub_race" value="Elfe"><label>Elfe</label>
                   <input type="radio" name="sub_race" value="Humain"><label>Humain</label>
                   <input type="radio" name="sub_race" value="Nain"><label>Nain</label>
                   <input type="radio" name="sub_race" value="Hobbit"><label>Hobbit</label>
                 </div>
<br>
                <button type="submit" name="valid_inscription" value="Inscription">S'inscrire</button>
              </form>
            </main>
      </body>
