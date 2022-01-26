<?php include "default_front.php" ?>
<body>
    <!-- Formulaire du choix des races -->

  <form class="form-race"  method="post">
    <h1>Choississez votre race</h1>
    <div class="race-container">
      <div>

        <div class="race race-human">
          <input type="radio" name="race" id="human" value="human">
          <label for="human"><img src="assets/img/hobbit-avatar.svg" alt="human-avatar"><h2>Humain</h2></label>
        </div>

        <div class="race race-hobbit">
          <input type="radio" name="race" id="hobbit" value="hobbit">
          <label for="hobbit"> <img src="assets/img/hobbit-avatar.svg" alt="hobbit-avatar"><h2>Hobbit</h2></label>
        </div>

      </div>


      <div>

        <div class="race race-elfe">
          <input type="radio" name="race" id="elfe" value="elfe">
          <label for="elfe"><img src="assets/img/elf-avatar.svg" alt="elfe-avatar"><h2>Elfe</h2></label>
        </div>

        <div class="race race-nain">
          <input type="radio" name="race" id="nain" value="nain">
          <label for="nain"><img src="assets/img/hobbit-avatar.svg" alt="nain-avatar"><h2>Nain</h2></label>
        </div>

      </div>

    </di v>

  </form>
    <!-- Bouton de Validation -->
    <div class="race-button">
      <a href="welcome.php"><button type="submit" name="race-confirm">Valider</button></a>
    </div>

</body>
