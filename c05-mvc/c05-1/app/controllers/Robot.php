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
        require PATH_ROOT . "/app/views/robots/index.php";
    }
}
