<?php
$daftarNilai=[
    'Matematika'=>[
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
        ['David', 88],
        ['Eva', 77],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
        ['David', 76],
        ['Eva', 88],
    ],
];

$mataKuliah ='Matematika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

$totalNilai = 0;
$jumlahSiswa = 0;

foreach ($daftarNilai[$mataKuliah] as $nilai){
    $totalNilai += $nilai[1];
    $jumlahSiswa++;
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata kelas: " . $rataRata . "<br>";
echo "Daftar nilai siswa di atas rata-rata kelas: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    if ($nilai[1] > $rataRata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
?>