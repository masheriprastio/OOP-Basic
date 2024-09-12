<?php

class NilaiUjian {
    public $nilai;
    public function hitungHasil() {
        return $this->nilai > 75 ? "Lulus" : "Tidak Lulus";
    }
}

$nilai = new NilaiUjian();
echo $nilai->hitungHasil(76);
