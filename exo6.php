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
    $form = "<form action='' method='post'>"; //form=Formulaire action=Définit l'url ou les données du formulaire seront envoyées. Ici meme dans ce cas 
                                              //method=post : transmettre les données de manière sécurisée (sans les afficher dans l'URL)
    $label = "<label for='civilites'>Choisir:</label><br>";
    $sel = "<select name='civilities' id='civilites'>";
    foreach ($elements as $civility){
            $sel .= "<option value='$civility'>$civility</option>"; //fait les cases de la liste deroulante attribué a $sel 
        }
$sel .= "</select></form>"; //comme dans la vidéo oublie pas de fermer certains balises encore ouverte.
return $label . $sel; 
}