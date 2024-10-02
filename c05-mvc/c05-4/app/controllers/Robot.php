<?php

namespace app\controllers;

use app\models\Robot as ModelRobot;
use system\utile\Util;
use system\Controller;

class Robot extends Controller
{


    public function index()
    {

        require PATH_ROOT . "/app/models/Robot.php";
        $mr = new ModelRobot();
        $robots  =  $mr->all();

        $titre = "Liste des robots";

        # Méthode render de la classe mère Controller

        $this->render("robots/index", [
            "titre" =>  $titre,
            "robots" => $robots
        ]);
    }
}
