<?php
session_start(); // memulai sesi untuk penggunaan token CSRF
include 'koneksi.php'; // mengimpor file koneksi.php untuk terhubung ke database
include 'csrf.php'; // mengimpor file csrf.php untuk menangani token CSRF

$id = $_POST['id']; // mengambil nilai ID anggota dari parameter POST

$query = "DELETE FROM anggota WHERE id=?"; // query untuk menghapus data anggota berdasarkan ID

$sql = $db1->prepare($query); // mempersiapkan query SQL

$sql->bind_param("i", $id); // mengikat parameter ke query untuk mencegah SQL injection

$sql->execute(); // menjalankan query untuk menghapus data

echo json_encode(['success' => 'Sukses']); // mengirimkan respons JSON untuk menandakan bahwa operasi penghapusan berhasil

$db1->close(); // menutup koneksi dengan database
?>