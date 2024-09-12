<?php
class Connection
{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'db_pembelajaran_php';
    protected $conn;
    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        } catch (mysqli_sql_exception $e) {
            echo "Tidak ada koneksi: " . $e->getMessage();
            exit;
        }
    }   

    public function getConnection()
    {
        return $this->conn;
    }
    public function getErrorMessage(){
        return $this->connect();
    }
}
$connection = new Connection();
if($connection->getConnection()) {

}else{
    echo $connection->getErrorMessage();
}