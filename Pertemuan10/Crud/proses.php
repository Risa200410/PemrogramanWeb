<?php
include('koneksi.php');
// mengimpor file koneksi.php untuk terhubung dengan database

// mengambil nilai aksi dari parameter GET
$aksi = $_GET['aksi'];

if ($aksi == 'tambah') { // memeriksa apakah aksi adalah 'tambah'
    if (isset($_POST['nama'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['no_telp'])) {
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];

        // untuk menambahkan data anggota ke dalam tabel anggota
        $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

        // menjalankan query dan memeriksa keberhasilan eksekusi
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php"); // mengarahkan kembali ke halaman index.php setelah berhasil menambahkan data
            exit();
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Data tidak lengkap.";
    }
} elseif ($aksi == 'ubah') { // memeriksa apakah aksi adalah 'ubah'
    if (isset($_POST['id'], $_POST['nama'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['no_telp'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];

        // untuk mengubah data anggota berdasarkan id
        $query = "UPDATE anggota SET nama='$nama', jenis_kelamin = '$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id = $id";

        // menjalankan query dan memeriksa keberhasilan eksekusi
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal mengupdate data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Data tidak lengkap.";
    }
} elseif ($aksi == 'hapus') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // untuk menghapus data anggota berdasarkan id
        $query = "DELETE FROM anggota WHERE id = $id";

        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menghapus data: " . mysqli_error($koneksi);
        }
    } else {
        echo "ID tidak valid.";
    }
} else {
    header("Location: index.php");
}

mysqli_close($koneksi);
?>