<?php 

//jalankan session
session_start();

//hancurkan semua session
session_destroy();

//alihkan kembali ke halaman login
header("location:./login.php");

