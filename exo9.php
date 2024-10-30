<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
Exemple :
afficherRadio($nomsRadio);
</p>

<h2>Resultat</h2>

<?php

$nomsInput = ["Masculin","Féminin","Autre"];
echo afficherRadio($nomsInput);

function afficherRadio($champs) {
    $affichage = "";
    $name = "genre";
    foreach ($champs as $value) { //Attention a l'attribut name. en lui mettant le meme "name" les radio forment tous parti du meme groupe et donc une seule selection est possible
        $radio = "<input type='radio' id='$value' name='$name' value='$value'>
                  <label for='$value'>$value</label><br>";
        $affichage .= $radio;
    }
return $affichage;
}