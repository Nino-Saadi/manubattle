<?php
require '../../helpers/utils.php'
?>
<body>
  <?php init_session(); ?>
    <header class="header">
        <div class="header__container">
            <h1>Connexion</h1>
            <main>
              <form method="POST">
                 <div class="form-group">
                   <label for="log_username">Nom d'utilisateur</label>
                   <input type="text" class="form-control" id="log_username" name="log_username"  required="required" placeholder="Gandalf Le Blanc">
                 </div>

                 <div class="form-group">
                   <label for="log_password">Mot de Passe</label>
                   <input type="password" class="form-control" id="log_password" name="log_password"  required="required" placeholder="Mot de passe">
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
