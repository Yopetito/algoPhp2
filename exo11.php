<h1>Exercice 10</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une<br> 
chaîne de caractère représentant une date.<br>
Exemple :<br>
formaterDateFr("2018-02-23");
</p>

<h2>Resultat</h2>

<?php
function formaterDateFr($date) {
    $date = new DateTime($date); // Creation d'un objet unique avec "new" "DateTime" à partir de la chaîne de caracteres de date_str
    
    $format = new IntlDateFormatter(
        'fr_FR',                // Locale pour le français (France)
        IntlDateFormatter::FULL, // Format complet pour le jour de la semaine, jour, mois et année, regarder doc pour plus d'info sur SHORT LONG MEDIUM etc..
        IntlDateFormatter::NONE, // Pas de format pour l'heure
        'Europe/Paris', //fuseau
        intlDateFormatter::GREGORIAN
    );
    return $format->format($date);
}

echo formaterDateFr("2018-12-23");