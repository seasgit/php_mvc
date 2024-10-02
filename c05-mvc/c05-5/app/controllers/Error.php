<?php

namespace app\Controllers;
use system\Controller;

class Error extends Controller
{


    public function index()
    {
        $titre = "Page d'erreur";

        # Méthode render de la classe mère Controller

        $this->render("accueil/index", [
            "titre" =>  $titre
        ]);
    }
}
