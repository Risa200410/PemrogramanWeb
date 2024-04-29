<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=md5($_POST['password']);
    // password yang disimpan di database telah di-hash dengan metode md5()

    // memeriksa apa ada entri pengguna dengan username dan password yang cocok 
    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $query);
    $cek=mysqli_num_rows($result);

    // memeriksa nilai dari kolom 'level' pada baris yang ditemukan
    if($cek){
        echo "Anda berhasil login, silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php      
    } else{
        echo "Anda gagal login, silahkan ";?>
        <a href="loginForm.html">Login Kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>