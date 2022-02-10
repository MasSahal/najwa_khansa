<?php
include("koneksi.php");
if(isset($_POST['simpanbarang'])){
	$kode = $_POST['kode'];
	$nm_barang = $_POST['nm_barang'];
	$harga = $_POST['harga'];
	$stock = $_POST['stock'];
	
	$sql = "INSERT INTO barang (kode , nm_barang, harga, stock)
		VALUES ('$kode','$nm_barang','$harga','$stock')";
	$query = mysqli_query($koneksi, $sql);
	
	header('Location: index.php?page=barang');
}
 ?>