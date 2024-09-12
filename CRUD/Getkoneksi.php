<?php

class Getkoneksi {
private $mysqli;

function koneksi(){
try {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Mencoba untuk membuat koneksi ke MySQL
$this->mysqli = new mysqli('localhost', 'root', '');

if ($this->mysqli->connect_errno) {
    throw new Exception("Gagal terhubung ke MySQL: " . $this->mysqli->connect_error);
}
if (!$this->mysqli->select_db("db_embelajaran_php")) {
     throw new Exception("Database tidak ditemukan: " . $this->mysqli->error);
}

} catch (Exception $e) {
echo "Error: " . $e->getMessage();
}
}
}

$koneksi = new Getkoneksi();
$koneksi->koneksi();
?>