<?php

class Kalkulator{
    private $bilangansatu;
    private $bilangandua;
    function __construct($nm,$nis){
        $this->bilangansatu = $nm;
        $this->bilangandua = $nis;

    }
    function getJumlah(){
        return "Hasil " .$this->bilangansatu + $this->bilangandua ;
    }

}
// $call = new Mahasiswa("Anonim","201383999");
// echo $this->getInfo();
$kalkulator = new Kalkulator(2,3);
echo $hasil =  $kalkulator->getJumlah();