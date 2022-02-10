<?php
include "koneksi.php";

if (isset($_POST['ubah_barang'])){
    // dd($_POST);
    $kode_barang = $_POST['kode_barang'];
    $nm_barang = $_POST['nm_barang'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    
    $sql = "UPDATE barang SET nm_barang ='$nm_barang', harga ='$harga', stock ='$stock' WHERE kode_barang = '$kode_barang'";

    $query = mysqli_query($koneksi, $sql);
    // dd($query);
    if($query){
        header('Location: index.php?page=barang');
    }else{
        header('Location: index.php?status=gagal');
    }
}else{
    die ("Akses Dilarang...");

}
?>