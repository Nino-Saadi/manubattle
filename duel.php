<?php
include "default_back.php";
?>
<main class="box-battle">
  <h1>COMBATTRE</h1>
  <button>Pierre</button>
  <button>Feuille</button>
  <button>Ciseaux</button>
  <div class="resultat"></div>
</main>

<script>
const buttons = document.querySelectorAll("button");
// const resultat = document.querySelector(".resultat");

for (let i = 0; i < buttons.length; i++) {
buttons[i].addEventListener('click', function() {
  const joueur = buttons[i].innerHTML;
  const robot = buttons[Math.floor(Math.random() * buttons.length)].innerHTML;
  let resultat = "";
  // resultat.innerHTML = joueur + "       " + robot;
  if (joueur===robot) {
    resultat = "Egalité";
  }
  else if ((joueur === "Pierre" && robot === "Ciseaux") || (joueur === "Ciseaux" && robot === "Feuilles") || (joueur === "Feuilles") && (robot === "Pierre")) {
    resultat = "Gagné";
  }
  else {
    resultat = "Perdu";
  }
document.querySelector(".resultat").innerHTML = accesskey= `
Joueur : ${joueur} </br>
Robot : ${robot} <br/>
Résultat : ${resultat}
` ;

});


}
</script>
