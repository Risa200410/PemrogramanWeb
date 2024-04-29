<?php
// menghubungkan ke database
$namaHost = "127.0.0.1";
$username = "root";
$password = "";
$database = "prakwebdb";

// untuk menampilkan status 
try {
    $connect = mysqli_connect($namaHost, $username, $password, $database);
} catch (Exception $e) {
    echo $e->getMessage();
}