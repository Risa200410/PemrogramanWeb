<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <link rel="stylesheet" type="text/css" href="bukti.css">
</head>
<body>
    <div class="upload-form-container">
        <h2>Unggah Bukti Pembayaran</h2>
        <form id="upload-form" action="serverBukti.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">  
                <input type="file" name="file" id="file" class="file-input"> 
                <label for="file" class="file-label">Pilih File</label> 
            </div>
            
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah Bukti Pembayaran</button>
        </form>

        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="bukti.js"></script>
</body>
</html>

