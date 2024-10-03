<?php

namespace app\Models;

use system\Mpdo as Mpdo;

class Robot
{

    public $dbh;

    /**
     * 
     */
    function __construct()
    {
        require PATH_ROOT . "/system/Mpdo.php";
        $this->dbh =  Mpdo::connect();
    }


    public function all()
    {

        #
        # 1 on teste avec Robot
        #
        $sql = "SELECT nom, numero FROM Robot";
        try {
            $stmt =  $this->dbh->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }


    }
}
