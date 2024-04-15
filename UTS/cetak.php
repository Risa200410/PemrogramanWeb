<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Tiket</title>
    <style>
        .tiket {
            background-color: #fff;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            margin: 20px auto;
            background-image: url(bukti/tiket.png);
            background-repeat: repeat;
            background-size: 30%;
            background-position: center;
            /* opacity: 0.5 */
        }

        .tiket h2 {
            color: #6c1325;
            text-align: center;
            padding: 10px;
            background-color: #e7baba;

        }

        .tiket h3 {
            color: #6c1325;
            text-align: center;
            background-color: #e7baba;            
        }

        .tiket h4 {
            color: #6c1325;
            text-align: center;
            background-color: #e7baba;
        }
        .tiket h6 {
            color: #6c1325;
            text-align: center;
            background-color: #e7baba;
        }

        .tiket p {
            margin: 10px 0;
            color: #6c1325;
            background-color: #e7baba;
        }

        body {
            background-color: #e7baba;
            font-family: Arial, sans-serif;
            padding: 20px;
            text-align: center;
        }

        .barcode-img {
            margin-top: 20px;
            max-width: 200px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <script src="proses.php"></script>
</head>

<body>
    <?php
    echo "<div class='tiket'>";
    echo "<h2>Konser R to V</h2>";
    echo "<br>";
    echo "<p> " . $_SESSION["nama"] . "</p>";
    echo "<p>Jenis Tiket: " . $_COOKIE["jenis_tiket"] . "</p>";
    echo "<p>Jumlah Tiket: " . $_COOKIE["jumlah_tiket"] . "</p>";
    echo "<br>";
    echo "<img src='bukti/barcode.jpeg' alt='Barcode' class='barcode-img'>";
    echo "<br>";
    echo "<h3>Red Velvet</h3>";
    echo "<h4>Going to Jakarta</h4>";
    echo "<h6>19 Oktober 2024</h6>";

    echo "</div>";
    ?>

</body>

</html>