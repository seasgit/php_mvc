<?php
require "./lib/utile/Util.php";
require "./app/entity/Personne.php";

$p = new Personne;
$p->prenom =  "Joe";
$p->nom = "Dalton";
$p->photo =  "http://robohash.org/1";

// tester et m'arrêter ou non
$u = new util;
$u->dd($p, false);

// construire l'affichage
echo $p->prenom . ' ' . $p->nom;
