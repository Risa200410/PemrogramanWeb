<?php
$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

// untuk mengurutkan nilai dari kecil ke besar
sort($nilai_siswa);

// untuk mengabaikan dua nilai terendah
array_shift($nilai_siswa);
array_shift($nilai_siswa);

// untuk mengabaikan dua nilai tertinggi
array_pop($nilai_siswa);
array_pop($nilai_siswa);

// untuk menghitung total nilai siswa
$total_nilai = array_sum($nilai_siswa);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai;
?>