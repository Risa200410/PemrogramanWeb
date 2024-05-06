<?php
// Fungsi untuk mengatur flash data dengan key dan value tertentu
function set_flashdata($key = "", $value = ""){
    // Jika key dan value tidak kosong, maka atur flash data
    if(!empty($key) && !empty($value)){
        $_SESSION['_flashdata'][$key] = $value;
        return true;
    }
    return false;
}

// Fungsi untuk mendapatkan flash data berdasarkan key
function get_flashdata($key = ""){
    // Jika key tidak kosong dan flash data dengan key tersebut ada
    if(!empty($key) && isset($_SESSION['_flashdata'][$key])){
        // Simpan data flash, lalu hapus flash data tersebut
        $data = $_SESSION['_flashdata'][$key];
        unset($_SESSION['_flashdata'][$key]);
        return $data;
    } else {
        // Jika flash data tidak ditemukan, tampilkan pesan peringatan
        echo "<script> alert(' Flash Message \'{$key}\' is not defined. ')</script>";
    }
}

// Fungsi untuk menampilkan pesan berdasarkan jenisnya (info, success, danger, warning)
function pesan($key = "", $pesan = ""){
    if($key == "info"){
        set_flashdata('info', "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        <strong>Info! </strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } else if($key == "success"){
        set_flashdata('success', "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success! </strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } else if($key == "danger"){
        set_flashdata('danger', "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Danger! </strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    } else if($key == "warning"){
        set_flashdata('warning', "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Warning! </strong> {$pesan}
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>");
    }
}
?>