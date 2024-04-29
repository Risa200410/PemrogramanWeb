<?php
session_start(); // memulai sesi untuk penggunaan token CSRF
include 'koneksi.php'; // mengimpor file koneksi.php untuk terhubung ke database
include 'csrf.php'; // mengimpor file csrf.php untuk menangani token CSRF

$id = $_POST['id']; // mengambil nilai ID anggota dari parameter POST

// query untuk mengambil data anggota berdasarkan ID
$query = "SELECT * FROM anggota WHERE id=? ORDER BY id DESC";

$sql = $db1->prepare($query); // mempersiapkan query SQL

$sql->bind_param('i', $id); // mengikat parameter ke query untuk mencegah SQL injection

$sql->execute(); // menjalankan query

$res1 = $sql->get_result(); // mendapatkan hasil query

$h = array(); // untuk menyimpan data anggota

// iterasi untuk setiap baris hasil query dan menyimpan data ke dalam array
while ($row = $res1->fetch_assoc()) {
    $h['id'] = $row["id"];
    $h['nama'] = $row["nama"];
    $h['jenis_kelamin'] = $row["jenis_kelamin"];
    $h['alamat'] = $row["alamat"];
    $h['no_telp'] = $row["no_telp"];
}

// mengembalikan data anggota dalam format JSON
echo json_encode($h);

// menutup koneksi dengan database
$db1->close();
?>