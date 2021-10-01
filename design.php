<?php 
// On va utiliser un cookie pour changer la couleur du site.
// Donc on va d'abord vérifié si le cookie existe et si il est affecté à une couleur

if (!isset($_COOKIE['DESIGN'])) {
    $background = "#dabdd7";
    $logo = "logo_vert.jpg";
}
else {
    // si le cookie est déjà enregistré comme bleu
    if ($_COOKIE['DESIGN'] == 'bleu') {
        $background = "#aac5f4";
        $logo = "logo_bleu.jpg";
    }
    // si il est rouge
    elseif ($_COOKIE['DESIGN'] == "rouge") {
        $background = "#fbbda8";
        $logo = "logo_rouge.jpg";
    }
    // si il est vert
    elseif ($_COOKIE['DESIGN'] == 'vert') {
        $background = "#dabdd7";
        $logo = "logo_vert.jpg";
    }
    // si la couleur n'est pas encore définie on en met une par defaut
    else {
        $background = "#dabdd7";
        $logo = "logo_vert.jpg";
    }
}
?>
