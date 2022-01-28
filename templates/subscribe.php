<?php
require '../helpers/utils.php';
require_once '../database/Database.php';
include "../default_front.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  extract($_POST);
  pretty_print_r($_POST);

}
?>

<header class="header-front">

</header>
<main>
 <div class="login-container">
  <h1>Inscription</h1>
    <form action = "signupinc.php" method="POST">
      <div class="form-group">
        <label for="sub_username">Nom d'utilisateur</label>
        <input type="text" class="form-control" id="sub_username" name="sub_username"   placeholder="Gandalf Le Blanc">
      </div>
      <div class="form-group">
        <label for="sub_password">Mot de Passe</label>
        <input type="password" class="form-control" id="sub_password" name="sub_password"   placeholder="Mot de passe">
      </div>
      <div class="form-group">
        <label for="sub_check_password">Confirmation du mot de passe </label>
        <input type="password" class="form-control" id="sub_check_password" name="sub_check_password"   placeholder="Mot de passe">
      </div>
      <div class="form-group">
        <div class="btn-race">
          <div class="race-label">
            <label for="sub_race">Choississez votre race</label>
          </div>
          <div class="race-items">
            <input type="radio" name="sub_race" value="Elfe"><label>Elfe</label>
            <input type="radio" name="sub_race" value="Humain"><label>Humain</label>
            <input type="radio" name="sub_race" value="Nain"><label>Nain</label>
            <input type="radio" name="sub_race" value="Hobbit"><label>Hobbit</label>
          </div>
        </div>
        <button type="submit" name="valid_inscription" value="Inscription">S'inscrire</button>
      </div>
    </form>

</div>
            </main>
<?php include "footer.php"  ?>
