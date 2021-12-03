<?php
class Koneksi
{
    private $dbHost     = "localhost";
    private $dbUser     = "root";
    private $dbPassword = "";
    private $dbName     = "prakweb";
    public function connect()
    {
        $mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
        if ($mysqli->connect_error) {        
            echo "Koneksi ke database gagal : (" . $mysqli->connect_error . ")";         
        }
        return $mysqli;
    }
}
