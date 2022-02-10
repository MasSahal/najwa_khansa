
<?php
include("koneksi.php");
if (isset($_POST['simpan'])) {
	$kode = $_POST['id'];
	$id = $_POST['id_kegiatan'];
	$judul = $_POST['judul_kegiatan'];
	$tempat = $_POST['tempat_kegiatan'];
	$waktu = $_POST['waktu_kegiatan'];
	$jumlah = $_POST['jumlah_kegiatan'];
	$narasumber = $_POST['narasumber'];
	$biaya = $_POST['biaya_kegiatan'];
	$sql = "UPDATE kegiatan SET
									id_kegiatan = '$id',
									judul_kegiatan = '$judul',
									tempat_kegiatan = '$tempat',
									waktu_kegiatan = '$waktu',
									jumlah_kegiatan = '$jumlah',
									narasumber = '$narasumber',
									biaya_kegiatan = '$biaya'
									
									where id_kegiatan ='$kode";
	
	$query = mysqli_query($koneksi, $sql);
	header('Location: index.php?page=kegiatan');
 } 
 ?>