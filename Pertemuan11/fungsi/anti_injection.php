<?php
// Fungsi untuk mencegah serangan SQL injection pada data yang dimasukkan ke dalam database
function antiinjection($koneksi, $data){
    // Menggunakan fungsi mysqli_real_escape_string untuk membersihkan karakter khusus dalam string SQL
    $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data,
    ENT_QUOTES))));
    // Mengembalikan data yang sudah dibersihkan
    return $filter_sql;
}
?>