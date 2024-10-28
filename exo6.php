<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau<br>
de valeurs.<br>
Exemple :<br>
$elements = ["Monsieur","Madame","Mademoiselle"];<br>
alimenterListeDeroulante($elements);<br>
</p>

<h2>Resultat</h2>

<!-- 
<select name="civil" id="civilites">
    <option value="Monsieur">Monsieur</option>
    <option value="Madame">Madame</option>
    <option value="Mademoisselle">Mademoisselle</option>
</select> -->

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements){
    $label = "<label for='civilites'>Choisir votre civilité</label><br>";
    $sel = "<select name='civilities' id='civilites'>";
       
    foreach ($elements as $civility){
            $sel .= "<option value='$civility'>$civility</option>"; //fait les cases de la liste deroulante attribué a $sel 
        }
       
$sel .= "</select>"; //comme dans la vidéo oublie pas de fermer certains balises encore ouverte.
return $sel; 
}