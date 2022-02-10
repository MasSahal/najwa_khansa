<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data" action="simpanbarang.php">
                <div class="card-body">
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode  </label>
                    <input type="input" class="form-control" id="" name="kode">
                  </div>    

                  <div class="form-group">
                    <label for="exampleInputEmail1">nm_barang</label>
                    <input type="input" class="form-control" id="" name="nm_barang">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="input" class="form-control" id="" name="harga">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">stock</label>
                    <input type="input" class="form-control" id="" name="stock">
                  </div>

                  

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="simpanbarang">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>