<?php

class Koneksi
{
    public $namaHost = "localhost";
    public $user = "root";
    public $password = '';
    public $databaseName = "db_pembelajaran_php";
    public $koneksi;

    function Hubungkan()
    {
        $this->koneksi = new mysqli($this->namaHost, $this->user, $this->password, $this->databaseName);
        if ($this->koneksi->errno) {
            echo "Koneksi Gagal";
        } else {
            echo "Berhasil";
            exit();
        }
    }
    function getKoneksi(){
        return $this->koneksi;
    }
}
$panggilKoneksi = new Koneksi();
$panggilKoneksi->Hubungkan();
