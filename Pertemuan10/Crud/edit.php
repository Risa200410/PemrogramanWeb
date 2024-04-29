<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Anggota</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <?php
        include('koneksi.php'); // mengimpor file koneksi.php untuk terhubung dengan database
        $id = $_GET['id']; // mengambil nilai ID anggota dari parameter GET
        $query = "SELECT * FROM anggota WHERE id= $id"; // Query untuk mengambil data anggota berdasarkan ID
        $result = mysqli_query($koneksi, $query); // menjalankan query
        $row = mysqli_fetch_assoc($result); // mengambil baris data hasil query sebagai asosiatif array
        mysqli_close($koneksi); // menutup koneksi dengan database
        ?>
        <div class="container mt-4">
            <h2>Edit Data Anggota</h2>
            <!-- form untuk mengedit anggota -->
            <form action="proses.php?aksi=ubah" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama'];?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" <?php if($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                        <label for="laki" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" <?php if($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                        <label for="perempuan" class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telp:</label>
                    <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>

        <!-- mengimpor jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
        <!-- mengimpor Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <!-- mengimpor file JS Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>