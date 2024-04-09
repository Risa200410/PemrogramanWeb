<?php
// untuk memproses data yang dikirim melalui metode POST pada file form_lanjut.php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $selectedBuah=$_POST['buah'];

    // menyimpan warna ke dalam array
    if (isset($_POST['warna'])) {
        $selectedWarna=$_POST['warna'];
    } else{
        $selectedWarna=[];
    }

    $selectedJenisKelamin = $_POST['jenis_kelamin'];
    
    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favorite Anda: " . implode(", ", $selectedWarna) . "<br>";
    }else{
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
// untuk mencetak buah yang dipilih user dan warna favorite user
?>