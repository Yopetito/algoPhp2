<h1>Exercice 1</h1>

<p>Soit le tableau suivant :
    $capitales =
    [France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];<br>
    Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays<br>
    s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à<br>
    une fonction personnalisée.<br>
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Resultat</h2>

<!-- <table border=1>
    Entete du tableau
    <thead>
        <tr>
            <th>Pays</th>
            <th>capitales</th>
        </tr>
    </thead>
     Body du tableau 
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
    </tbody>
</table> -->

<?php

$capitales = [
    "France" => "paris",
    "Allemagne" => "berlin",
    "USA" => "washington",
    "Italie" => "rome",
    "Venezuela" => "caracas"
];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    ksort($capitales);
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
            <tbody>";
    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                    </tr>";
    }        

    $result .= "</tbody></table>";
    return $result;

}