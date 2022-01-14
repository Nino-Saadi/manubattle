<?php
require './helpers/utils.php'
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Manu Ring</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <?php init_session(); ?>
    <header class="header">
        <div class="header__container">
            <h1>Connexion</h1>
            <main>
              <form method="POST" action="login.php">
                 <div class="form-group">
                   <label for="form_username">Nom d'utilisateur</label>
                   <input type="text" class="form-control" id="form_username" name="form_username"  required="required" placeholder="Gandalf Le Blanc">
                 </div>

                 <div class="form-group">
                   <label for="form_password">Mot de Passe</label>
                   <input type="password" class="form-control" id="form_password" name="form_password"  required="required" placeholder="Mot de passe">
                 </div>

                <button type="submit" class="btn btn-primary" name="valide_connection" value="Connexion">Se connecter</button>
                <button type="submit" class="btn btn-primary" name="redirect_inscription" value="Inscription">S'inscrire</button>
              </form>
            </main>
        </div>
    </header>
    <footer class="footer">

    </footer>
</body>

</html>
