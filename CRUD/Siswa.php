<?php

require_once("Connection.php");

class Siswa extends Connection
{
    public function getAllUser()
    {
        $sql = "SELECT * FROM siswa";
        $result = $this->getConnection()->query($sql);
        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $userData[] = [
                    'ID' => $row["ID"],
                    'nama' => $row["nama"],
                    'jenis_kelamin' => $row["kelas"],
                    'kelas' => $row["jenis_kelamin"]
                ];
            }
        } else {
            echo "Tidak ada data pengguna.";
        }
        return $userData;
    }
    public function addSiswa($nama, $kelas){
        $sql = "INSERT INTO siswa(nama, kelas) values(?,?";
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->bind_param("ss", $nama, $kelas);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

    }
    public function editSiswa($id, $nama, $kelas){
        $stmt = $this->conn->prepare("UPDATE siswa SET nama = :nama, kelas = :kelas WHERE ID = :id");
        $stmt->bind_param(':id', $id);
        $stmt->bind_param(':nama', $kelas);
        $stmt->bind_param(':kelas', $kelas);
        return $stmt->execute();
    }
    
    
}
$panggil = new Siswa();
$panggil->getAllUser();

?>