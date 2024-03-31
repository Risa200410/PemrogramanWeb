<?php
$nama = @$_GET['nama'];
// menginisialisasi variabel $nama dengan nilai yang diterima melalui parameter nama dalam URL
// penggunaan @ sebelum $_GET untuk menekan pesan kesalahan/error yang mungkin terjadi jika parameter nama tidak ada dalam URL

$usia=@$_GET['usia'];
// variabel $usia diinisialisasi dengan nilai yang diterima melalui parameter usia dalam URL

echo "halo {$nama}! Apakah benar anda berusia {$usia} tahun?:";
// mencetak pesan kepada pengguna dengan menggunakan nilai yang diperoleh dari variabel $nama dan $usia
?>