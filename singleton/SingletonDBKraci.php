<?php

class SinlgetonDBKraci
{
    //1. privatna static promenljiva
    private static $conn = null;
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "taskovi123";

    //2. private konstruktor
    private function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
    }

    //3. public static metoda getIstance()
    public static function konektuj()
    {
        if (self::$conn == null) {
            self::$conn = new SinlgetonDBKraci();
        }

        return self::$conn;
    }


}



?>