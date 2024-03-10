<?php
$nilaiNumerik=92;


if ($nilaiNumerik>=90 && $nilaiNumerik <=100) {
    echo "Nilai huruf: A";
// Kode diatas bermaksud jika kondisi nilaiNumerik di atas 90, namun di bawah 100 maka keluar output  "Nilai huruf: A"
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90) {
    echo "Nilai huruf: B";
// Kode diatas bermaksud jika kondisi nilaiNumerik di atas 80, namun di bawah 90 maka keluar output  "Nilai huruf: B"
} elseif ($nilaiNumerik >=70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
// Kode diatas bermaksud jika kondisi nilaiNumerik di atas 70, namun di bawah 80 maka keluar output  "Nilai huruf: C"
}elseif ($nilaiNumerik<70) {
    echo "Nilai huruf: D";
}
// Kode diatas bermaksud jika kondisi nilaiNumerik di bawah 70 maka keluar output  "Nilai huruf: D"
echo "<br><br>";


$jarakSaatIni = 0;
$jarakTarget=500;
$peningkatanHarian=30;
$hari=0;

//Kode dibawah bermaksud jika $jarakSaatIni lebih kecil dari $jarakTarget, maka  loop dibawah akan menghitung berapa hari yang diperlukan untuk mencapai jarak target.
while ($jarakSaatIni<$jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari untuk mencapai jarak 500 kilometer.";
echo "<br><br>";


$jumlahLahan=10;
$tanamanPerlahan=5;
$buahPerTanaman=10;
$jumlahBuah=0;

// loop dibawah bermaksud jika kondisi i lebih kecil dari $jumlahBuah, maka loop akan menghitung jumlah total buah yang akan dipanen dari tanaman setelah beberapa siklus pertumbuhan.
for ($i=1; $i < $jumlahBuah; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br><br>";


// kode dibawah bermaksud menghitung total skor ujian dari semua siswa yang skornya disimpan dalam array $skorUjian
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach($skorUjian as $skor){
    $totalSkor+=$skor;
}
echo "Total skor ujian adalah: $totalSkor";
echo "<br><br>";

// kode dibawah bermaksud membuat loop jika nilai dibawah 60, maka output "Tidak Lulus", namun jika diatas output akan "Lulus"
$nilaiSiswa = [85,92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach($nilaiSiswa as $nilai){
    if($nilai<60){
        echo "Nilai: $nilai (Tidak lulus)<br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus)<br>";
}

?>

