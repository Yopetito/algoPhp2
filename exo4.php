<h1>Exercice 4</h1>

<p>A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra<br>
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un<br>
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
https://fr.wikipedia.org/wiki/<br>
Le tableau passé en argument sera le suivant :<br>
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",<br>
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];</p>

<h2>Resultat</h2>

<?php

$capitales = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
];

$link = "<a href='https://elan-formation.fr/accueil' target='_blank'>Clickez ici pour aller vers ELAN FORMATION</a>";
echo $link;

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    ksort($capitales);
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien</th>
                    </tr>
                </thead>
            <tbody>";
    foreach ($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                        <td>"."<a href='https://fr.wikipedia.org/wiki/$capitale' target='blank'>Lien wiki de la capitale</a>"."</td>
                    </tr>";
    }        

    $result .= "</tbody></table>";
    return $result;

}