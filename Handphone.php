<?php

class Handphone
{
    var $namaPonsel = "Nokia";
    var $seriType = 001;
    var $sistemOperasi = "Android";
    public function Operasi($namaPonsel, $seriType, $sistemOperasi)
    {
        $this->namaPonsel = $namaPonsel;
        $this->seriType = $seriType;
        $this->sistemOperasi = $sistemOperasi;

        echo "Handphone $namaPonsel<br/>";
        echo "Seri Type $seriType<br/>";
        echo "Sistem Operasi Ponsel $sistemOperasi <br/>";
    }
}

$panggilHandphone = new Handphone();
$panggilHandphone->Operasi("Iphone 11", 200, "IOS");
