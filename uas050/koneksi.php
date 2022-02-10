<?php

$server = "localhost";
$user = "root";
$password = ""; 
$db = "uas050";

$koneksi = mysqli_connect($server, $user, $password, $db);

function dd($param){
    echo die(var_dump($param));
}

function rupiah($rupiah){
    echo "Rp".number_format($rupiah, 2, ",", ".");
}
 ?>