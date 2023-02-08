<?php
// singleton pattern

class SingletonDB
{
    //1. private staticka promenljiva
    private static $instance = null;
    private $conn;
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "taskovi123";

    //2. private konstuktor
    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
    }


    //3. public static metoda getInstance()
    public static function getInstance()
    {

        if (self::$instance == null) {
            self::$instance = new SingletonDB();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }





}

?>