<?php

namespace app\controllers;

use app\models\Robot as ModelRobot;
use system\utile\Util;

class Robot
{

    function __construct()
    {
        // echo "hello from robots";
    }


    public function index()
    {
        #
        # 1 charge model et test dd()
        #
        require PATH_ROOT . "/app/models/Robot.php";
        require PATH_ROOT . "/system/utile/util.php";

        $mr = new ModelRobot();
        $robots  =  $mr->all();
       // Util::dd($robots);
        #
        # 2 On envoie le résultat à la vue
        # 

        $titre = "Liste des robots";
        $page =  PATH_ROOT . "/app/views/robots/index.php";
        require PATH_ROOT . "/app/views/base.php";
    }
}
