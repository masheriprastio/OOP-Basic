<?php

require_once("Connection.php");
$koneksi = new Connection();
//Get Koneksi dari objek connection:
$conn = $koneksi->conn;

$sql = "INSERT INTO tbl_mahasiswa (id,nim,nama,jurusan,tahun_angkatan) values(1,201088001,'John','Ahli Gizi',2010)";
if($conn->query($sql) === TRUE){
    echo "Data Berhasil Di Tambahkan";
}else{
    echo "Error insert data " .mysqli_connect_errno();
}