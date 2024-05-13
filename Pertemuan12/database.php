<?php
class Database
{
    // konfigurasi koneksi database
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "prakwebdb";
    public $conn;

    // dieksekusi saat objek database dibuat
    public function __construct()
    {
        // objek mysqli baru di inisialisasi dan disimpan ke dalam conn
        $this->conn=new mysqli($this->host, $this->username, $this->password, $this->database);

        // mengecek koneksi apakah ada yang error
        if($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>