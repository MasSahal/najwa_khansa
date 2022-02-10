<?php
include("koneksi.php");
if (isset($_POST['simpan'])) {
	$id = $_POST['kode_barang'];
	$kode = $_POST['kode'];
	$nm_barang = $_POST['nm_barang'];
	$harga = $_POST['harga'];
	$stock = $_POST['stock'];
	$sql = "UPDATE barang SET
									kode = '$kode',
									nm_barang = '$nm_barang',
									harga = '$harga',
									stock = '$stock'
									
									where id ='$_POST[id]'";
	
	$query = mysqli_query($koneksi, $sql);
	header('Location: index.php?page=barang');
 } 
 ?>