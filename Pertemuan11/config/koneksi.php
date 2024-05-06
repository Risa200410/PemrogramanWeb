<?php
// Mengatur zona waktu default menjadi "Asia/Jakarta"
date_default_timezone_set("Asia/Jakarta");

// Melakukan koneksi ke server database MySQL
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Memeriksa apakah terjadi kesalahan saat koneksi ke database
if(mysqli_connect_errno()){
    // Jika terjadi kesalahan, menampilkan pesan kesalahan dan menghentikan skrip
    die("koneksi database gagal: " . mysqli_connect_error());
}
?>