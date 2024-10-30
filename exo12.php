<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d'afficher les informations d'une variable.<br>
Soit le tableau suivant :<br> 
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];<br>
A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.
</p>

<h2>Resultat</h2>

<?php

$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];
echo afficheInfo($tableauValeurs);

function afficheInfo($array){
    foreach($array as $value){
        $result = var_dump($value);
    }
    return $result;
}

