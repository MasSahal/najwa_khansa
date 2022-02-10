<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>

	</div>

	<div class="card-body">

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead class="text-center">
					<tr>
						<th>No</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Stock</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					include "koneksi.php"; 
					$sql = "SELECT * FROM barang";
					$query = mysqli_query($koneksi,$sql);
					$no = 1;
					while($data = mysqli_fetch_array($query)){
					 ?>
						<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $data['kode_barang'] ?></td>
						<td><?php echo $data['nm_barang'] ?></td>
						<td class="text-right"><?php echo rupiah($data['harga']) ?></td>
						<td><?php echo $data['stock'] ?></td>
						
						<td>
						<!-- <a href="index.php?page=editbarang&kode_barang=<?php echo $data['kode_barang'] ?>" class="btn btn-sm btn-warning">Edit</a> -->
						<a href="index.php?page=ubah&kode_barang=<?php echo $data['kode_barang'] ?>" class="btn btn-sm btn-info">Edit 2</a>
						<a href="hapus.php?kode_barang=<?php echo $data['kode_barang']?>" class="btn btn-sm btn-danger" onclick="return confirm('Gelem toh arep ngapus kien kih?')">Hapus</a>

					</tr>
					<?php } ?>
				</tbody>
				
			</table>
			<a href="?page=tambah_data" class="btn btn-sm btn-success">Tambah Data</a>


		</div>
		
	</div>
	
</div>