<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser<br>
dans le tableau associatif si la case est cochée ou non.<br>
Exemple :<br>
genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.<br>
</p>

<h2>Resultat</h2>

<input type="checkbox" id="choice1" name="choice1" checked />
<label for="Nom">Nom</label><br>
<input type="checkbox" id="choice2">
<label for="Prenom">Prenom</label><br>
<input type="checkbox" id="choice3">
<label for="Ville">Ville</label><br>

<?php

$elements = [
    "choix1" => true,
    "choix2" => false,
    "choix3" => false];

function genererCheckbox($elements);
