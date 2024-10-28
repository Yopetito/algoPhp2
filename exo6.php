<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau<br>
de valeurs.<br>
Exemple :<br>
$elements = ["Monsieur","Madame","Mademoiselle"];<br>
alimenterListeDeroulante($elements);<br>
</p>

<h2>Resultat</h2>

<label for="civilites">Choisir votre civilité</label><br>

<select name="civil" id="civilites">
    <option value="Monsieur">Monsieur</option>
    <option value="Madame">Madame</option>
    <option value="Mademoisselle">Mademoisselle</option>
</select>

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);

function alimenterListeDeroulante($liste){

}