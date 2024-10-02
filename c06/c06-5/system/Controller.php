<?php

namespace system;

class Controller
{

    public $data;

    function __construct()
    {
        $this->data = [];
    }


    public function render($_location, $_data)
    {
        extract($_data);
        $page = PATH_ROOT . "/app/views/$_location.php";
        require PATH_ROOT . "/app/views/base.php";
    }
}
