<?php
include("koneksi.php");
if(isset($_POST['simpandata'])){
	$id = $_POST['id_kegiatan'];
	$judul = $_POST['judul_kegiatan'];
	$tempat = $_POST['tempat_kegiatan'];
	$waktu = $_POST['waktu_kegiatan'];
	$jumlah = $_POST['jjumlah_peserta'];
	$narasumber = $_POST['narasumber'];
	$biaya = $_POST['biaya_kegiatan'];
	$sql = "INSERT INTO kegiatan_himatif (id_kegiatan, judul_kegiatan, tempat_kegiatan, waktu_kegiatan, jumlah_peserta, narasumber, biaya_kegiatan)
		VALUES ('$id','$judul','$tempat','$waktu', '$jumlah','$narasumber','$biaya')";
	$query = mysqli_query($koneksi, $sql);
	
	header('Location: index.php?page=kegiatan');
}
 ?>