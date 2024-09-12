<?php
require_once("OrangTua.php");

class Anak extends OrangTua{
    public function __construct($nama, $alamat, $namaanak){
        parent::__construct($nama, $alamat);
        $this->sekolah = $namaanak;
    
    }


    parent::identitas();
        echo "Halo perkenalkan saya " .$this->sekolah;
    }
}

$panggilAnak = new Anak("Ridwan ","Jl Pulo", "Satrio");
$panggilAnak->perkenalan();