<?php

namespace app\Controllers;


class Accueil
{

    function __construct()
    {
       // echo "hello from controller Accueil";
    }


    public function index()
    {
        require PATH_ROOT . "/app/views/accueil/index.php";
    }
}
