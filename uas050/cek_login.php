<?php

//jalankan session
session_start();

//panggil file koneksi ke database
include("./koneksi.php");

//ambil data dari form input
$username = $_POST['username'];
$password = $_POST['password'];

//selesksi data user dengan username dan password
$login = mysqli_query($koneksi, "SELECT * FROM user_nim WHERE 1");

//hitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah data yang dicari ada di database
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['is_login'] = true;

        //alihkan ke halaman admin
        header("location:index.php");
        #
    #
} else {
    //alihkan kembali ke halaman login
    header("location:./login.php?pesan=gagal");
}