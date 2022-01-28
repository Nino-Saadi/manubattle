<?php
require "helpers/utils.php";
include "default_front.php";

session_start();
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   extract($_POST);
//   pretty_print_r($_POST);
// }
?>
<body>
    <header class="header-front"></header>
    <main>

        <div class="login-container">
              <h1>La Manu Ring</h1>
              <form action="templates/logininc.php" method="POST">

                 <div class="form-group">
                   <label for="form_username">Nom d'utilisateur</label>
                   <input type="text" class="form-control" id="form_username" name="form_username"  required="required" placeholder="Gandalf Le Blanc">
                 </div>

                 <div class="form-group">
                   <label for="form_password">Mot de Passe</label>
                   <input type="password" class="form-control" id="form_password" name="form_password"  required="required" placeholder="Mot de passe">
                 </div>

                <div class="btn-group">
                   <button type="submit" class="btn-login" name="valid_login" value="Connexion">Se connecter</button><p>Ou</p>
                </div>
              </form>
                <a href="../templates/subscribe.php"><button type="submit" name="redirect-Inscription">S'inscrire</button></a>
        </div>

      </main>


<?php include "footer.php"  ?>
