<?php
    include "koneksi.php";
    // memasukkan file "koneksi.php" untuk menghubungkan ke basis data

    $username=$_POST['username'];
    $password = md5($_POST['password']);
    // password yang disimpan di database telah di-hash dengan metode md5()

    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    // memeriksa apa ada entri pengguna dengan username dan password yang cocok 
    $result = mysqli_query($connect, $query);
    // hasil eksekusi kode akan disimpan dalam variabel $result 
    $row=mysqli_fetch_assoc($result);
    // menyimpannya dalam bentuk array asosiatif di dalam variabel $row

    // memeriksa nilai dari kolom 'level' pada baris yang ditemukan
    if ($row['level'] == 1) {
        echo " Anda berhasil login. Silahkan menuju "; ?> 
        <a href="homeAdmin.html">Halaman HOME</a>
        <?php
    }else if ($row['level'] == 2) {
        echo " Anda berhasil login. Silahkan menuju "; ?> 
        <a href="homeGuest.html">Halaman HOME</a>
        <?php
    }else{
        echo "Anda gagal login. silahkan " ;?>
        <a href="loginForm.html">Login kembali</a>
        <?php
        echo mysqli_error($connect);
    }
?>
