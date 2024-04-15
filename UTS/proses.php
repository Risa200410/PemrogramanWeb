<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="proses.css">
</head>

<body>
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["nama"] = htmlspecialchars($_POST["nama"]);
        $_SESSION["email"] = htmlspecialchars($_POST["email"]);
        $_SESSION["no_telepon"] = htmlspecialchars($_POST["no_telepon"]);
        setcookie("jenis_tiket", htmlspecialchars($_POST["jenis_tiket"]));
        setcookie("jumlah_tiket", (int)$_POST["jumlah_tiket"]);

        $hargaTiket = [
            "festival" => 100000,
            "vip" => 150000,
            "VVIP" => 200000,
        ];

        $jenisTiket = $_COOKIE["jenis_tiket"];
        $jumlahTiket = $_COOKIE["jumlah_tiket"];

        if (isset($hargaTiket[$jenisTiket])) {
            $totalBayar = $hargaTiket[$jenisTiket] * $jumlahTiket;
        } else {
            $totalBayar = 0; 
        }
        setcookie("totalBayar", $totalBayar);
    ?>

        <div class="container">
                <?php
                if (isset($_SESSION["nama"]) && isset($_SESSION["email"]) && isset($_SESSION["no_telepon"]) && isset($_COOKIE["jenis_tiket"]) && isset($_COOKIE["jumlah_tiket"])) {
                    echo "<h2>Konfirmasi Pemesanan Tiket</h2>";
                    echo "<p>Nama : " . $_SESSION["nama"] . "</p>";
                    echo "<p>Email: " . $_SESSION["email"] . "</p>";
                    echo "<p>Nomor Telepon: " . $_SESSION["no_telepon"] . "</p>";
                    echo "<p>Jenis Tiket: " . $_COOKIE["jenis_tiket"] . "</p>";
                    echo "<p>Jumlah Tiket: " . $_COOKIE["jumlah_tiket"] . "</p>";
                    echo "<p>Total Pembayaran: Rp " . number_format($totalBayar, 0, ',', '.') . "</p>";

                    echo "<a href='javascript:history.back()' class='btn'>Kembali</a>";
                    echo "<a href='buktiTF.php' class='btn'>Lanjutkan ke Bukti Transfer</a>";
                } 
                else {
                    echo "<h2>Error!</h2>";
                    echo "<p>Data formulir tidak lengkap.</p>";
                }
            }
                ?>
           
        </div>
</body>
</html>