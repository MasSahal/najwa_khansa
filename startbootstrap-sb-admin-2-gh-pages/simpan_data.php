<?php
include("koneksi.php");
if(isset($_POST['simpanbarang'])){
	$kode = $_POST['kode_barang'];
	$nama = $_POST['nm_barang'];
	$harga = $_POST['harga'];
	$stok = $_POST['stock'];
	
	$sql = "INSERT INTO barang (kode_barang , nm_barang, harga, stock)
		VALUES ('$kode','$nama','$harga','$stok')";
	$query = mysqli_query($koneksi, $sql);
	
	header('Location: index.php?page=barang');
}
 ?>