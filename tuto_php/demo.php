<?php
// introduction aux conditions et boucle

/* $actions = (int)readline('Entrer votre action : (1 : attaquer, 2 : défendre, 3 : passer mon tour)');

switch ($actions) {
    case 1:
        echo 'j\'attaque';
        break;
    case 2:
        echo 'je me défend';
        break;
    case 3:
        echo 'je ne fais rien';
        break;
    default:
        echo 'command inconnu';
        break;
}  */


// boucle forEach

/* $eleves = [
    'CM1' => ['Jean','Marc','Julien','Azaf'],
    'CM2' => ['Quet','Ivan','Lola']
];

foreach($eleves as $classe => $ListEleves){
    echo "La classe $classe : \n";
    foreach ($ListEleves as $eleve) {
        echo " - $eleve \n";
    }
} */

// remplissage et affichage d'un tableau par les saisi de l'utilisateur

/* $notes = [];
$note = null;
while ($note !== 'fin') {
    $note=readline('Rentrer une note ou taper fin : ');
    $notes[]=$note;
}

echo "\nListe des notes saisi au clavier\n\n";
foreach ($notes as $ListNote) {
    echo "- $ListNote\n";
} */

// function utilisateur

function repondre_oui_non($messag){
    echo "$messag \n";
    $message = "votre reponse doit est oui ou non ";

    $saisi=readline('o/n');
    if ($saisi == 'n') {
        return false;
    }elseif ($saisi == 'o') {
        return true;
    }else{
        return $message;
    }
}

$resultat = repondre_oui_non('voulez vous continuer ?');

var_dump($resultat);

