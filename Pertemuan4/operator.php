<?php
$a = 10;
$b = 5;
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
// untuk menampilkan hasil kode sebelumnya
echo "<br><br>";


$hasilTambah=$a+$b;
// untuk mencari hasil tambah a dan b
$hasilKurang=$a-$b;
// untuk mencari hasil kurang a dan b
$hasilKali=$a*$b;
// untuk mencari hasil kali a dan b
$hasilBagi=$a/$b;
// untuk mencari hasil bagi a dan b
$sisaBagi=$a%$b;
// untuk mencari sisa bagi a dan b
$pangkat=$a**$b;
// untuk mencari hasil a pangkat b


echo "Hasil Tambah a+b: {$hasilTambah} <br>";
echo "Hasil Kurang a-b: {$hasilKurang} <br>";
echo "Hasil Kali a*b: {$hasilKali} <br>";
echo "Hasil Bagi a/b: {$hasilBagi} <br>";
echo "Sisa Bagi a dan b: {$sisaBagi} <br>";
echo "Hasil a pangkat b: {$pangkat} <br>";
// untuk menampilkan hasil kode sebelumnya
echo "<br><br>";


$hasilSama=$a==$b;
// untuk melihat apakah variabel a sama dengan b, jika hasilnya 1 berarti benar. Jika tidak hasil akan kosong
$hasilTidakSama=$a!=$b;
// untuk melihat apakah variabel a tidak sama dengan b, jika hasilnya 1 berarti benar. Jika tidak hasil akan kosong
$hasilLebihKecil=$a<$b;
// untuk melihat apakah variabel a lebih kecil dari b, jika hasilnya 1 berarti benar. Jika tidak hasil akan kosong
$hasilLebihBesar=$a>$b;
// untuk melihat apakah variabel a lebih besar dari b, jika hasilnya 1 berarti benar. Jika tidak hasil akan kosong
$hasilLebihKecilSama=$a<=$b;
// untuk melihat apakah variabel a lebih kecil sama dengan dari b, jika hasilnya 1 berarti benar. Jika tidak hasil akan kosong
$hasilLebihBesarSama=$a>=$b;
// untuk melihat apakah variabel a lebih besar sama dengan dari b, jika hasilnya 1 berarti benar. Jika tidak hasil akan kosong


echo "Hasil sama a dan b: {$hasilSama} <br>";
echo "Hasil tidak sama a dan b: {$hasilTidakSama} <br>";
echo "Hasil lebih kecil a dan b: {$hasilLebihKecil} <br>";
echo "Hasil lebih besar a dan b: {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama a dan b: {$hasilLebihKecilSama} <br>";
echo "Hasil lebih besar sama a dan b: {$hasilLebihBesarSama} <br>";
// untuk menampilkan hasil kode sebelumnya
echo "<br><br>";

 
$hasilAnd = $a&&$b;
// untuk memeriksa apakah kedua variabel $a dan $b bernilai true
$hasilOr=$a||$b;
// untuk memeriksa apakah salah satu dari variabel $a atau $b (atau dua-duanya) bernilai true
$hasilNotA=!$a;
// untuk membalikkan nilai variabel $a
$hasilNotB=!$b;
// untuk membalikkan nilai variabel $b

echo "Hasil AND a dan b : {$hasilAnd} <br>";
echo "Hasil OR a dan b : {$hasilOr} <br>";
echo "Hasil NOT A : {$hasilNotA} <br>";
echo "Hasil NOT B : {$hasilNotB} <br>";
// untuk menampilkan hasil kode sebelumnya
echo "<br><br>";


$jumlah=$a += $b;
// untuk operasi gabungan hasil penjumlahan variabel b ke a
$kurang=$a -= $b;
// untuk operasi gabungan hasil pengurangan variabel b ke a
$kali=$a *= $b;
// untuk operasi gabungan hasil perkalian variabel a dan b
$bagi=$a /= $b;
// untuk operasi gabungan hasil pembagian variabel a dan b
$modulus=$a %= $b;
// untuk operasi gabungan hasil sisa bagi variabel a dan b

echo "Hasil operasi gabungan untuk penjumlahan variabel b ke a: {$jumlah} <br>";
echo "Hasil operasi gabungan untuk pengurangan variabel b ke a: {$kurang} <br>";
echo "Hasil operasi gabungan untuk perkalian variabel a dan b: {$kali} <br>";
echo "Hasil operasi gabungan untuk pembagian variabel a dan b: {$bagi} <br>";
echo "Hasil operasi gabungan untuk sisa bagi variabel a dan b: {$modulus} <br>";
// untuk menampilkan hasil kode sebelumnya
echo "<br><br>";


$hasilIdentik = $a === $b;
// jika hasil a identik dengan a, maka akan keluar true (1). Jika tidak hasil akan kosong
$hasilTidakIdentik=$a!==$b;
// jika hasil a tidak identik dengan a, maka akan keluar true (1). Jika tidak hasil akan kosong

echo "Hasil Identik : {$hasilIdentik} <br>";
echo "Hasil TIdak Identik : {$hasilTidakIdentik} <br>";
// untuk menampilkan hasil kode sebelumnya
echo "<br><br>"; 



?>
