<?php
echo $_SERVER['PHP_SELF'];
// Berisi informasi nama file yang sedang dieksekusi, nama file diambil berdasarkan dari dokumen root
echo "<br>";
echo $_SERVER['SERVER_NAME'];
// Hostname dari server dari file php yang sedang dieksekusi
echo "<br>";
echo $_SERVER['HTTP_HOST'];
// Mengembalikan konten dari host, seperti misalnya: header (jika memang ada).
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
// Halaman url yang menjadi referensi ke halaman yang sedang dieksekusi. Jika tidak ada, nilainya kosong.
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
// Variabel ini berisi informasi dari user yang sedang melakukan request konten: mulai dari browser yang digunakan, bahasa, hingga OS. 
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
// Nama path absolut dari file yang sedang dieksekusi
?>