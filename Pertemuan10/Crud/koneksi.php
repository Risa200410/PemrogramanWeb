<?php
// koneksi ke database
$koneksi = mysqli_connect("127.0.0.1:3306", "root", "", "prakwebdb");

// periksa koneksi 
if(mysqli_connect_errno()){
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>