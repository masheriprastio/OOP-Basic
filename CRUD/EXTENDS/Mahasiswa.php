<?php

class Mahasiswa{
    private $nama;
    private $nisn;
    function __construct($nm,$nis){
        $this->nama = $nm;
        $this->nisn = $nis;

    }
    function getInfo(){
        return "Saya mahasiswa dengan nama " .$this->nama;
    }

}
$call = new Mahasiswa("Anonim","201383999");
echo $this->getInfo();