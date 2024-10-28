<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de <br>
caractère passée en argument en majuscules et en rouge. <br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte)</p>

<h2>Resultat</h2>

<style>
    .red {  
        color: red;
    }
</style>

<?php

$texte = "mon texte en paramètre";
$texte2= "mon texte en argument";

echo convertirMajRouge($texte);
echo convertirMajRouge2($texte2);
echo convertirMajcolor($texte, 'blue'); //la couleur peut etre mise en hexaD (color code html)

function convertirMajRouge($texte) {
    $result = mb_strtoupper($texte); //convertir en maj
    $result = "<p class='red'>$result</p>"; //modifier la couleur en appelant la classe CSS 'red'
    return $result; //renvoie le resultat
}

function convertirMajRouge2($texte) {
    return "<p class='red'>".mb_strtoupper($texte)."</p>";
}

function convertirMajcolor($texte, $color) {
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";
}