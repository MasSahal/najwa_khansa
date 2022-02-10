<?php
include "koneksi.php";
if (isset($_GET['kode_barang'])) {
} 
  $id = $_GET['kode_barang'];
  $sql = "SELECT * FROM barang where kode_barang = '$id'";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);

 ?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="ubah_aksi.php">
                <div class="card-body">

                 

                <!-- //cobaaaa -->
                  <input type="hidden" name="nm_barang" value="<?php echo $data['nm_barang'] ?>">


                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Barang</label>
                    <input type="text" class="form-control" readonly name="kode_barang" value="<?php echo $data['kode_barang'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama barang</label>
                    <input type="text" class="form-control" id="" name="nm_barang" value="<?php echo $data['nm_barang'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="input" class="form-control" id="" name="harga" value="<?php echo $data['harga'] ?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="input" class="form-control" id="" name="stock" value="<?php echo $data['stock'] ?>">
                  </div>

                  

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="ubah_barang">Ubah Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>