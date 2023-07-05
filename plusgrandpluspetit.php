<?php
// Traduction en PHP de l'algo + grand + petit
$nbcoup = 1;
$nbgenere = rand(1, 100);
// var_dump($nbgenere);
$nbsaisie = readline("choisis un nombre entre 1 et 100: ");
while ($nbsaisie != $nbgenere) {
    $nbcoup++;
    if ($nbsaisie > $nbgenere) {
        $nbsaisie = intval(readline("veuillez entrer nombre plus petit: "));
        // $nbcoup++;
    } else if ($nbsaisie < $nbgenere) {
        $nbsaisie = intval(readline("veuillez entrer un nombre plus grand: "));
        // $nbcoup++;
    }
};
//plus grand pluspetit
echo ("succès! en " . $nbcoup . " coups");
