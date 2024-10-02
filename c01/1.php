<?php
require "./app/entity/Personne.php";

$p = new Personne;
$p->prenom =  "Joe";
$p->nom = "Dalton";
$p->photo =  "http://robohash.org/1";

// tester et m'arrêter ou non
echo '<pre>';
var_dump($p);
die; // ou pas ?

// construire l'affichage
echo $p->prenom . ' ' . $p->nom;
