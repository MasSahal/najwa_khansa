<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Data Kegiatan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" enctype="multipart/form-data" action="simpan_data.php">
            <div class="card-body">

              <div class="form-group">
                <label for="exampleInputEmail1">ID Kegiatan</label>
                <!-- id kegiatan di buat otomatis, karena id kegiatan tidak boleh sama dengan yg lain -->
                <input type="number" class="form-control" id="" name="id_kegiatan" value="<?= date('ymd') . rand(100, 999); ?>" readonly>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Judul Kegiatan</label>
                <input type="text" class="form-control" id="" name="judul_kegiatan">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Tempat Kegiatan</label>
                <input type="text" class="form-control" id="" name="tempat_kegiatan">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Waktu Kegiatan</label>
                <input type="date" min="0" class="form-control" id="" name="waktu_kegiatan">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Peserta</label>
                <input type="text" class="form-control" id="" name="jumlah_peserta">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Narasumber</label>
                <input type="text" class="form-control" id="" name="narasumber">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Biaya Kegiatan</label>
                <input type="number" class="form-control" id="" name="biaya_kegiatan">
              </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="simpandata">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>