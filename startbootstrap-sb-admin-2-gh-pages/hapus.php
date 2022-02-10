<?php
include("koneksi.php");
if (isset($_GET['kode_barang'])) {
    $kode_barang = $_GET['kode_barang'];
    $sql = "DELETE FROM barang where kode_barang = $kode_barang";
    $query = mysqli_query($koneksi, $sql);

    header('Location: index.php?page=barang');
}
