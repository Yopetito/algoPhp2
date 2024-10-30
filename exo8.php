<h1>Exercice 8</h1>

<p>Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.
Exemple :
repeterImage($url,4);
</p>

<h2>Resultat</h2>

<?php

function repeterImage($link, $howManyTimes){
    $showup = "";
    for($i = 1; $i <= $howManyTimes; $i++){
        $showup .= "<img src='$link'>";
    }
    return $showup;
}

$url = "http://my.mobirise.com/data/userpic/764.jpg";
echo repeterImage($url,4);
