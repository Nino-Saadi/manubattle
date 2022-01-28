<?php
include "default_back.php";
?>
<div class="box-battle">
  <h1>COMBATTRE</h1>
  <div class="weapon-box">
    <div class="weapon weapon-rock">
      <i class="fas fa-hand-rock fa-3x"><button>Pierre</button></i>
    </div>
    <div class="weapon weapon-paper">
      <i class="fas fa-hand-paper fa-3x"><button>Feuilles</button></i>
    </div>
    <div class="weapon weapon-chisel">
      <i class="fas fa-hand-scissors fa-3x"><button>Ciseaux</button></i>
    </div>

  </div>
  <div class="resultat"></div>
</div>

<?php include "footer.php"  ?>

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
