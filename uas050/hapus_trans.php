<?php
include("koneksi.php");
if(isset($_GET['id_kegiatan'])){
    $id = $_GET['id_kegiatan'];
    $sql = "DELETE FROM kegiatan_himatif where 1";
    $query = mysqli_query($db, $sql);

    header('Location: index.php?page=kegiatan');
} 
 ?>