<h1>Exercice 14</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une <br>
adresse e-mail a le bon format.<br>
Affichage<br>
L'adresse elan@elan-formation.fr est une adresse e-mail valide<br>
L'adresse contact@elan est une adresse e-mail invalide
</p>

<h2>Resultat</h2>

<?php
$email = "elan@elan-formation.fr";
echo emailVerification($email);

function emailVerification($email){
    $verif = filter_var($email, FILTER_VALIDATE_EMAIL);
    return $verif ? "L'adresse $email est une adresse e-mail valide" : "L'adresse $email est une adresse e-mail invalide";  //pratique de la condition if en ternaire.
}

// if ($verif == true){
//     return "L'adresse $email est une adresse e-mail valide";
// } else {
//     return "L'adresse $email est une adresse e-mail invalide";
// }