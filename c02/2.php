<?php
require "./lib/utile/Util.php";
require "./app/entity/Personne.php";

$p1  = new Personne();
$p1->setPrenom("Achille")
    ->setNom("Talon")
    ->setPhoto("achille_talon.png");

echo "<h1>{$p1->getPrenom()} {$p1->getNom()}</h1>";
echo "<img src='./assets/images/{$p1->getPhoto()}' />";
echo "<hr>";
