<?php

//buat koneksi ke database
$dbhost   = "localhost";
$dbroot   = "root";
$dbpass   = "";
$dbname   = "koperasi";

//kneksi ke database
$db = mysqli_connect($dbhost, $dbroot, $dbpass, $dbname);

//cek apakah ada error
if (!$db) {
    die("Koneksi database gagal! : " . mysqli_connect_errno() . " - " . mysqli_connect_error());
};
