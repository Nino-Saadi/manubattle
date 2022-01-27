<?php
include "default_back.php"
?>

<div class="profil-avatar">
  <img src="assets/img/elf-avatar.svg" alt="elf-avatar">
</div>
<ul>
  <li><?= $_SESSION["username"] ?></li>
  <li><?= $_SESSION["race"] ?></li>
  <li><?= $_SESSION["game"] ?></li>
  <li><?= $_SESSION["win"] ?></li>
  <li><?= $_SESSION["level"] ?></li>
</ul>
