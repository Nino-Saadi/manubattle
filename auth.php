<?php
require "helpers/utils.php";
include "default_front.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  extract($_POST);
  pretty_print_r($_POST);
}
?>
<body>
    <header class="header"></header>
    <main>
        <div class="login-container">
              <h1>La Manu Ring</h1>
              <form method="POST" action="templates/logininc.php">

                 <div class="form-group">
                   <label for="form_username">Nom d'utilisateur</label>
                   <input type="text" class="form-control" id="form_username" name="form_username"  required="required" placeholder="Gandalf Le Blanc">
                 </div>

                 <div class="form-group">
                   <label for="form_password">Mot de Passe</label>
                   <input type="password" class="form-control" id="form_password" name="form_password"  required="required" placeholder="Mot de passe">
                 </div>

                <div class="btn-group">
                   <button type="submit" class="btn-login" name="valid_login" value="Connexion" href="subscribe.php">Se connecter</button><p>Ou</p>
                </div>
              </form>
                <a href="../templates/subscribe.php"><button type="submit" name="Reditrect-Inscription">S'inscrire</button></a>
        </div>
<div class="conect">
  <?php  if(isset($_SESSION["userid"])){
  ?>
  <h1>Bienvenue <?= $_SESSION["username"]?></h1>
  <a href="templates/logout.php">LOGOUT</a>
  <?php }
  else {
  ?>
  <h1>En attente de la connexion</h1>
<?php } ?>
</div>
      </main>


    <footer class="footer">

    </footer>
</body>

</html>
