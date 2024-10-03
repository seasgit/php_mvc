<?php
require "./app/entity/Personne.php";

// Ici  la photo est celle définie par défaut dans la classe Personne

$p1  = new Personne();
$p1->setPrenom()
    ->setNom()
    ->setPhoto();

echo "<h1>{$p1->getPrenom()} {$p1->getNom()}</h1>";
echo "<img src='{$p1->getPhoto()}' />";
echo "<hr>";
