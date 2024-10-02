<?php

namespace system;

class Mpdo
{
    static $dbh;
    static $dsn = 'mysql:host=localhost;dbname=db_robots;charset=UTF8';
    static $user =  'root';
    static $pwd = '';

    /**
     * Singleton Connection Serveur via PDO
     *
     * @return any
     */
    public static function connect()
    {
        if (!(self::getinstance())) {

            try {
                self::$dbh =  new \PDO(self::$dsn, self::$user, self::$pwd);
            } catch (\PDOException $e) {
                exit("Connexion MySQL" . $e->getMessage());
            }
        }
        return self::getinstance();
    }

    /**
     * get unique instance of PDO
     *
     * @return void
     */
    private static function getinstance()
    {
        return self::$dbh;
    }
}
