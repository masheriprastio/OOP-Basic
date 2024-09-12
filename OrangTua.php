<?php
class OrangTua{
    public function __construct($nama, $alamat){
        $this->nama = $nama;
        $this->alamat = $alamat;

    }
    public function identitas(){
        echo "Identitas Orang Tua " . $this->nama . "Alamat Rumah " .$this->alamat;
    }
}