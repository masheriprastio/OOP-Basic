<?php
class Connection
{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'db_data_crud';
    public $conn;
    public function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        } catch (mysqli_sql_exception $e) {
            echo "Tidak ada koneksi: " . $e->getMessage();
            exit;
        }
    }
    function show()
    {
        $this->connect();
        if ($this->connect() === false) {
            echo "Gagal Tampil Data";
        } else {
            $select = "SELECT * FROM tbl_mahasiswa";
            $hasil = $this->conn->query($select);
            $hasil->num_rows > 0;

            while ($row = $hasil->fetch_assoc()) {
                echo "INi data" . $row["id"];
                echo "INi data" . $row["nama"];
            }
        }
    }
    public function memperbaruiData()
    {
        $konekesi = new Connection();
        $conn = $konekesi->conn;

        $sql = "UPDATE tbl_mahasiswa SET nim=201088002 where id=1";
        if ($conn->query($sql) === TRUE) {
            echo "Data Berhasil Di Update";
        } else {
            "Error update " . mysqli_connect_errno();
        }
    }
}
