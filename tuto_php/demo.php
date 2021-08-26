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

function repondre_oui_non($messag = 'voulez vous continuer ?'){
    echo "$messag \n";
   
    while (true) {
        $saisi=readline('veillez entrer (o)ui ou (n)on :');
        if ($saisi == 'n') {
            return false;
        }elseif ($saisi == 'o') {
            return true;
        }
    }
    
}




function demander_crenau($phrase = 'veuillez demander un crenau '){
    echo $phrase . "\n";
    $horaire = [];
        while (true) {
            $h_ouv = (int)readline("heure d'ouvertur : ");
            if ($h_ouv >= 0 && $h_ouv <= 23) {
                break;
            }
            echo "heure incorrect :_)\n";
        }
        while (true) {
            $h_ferm = (int)readline("heure de fermeture : ");
            if ($h_ferm >= 0 && $h_ferm <= 23 && $h_ferm > $h_ouv) {
                break;
            }
        }
    
   return [$h_ouv,$h_ferm];
}


function demander_crenneaux($v_crenneau){
    echo $v_crenneau . "\n";
    $crenneau = [];
    $continuer = true;
    while ($continuer) {
        $crenneau[] = demander_crenau();
        $continuer = repondre_oui_non();
    }
    return $crenneau;
}
$crenneaux = demander_crenneaux('Entrer vos crenneaux');
print_r($crenneaux);