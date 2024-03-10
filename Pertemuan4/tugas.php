<?php
$biodata=[
    'Risa'=>[
        [' ', '<img src="joy.jpg" width="150" height="200">'],
        ['Nama      :', 'Maritza Ulfa'],
        ['Alamat    :', 'Jl. ABC No. 123, Kediri'],
        ['No. Tlp   :', '08123456789'],
        ['Jurusan   :', 'Teknologi Informasi'],
    ],
    'Haechan'=>[
        [' ', '<img src="haechan.jpg"  width="150" height="200">'],
        ['Nama      :', 'Muhammad Haikal'],
        ['Alamat    :', 'Jl. Simbar No. 26, Malang'],
        ['No. Tlp   :', '0811488081'],
        ['Jurusan   :', 'Teknik Elektro'],
    ]
];
// pada kode diatas data biodata orang diisi dalam array 2 dimensi

foreach ($biodata as $nama => $data) {
    echo "<table>";
    foreach ($data as $baris) {
        echo "<tr>";
        foreach ($baris as $isi) {
            echo "<td>$isi</td>";
        }
        echo "</tr>";
        echo "<br>";
    }
    echo "</table>";
}
// kode diatas untuk membuat tabel agar output menjadi lebih rapi
?>