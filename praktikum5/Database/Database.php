<?php

class DataBase {
    private $host = "localhost";
    private $username = "host";
    private $password = "";
    private $DataBase ="Perpustakaan";
    private $koneksi = null;

    public function __construct(){
    $this->koneksi = new mysqli ($this->host, $this->username, $this->password, $this->DataBase);
    }
    public function __destruct()
    {
    $this->koneksi->close();
    }
    public function getkoneksi(){
        return $this->koneksi;
    }

}