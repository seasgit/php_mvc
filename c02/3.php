<?php
require "./app/entity/Personne.php";

$p  = new Personne();
$p->setPrenom("Achille")
    ->setNom("Talon")
    ->setPhoto("achille_talon.png");

require "./app/views/home.php";
