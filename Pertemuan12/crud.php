<?php
require_once 'database.php';

class Crud
{
    private $db; // Atribut untuk objek Database

    // Konstruktor untuk membuat objek Database saat objek Crud dibuat
    public function __construct()
    {
        $this->db = new Database(); // Membuat objek Database
    }

    // Metode untuk membuat data baru dalam tabel jabatan
    public function create($jabatan, $keterangan) {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        $result = $this->db->conn->query($query);
        return $result;
    }

    // Metode untuk membaca semua data dari tabel jabatan
    public function read() {
        $query = "SELECT * FROM jabatan";
        $result = $this->db->conn->query($query);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    // Metode untuk membaca data berdasarkan ID dari tabel jabatan
    public function readById($id) {
        $query = "SELECT * FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);
        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        }
        else {
            return null;
        }
    }

    // Metode untuk memperbarui data dalam tabel jabatan berdasarkan ID
    public function update($id, $jabatan, $keterangan) {
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = $id";
        $result = $this->db->conn->query($query);

        return $result;
    }

    // Metode untuk menghapus data dari tabel jabatan berdasarkan ID
    public function delete($id) {
        $query = "DELETE FROM jabatan WHERE id = $id";
        $result = $this->db->conn->query($query);
    }
}
?>