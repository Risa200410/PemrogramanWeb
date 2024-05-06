<?php
// Mulai sesi 
if (session_status() == PHP_SESSION_NONE)
    session_start();

// Memasukkan file koneksi.php
include 'config/koneksi.php';
// Memasukkan file pesan_kilat.php
include 'fungsi/pesan_kilat.php';
// Memasukkan file anti_injection.php
include 'fungsi/anti_injection.php';

// Mengamankan input username dari serangan SQL Injection
$username = antiinjection($koneksi, $_POST['username']);
// Mengamankan input password dari serangan SQL Injection
$password = antiinjection($koneksi, $_POST['password']);

// Untuk mengambil data user berdasarkan username
$query = "SELECT username,level,salt, password as hashed_password FROM user WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
mysqli_close($koneksi);

// Mengambil salt dan hashed password dari hasil query
$salt = $row['salt'];
$hashed_password = $row['hashed_password'];

// Memeriksa apakah salt dan hashed password tidak kosong
if ($salt !== null && $hashed_password !== null) {
    // Menggabungkan salt dan password yang diinputkan
    $combined_password = $salt . $password;
    // Memeriksa apakah password yang diinputkan bernilai tru atau sesuai dengan hashed password
    if (password_verify($combined_password, $hashed_password)) {
        // Jika true, username dan level disimpan ke dalam sesi
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        // Mengarahkan ke halaman index
        header("location:index.php");
    } else {
        // Jika password tidak sesuai, akan ditampilkan pesan error dan kembali ke halaman login
        pesan('danger', "Login gagal. Password Anda Salah.");
        header("location:login.php");
    }
} else {
    // Jika username tidak ditemukan, akan ditampilkan pesan peringatan dan kembali ke halaman login
    pesan('warning', "Username tidak ditemukan.");
    header("location:login.php");
}

// Menghentikan eksekusi script selanjutnya
die();
?>