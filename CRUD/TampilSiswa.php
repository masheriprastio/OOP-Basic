<?php
require_once("Koneksi.php");

class TampilSiswa extends Koneksi{
    public function showData(){
        $sql = "SELECT * FROM siswa";
        $proses = $this->getKoneksi()->query($sql);
        if($proses->num_rows > 0 ){
            $dataarray = array();
            while($tampilrow = $proses->fetch_assoc()){
                $dataarray[]= array (
                    'ID' => $tampilrow["ID"],
                    'nama' => $tampilrow["nama"],
                );
            }
            header('Content-Type: application/json');   
            echo json_encode($dataarray);
            exit;
            }else{
                echo "Tidak ada data";
            }
    
        }
    }
    $tampil = new TampilSiswa();
    $tampil->showData();

?>