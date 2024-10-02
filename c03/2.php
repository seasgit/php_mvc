<?php
require "./app/entity/Personne.php";
require "./app/entity/Employe.php";

$p  = new Employe("Achille", "Talon", "achille_talon.png");
$exp = $p->getExperience();
$info_exp = $exp > 0 ? "Experience de $exp ans" : "Son premier Job";

require "./app/views/home.php";
