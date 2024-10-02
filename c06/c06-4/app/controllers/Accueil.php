<?php

namespace app\Controllers;
use system\Controller;

class Accueil extends Controller
{


    public function index()
    {
        $titre = "Page d'accueil";

        # Méthode render de la classe mère Controller

        $this->render("accueil/index", [
            "titre" =>  $titre
        ]);
    }
}
