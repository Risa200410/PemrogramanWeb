<?php
// fungsi kode isset untuk memeriksa nilai variabel sudah didefiniskan dan nilai bukan null

$umur;
// untuk mennetukan dewasa atau tisak berdasarkan umurnya
if(isset($umur)&& $umur >=18){
    echo "Anda sudah dewasa.";
} else{
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
}

// untuk menampilkan nama yang tersimpan pada array
$data=array("nama" => "Jane", "usia" => 25);
if(isset($data["nama"])){
    echo " Nama: ".$data["nama"];
}else{
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>