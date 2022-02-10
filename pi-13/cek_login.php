<?php

//jalankan session
session_start();

//panggil file koneksi ke database
include("./koneksi.php");

//ambil data dari form input
$username = $_POST['username'];
$password = $_POST['password'];

//selesksi data user dengan username dan password
$login = mysqli_query($db, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

//hitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah data yang dicari ada di database
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    //cek jika user login sebagai admin
    if ($data['level'] == 1) {

        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        //alihkan ke halaman admin
        header("location:halaman_admin.php");
        #
        #jika login sebagai bendahara
    } elseif ($data['level'] == 2) {

        //buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "bendahara";

        //alihkan ke halaman admin
        header("location:halaman_bendahara.php");
    } else {

        //alihkan kembali ke halaman login
        header("location:./index.php?pesan=gagal");
    }
    #
} else {
    //alihkan kembali ke halaman login
    header("location:./index.php?pesan=gagal");
}
