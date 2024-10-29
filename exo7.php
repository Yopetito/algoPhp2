<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser<br>
dans le tableau associatif si la case est cochée ou non.<br>
Exemple :<br>
genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.<br>
</p>

<h2>Resultat</h2>

<!-- <input type="checkbox" id="choice1" name="choice1" checked />
<label for="Nom">Nom</label><br>
<input type="checkbox" id="choice2">
<label for="Prenom">Prenom</label><br>
<input type="checkbox" id="choice3">
<label for="Ville">Ville</label><br> -->

<?php

$elements = [
    "choix1" => 'checked',
    "choix2" => '',
    "choix3" => ''];

function genererCheckbox($elements){
    $htmlSortie = ""; // var stockage, comme dans le 6, stock le HTML dans la var pour apres l'utilisé dans le return.
    
    foreach ($elements as $label => $checkedStatus){
        $checkedAttribute = ($checkedStatus === "checked") ? 'checked' : ''; // Si $checkedStatus(valeur) est "checked", $checkedAttribute prendra la valeur 'checked', sinon elle sera vide
        // Ajouter la case à cocher HTML à la sortie
        $htmlSortie .= "<label>";
        $htmlSortie .= "<input type='checkbox' name='$label' $checkedAttribute> $label";
        $htmlSortie .= "</label><br>";
    }
    
    return $htmlSortie; // Retourne out le HTML à montré.
}

echo genererCheckbox($elements);