<?php
// Memulai sesi jika belum dimulai
if(session_status() === PHP_SESSION_NONE)
    session_start();

// Memeriksa level sesi 
if(!empty($_SESSION['level'])){
    // Memerlukan file koneksi.php untuk terhubung ke database
    require 'config/koneksi.php';
    // Memerlukan file pesan_kilat.php untuk pesan kilat
    require 'fungsi/pesan_kilat.php';

    // Memasukkan file header.php dari direktori admin/template/
    include 'admin/template/header.php';

    // Jika terdapat parameter GET 'page', memasukkan file index.php dari direktori admin/module/[nama_module]/ 
    if(!empty($_GET['page'])){
        include 'admin/module/' . $_GET['page'] . '/index.php';
    } else {
        // Jika tidak ada parameter GET 'page', memasukkan file home.php dari direktori admin/template/
        include 'admin/template/home.php';
    }
    // Memasukkan file footer.php dari direktori admin/template/
    include 'admin/template/footer.php';
} else{
    // Mengarahkan pengguna ke halaman login.php 
    header("Location: login.php");
}
?>