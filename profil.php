<?php
include "default_back.php";
$loose = ($_SESSION["game"]) - ($_SESSION["win"]);
$winrate = ($_SESSION["win"]/$_SESSION["game"])*100;
$looserate = ($loose/($_SESSION["game"]))*100;
?>
<div class="profil-container">

  <div class="profil-avatar">
    <img src="assets/img/<?= $_SESSION["race"] ?>-avatar.svg" alt="elf-avatar">
  </div>

  <div class="profil-info">
    <ul class="list-info">
      <h2><li>Nom: <?= $_SESSION["username"] ?></li></h2>
      <li>Race: <?= $_SESSION["race"] ?></li>
      <li>Niveau: <?= $_SESSION["level"] ?></li>
      <li>Nombres de Duels: <?= $_SESSION["game"] ?></li>
      <li>Nombres de Victoire: <?= $_SESSION["win"] ?></li>
      <li>Nombres de Défaites: <?= $loose ?></li>
      <li>Pourcentages de victoires: <?= $winrate?>&percnt;</li>
      <li>Pourcentages de victoires: <?= $looserate?>&percnt;</li>
    </ul>
  </div>

</div>
<?php include "footer.php"  ?>
