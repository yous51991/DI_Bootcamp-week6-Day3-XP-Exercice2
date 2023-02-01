<?php

$largeur = $_POST['largeur'];
$longeur = $_POST['longeur'];

function area($largeur, $longeur)
{
    return $largeur * $longeur;
}

echo "l'air du rectangle  dont la longueur est ".$longeur." et la dont la largeur ".$largeur." est ".area($largeur, $longeur);