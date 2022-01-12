<?php


// Permet de hacher puis de vérifier par la suite le mot de passe
// $pass = 'passe';
// $hash = password_hash($pass, PASSWORD_BCRYPT);
//
// echo password_verify($pass, $hash);

// On verifie que l'utilisateur à bien rentrer les données en post
if(isset($_POST['valid_connection']))
  if(isset($_POST['form_username'])) && !empty($_POST['form_username']) &&
     isset($_POST['form_password']) && !empty($_POST['form_password']))
   {
     $username = $_POST['form_username'];
     $password = $_POST['form_password'];

     $sql = ' SELECT * FROM utilisateur WHERE username = :name';
     $fields = ['name' => $username,];

     $req = Database::getInstance()->request($sql, $fields);

     if($req)
     {
        if(password_verify($password, $req->user_pasword))
        {
          echo 'Connecté';
          // header('location: index.php')
          // init_session();

          // $_SESSION['user_name'] = $username;
        }
     }
     echo 'Identifiant ou mot de passe incorect';

   }

 ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header class="header">
        <div class="header__container">
            <h1>Connexion</h1>
            <main>
              <form>
                 <div class="form-group">
                   <label for="form_username">Nom d'utilisateur</label>
                   <input type="text" class="form-control" id="form_username" placeholder="Gandalf Le Blanc">
                 </div>

                 <div class="form-group">
                   <label for="form_password">Mot de Passe</label>
                   <input type="password" class="form-control" id="form_password" placeholder="Mot de passe">
                 </div>

                <button type="submit" class="btn btn-primary">Se connecter</button>
              </form>
            </main>
        </div>
    </header>
    <footer class="footer">

    </footer>
</body>

</html>
