<?php session_start(); ?>
<body>

<!-- <div class="bord">
  <div class="bord bord-title">
    <h1>La Manu Ring</h1>
  </div>
  <div class="bord bord-logout">
    <a href="auth.php">Se Déconnecter</a>
  </div>
</div> -->
    <nav class="side-container">

      <!-- Profil de la sidebar -->

      <div class="side-profil">
        <div class="side-head">
          <img src="assets/img/elf-avatar.svg" width="150px" height="150px" alt="elfe-avatar">
          <h2><?= $_SESSION["username"] ?></h2>
        </div>

      <div class="side-grade">
        <p>Elfe Vanyar - Niveau 10</p>
      </div>

      <div class="side-quote">
        <blockquote>
          <p>&quot Je préfère vivre une vie de mortelle avec vous que de devoir affronter tout les âges du monde seul &quot</p>
        </blockquote>
      </div>
    </div>

      <!-- Navigation -->

      <ul class="list-group">

        <a href="dashboard.php">
          <li class="list-group-item">
            <i class="fas fa-home"></i>
            Tableau de bord
          </li>
        </a>

        <a href="classement.php">
          <li class="list-group-item">
            <i class="fas fa-trophy"></i>
            Classement
          </li>
        </a>

        <a href="invites.php">
          <li class="list-group-item">
            <i class="fas fa-envelope"></i>
            Invitations
          </li>
        </a>

        <a href="friends.php">
          <li class="list-group-item">
            <i class="fas fa-users"></i>
            Friends
          </li>
        </a>

        <a href="duel.php">
          <li class="list-group-item">
            Duel
          </li>
        </a>

      </ul>

    </nav>
  </body>
</html>
