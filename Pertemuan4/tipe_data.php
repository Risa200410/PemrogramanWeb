<?php
// kode dibawah melakukan beberapa operasi aritmetika dasar dengan variabel(a, b, c, d, e), lalu mencetak hasilnya, dan menampilkan tipe data nilai dari salah satu variabel menggunakan var_dump().
$a=10;
$b=5;
$c=$a+5;
$d=$b+(10*5);
$e=$d-$c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);
echo "<br>";
echo "<br>";

$nilaiMatematika=5.1;
$nilaiIPA=6.7;
$nilaiBahasaIndonesia=9.3;

$rataRata=($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia)/3;

// kode dibawah memuat beberapa variabel yang akan langsung ditampilkan. Lalu var_dump($rataRata) membuat outputnya menampilkan tipe datanya dan rata-rata dari nilai tersebut.
echo "Matematika: {$nilaiMatematika}<br>";
echo "IPA: {$nilaiIPA}<br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia}<br>";
echo "Rata-rata: {$rataRata}<br>";

var_dump($rataRata);
echo "<br>";
echo "<br>";

// kode dibawah bermaksud memuat output true untuk siswa lulus, dan output false untuk apakah siswa sudah ujian.
$apakahSiswaLulus=true;
$apakahSiswaSudahUjian=false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<br>";
echo "<br>";

// KOde dibawah bermaksud untuk menghasilkan output gabungan dari 2 variabel, yaitu namaDepan dan namaBelakang.
$namaDepan="Ibnu";
$namaBelakang='Jakaria';

$namaLengkap="{$namaDepan} {$namaBelakang}";
$namaLeengkap2=$namaDepan . ' ' . $namaBelakang;

echo "Nama Depan: {$namaDepan}<br>";
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;
echo "<br>";
echo "<br>";

// Kode dibawah bermaksud untuk mengOutputkan dari $listMahasiswa index 0.
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>

