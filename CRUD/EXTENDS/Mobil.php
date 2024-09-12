<?php

class Mobil{
    var $warna;
    var $merk;
    var $harga;

    function __construct(){
        $this->warna = "Biru";
        $this->merk = "Toyota";
        $this->harga = "25000000";
    }

    function gantiWarna($warnaBaru){
        $this->warna = $warnaBaru;
    }
    
    function customMobil($gantiWarna, $gantiMerk, $gantiHarga)
    {

    }
    function tampil(){
        echo "<br>Warna mobil: " . $this->warna;
        echo "<br>Merk mobil: " . $this->merk;
        echo "<br>Harga mobil: " . $this->harga;
    }
}

$mobil = new Mobil();
$mobildua = new Mobil();
$mobildua->gantiWarna("Silver");
$mobil->tampil();
$mobildua->tampil();