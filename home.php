<?php
require './helpers/utils.php';

$passe = 'luffy';
$pass2 = password_hash($passe, PASSWORD_DEFAULT);

echo $pass2;
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

                <button type="submit" class="btn btn-primary" name="redirect_inscription" value="Inscription" href="subscribe.php">Se connecter</button>
              </form>
<br>
                  <h1>Inscription</h1>
                    <form method="POST" action="subscribe.php">
                       <div class="form-group">
                         <label for="form_username">Nom d'utilisateur</label>
                         <input type="text" class="form-control" id="form_username" name="form_username"  required="required" placeholder="Gandalf Le Blanc">
                       </div>

                       <div class="form-group">
                         <label for="form_mail">E-mail</label>
                         <input type="email" class="form-control" id="form_mail" name="form_mail"  required="required" placeholder="leroidumordor@gmail.com">
                       </div>

                       <div class="form-group">
                         <label for="form_sub_password">Mot de Passe</label>
                         <input type="password" class="form-control" id="form_sub_password" name="form_sub_password"  required="required" placeholder="Mot de passe">
                       </div>

                       <div class="form-group">
                         <label for="form_sub_password_check">Confirmer le Mot de passe</label>
                         <input type="password" class="form-control" id="form_sub_password_check" name="form_sub_password_check"  required="required" placeholder="Mot de passe">
                       </div>

                      <button type="submit" class="btn btn-primary" name="redirect_inscription" value="Inscription">S'inscrire</button>
                    </form>
              </div>
            </main>
        </div>
    </header>

    <footer class="footer">

    </footer>
</body>

</html>
