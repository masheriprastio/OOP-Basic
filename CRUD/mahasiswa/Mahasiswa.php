<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $jurusan;
    public $angkatan;


    public function __construct($nim, $nama, $jurusan,$angkatan){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->angkatan = $angkatan;

    }

}