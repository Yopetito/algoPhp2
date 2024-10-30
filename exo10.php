<h1>Exercice 10</h1>

<p>En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire<br> 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi<br>
lesquels on pourra sélectionner un intitulé de formation :<br> 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement<br> 
de validation (submit)
</p>

<h2>Resultat</h2>

<?php 

//affichage du formulaire
$info = ["Nom", "Prenom", "Adresse e-mail", "Ville"];
$radio = ["Masculin", "Feminin", "Autre"];
$job = ["Dév Web", "Intégrateur", "Chef de projet"];
echo afficherform($info, $radio, $job);

function afficherform($champDeTexte, $radio, $menuDeroulant){
  $form = "<form action='' method='post'>";
  //creation de champ de texte
  $form .= formTexte($champDeTexte);
  //creation de radio
  $form .= formRadio($radio);
  //creation du menu deroulant
  $form .= formMenuDeroulant($menuDeroulant);
  //creation du bouton
  $form .= submitButton();
  $form .= "</form>";
return $form;
}

//fonction creation de champ de texte
function formTexte($array) {
  $affichage = "";
  foreach ($array as $value) {
        $case = "<label for='$value'>$value</label><br>
                 <input type='text' id='$value' name='$value'><br>";
        $affichage .= $case;
    }
return $affichage;  
}

//fonction creation de radio
function formRadio($array) {
  $affichage = "Sexe<br>";
  $name = "genre";
  foreach ($array as $value) { 
      $radio = "<input type='radio' id='$value' name='$name' value='$value'>
                <label for='$value'>$value</label><br>";
      $affichage .= $radio;
  }
return $affichage;
}

//fonction creation du menu deroulant
function formMenuDeroulant($array){
  $label = "<label for='jobs'>Intitulé de formation:</label><br>";
  $sel = "<select name='jobs' id='jobs'>";
  foreach ($array as $jobs){
          $sel .= "<option value='$jobs'>$jobs</option>"; 
  }
$sel .= "</select>";
return $label . $sel; 
}

//fonction creation du bouton
function submitButton(){
  $button = "<input type='submit' value='Submit'><br>";
return $button;
}