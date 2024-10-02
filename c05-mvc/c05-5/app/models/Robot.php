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


        $sql =  "SELECT  R.nom, R.numero, S.nom AS snom  
                  FROM Robot R JOIN secteur S ON R.secteur_id = S.id";
        try {
            $stmt =  $this->dbh->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}
