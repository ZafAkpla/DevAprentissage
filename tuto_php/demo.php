<?php
// debut d'aprentissage des conceptes de tableau en php

$eleve = [
    'nom' => 'Marc',
    'prenom' => 'Dos',
    'notes' => [10,15,20,9,7]
];
$moyenne = ($eleve['notes'][0]+$eleve['notes'][1]+$eleve['notes'][2]+$eleve['notes'][3]+$eleve['notes'][4])/5;

echo 'Bonjour ' .$eleve['prenom'] . ' ' .$eleve['nom'] .' votre moyenne est $moyenne';