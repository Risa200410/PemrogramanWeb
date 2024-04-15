<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian Tiket Konser</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery-3.7.1.js"></script>
    <style></style>
</head>
<body>
    <div class="container">
        <h1 >Formulir Pembelian Tiket Konser</h1>
        <h2 >Konser R to V</h2>
        <form action="proses.php" method="post">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>
            <br>
            <label for="email">Alamat Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="no_telepon">Nomor Telepon:</label>
            <input type="number" id="no_telepon" name="no_telepon" required>
            <br>
            <label for="jenis_tiket">Jenis Tiket:</label>
            <select id="jenis_tiket" name="jenis_tiket" required>
                <option value="">Pilih Jenis Tiket</option>
                <option value="festival">Festival</option>
                <option value="vip">VIP</option>
                <option value="VVIP">VVIP</option>
            </select>
            <br>
            <label for="jumlah_tiket">Jumlah Tiket:</label>
            <input type="number" id="jumlah_tiket" name="jumlah_tiket" required>
            <br>
            <button type="submit">Beli Tiket</button>
        </form>
    </div>
</body>
</html>


