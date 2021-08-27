<?php

class DatabaseConfig
{


    public function __construct()
    {
        try {
            $dsn = 'mysql:dbname=otomasyon_prog;host=127.0.0.1';
            $user = 'root';
            $password = '';

            try {
                $conn = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }


    public function PdoConnection()
    {
        try {
            //Connection Code...
            //echo "<br>";


            //echo "<br>";


        } catch (PDOException $e) {
            print $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
