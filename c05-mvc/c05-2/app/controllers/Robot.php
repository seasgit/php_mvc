<?php

namespace app\controllers;


class Robot
{

    function __construct()
    {
        // echo "hello from robots";
    }


    public function index()
    {
        $titre = "Liste des robots";
        $page =  PATH_ROOT . "/app/views/robots/index.php";
        require PATH_ROOT . "/app/views/base.php";
    }
}
