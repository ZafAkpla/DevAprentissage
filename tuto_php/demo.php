<?php
// introduction aux conditions

$note = readline('Entrer une note : ');

if ($note >= 10) {
    echo 'Bravo vous avez la moyenne';
} else {
    echo 'Désolé vous n\'avez pas la moyenne';
}
