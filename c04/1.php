<?php
require "./app/entity/Personne.php";
require "./app/entity/Employe.php";
require "./lib/utile/Util.php";
require "./vendor/autoload.php";
require "./lib/utile/Faker.php";


$p  = new Employe("Achille", "Talon", "achille_talon.png", new Faker('fr_FR'));

$exp = $p->getExperience();
$info_exp = $exp > 0 ? "Experience de $exp ans" : "Son premier Job";

//$u = new util;
//$u->dd($p, false);



require "./app/views/home.php";
