<?php
require "./app/entity/Personne.php";
require "./app/entity/Employe.php";

$p  = new Employe("Achille", "Talon", "achille_talon.png");

require "./app/views/home.php";
