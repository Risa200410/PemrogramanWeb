<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h3>Date</h3>
        <?php
        // d mempresentasikan hari, m mempresentasikan bulan, Y mempresentasikan tahun, dan l mempresentasikan hari dalam minggu
            echo "Today is ".date("Y/m/d")."<br>";
            // mencetak tanggal hari ini dalam format "tahun/bulan/hari"
            echo "Today is ".date("Y.m.d")."<br>";
            // menggunakan format "tahun.bulan.hari"
            echo "Today is ".date("Y-m-d")."<br>";
            // menggunakan format "tahun-bulan-hari"
            echo "Today is ".date("l")."<br>";
            // mencetak nama hari dalam seminggu saat ini menggunakan huruf kecil
            // kode diatas menampilkan tentang tanggal hari ini dalam beberapa format yang berbeda yang dihasilkan menggunakan fungsi date() dalam PHP
            ?>
    </body>
</html>