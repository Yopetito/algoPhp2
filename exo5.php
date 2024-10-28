<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en<br>
précisant le nom des champs associés.<br>
Exemple :<br>
$nomsInput = ["Nom","Prénom","Ville"];<br>
afficherInput($nomsInput);<br>
</p>

<h2>Resultat</h2>

<!--label tag defines a label for several elements-->
<!--used to create interactive controls for web-based forms in order to accept data from the user-->    
<!-- 
<label for="Nom">Nom</label><br>
<input type="text"><br>
<label for="Prenom">Prenom</label><br>
<input type="text"><br>
<label for="Ville">Ville</label><br>
<input type="text"><br> -->

<?php

$nomsInput = ["Nom","Prenom","Ville"];
echo afficherInput($nomsInput);

function afficherInput($champs) {
    $affichage = "";
    foreach ($champs as $value) {
        $case = "<label for='$value'>$value</label><br>
                 <input type='text'><br>";
        $affichage .= $case;
    }
return $affichage;  
}
