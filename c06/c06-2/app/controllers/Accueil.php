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
        $titre = "Page d'accueil";
        $page =  PATH_ROOT . "./app/views/accueil/index.php";
        require PATH_ROOT . "./app/views/base.php";
    }
}
