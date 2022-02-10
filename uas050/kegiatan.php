<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6>
			
				</div>
			
				<div class="card-body">
			
					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<thead class="text-center">
								<tr>
									<th>No</th>
									<th>ID KEGIATAN</th>
									<th>JUDUL KEGIATAN</th>
									<th>TEMPAT KEGIATAN</th>
									<th>WAKTU KEGIATAN</th>
									<th>JUMLAH PESERTA</th>
									<th>NARASUMBER</th>
									<th>BIAYA</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include "koneksi.php"; 
								$sql = "SELECT * FROM kegiatan_himatif";
								$query = mysqli_query($koneksi,$sql);
								$no = 1;
								while($data = mysqli_fetch_array ($query)){
								?>
									<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $data['id_kegiatan'] ?></td>
									<td><?php echo $data['judul_kegiatan'] ?></td>
									<td><?php echo $data['tempat_kegiatan'] ?></td>
									<td><?php echo $data['waktu_kegiatan'] ?></td>
									<td><?php echo $data['jumlah_peserta'] ?></td>
									<td><?php echo $data['narasumber'] ?></td>
									<td class="text-right"><?php echo rupiah($data['biaya_kegiatan']) ?></td>
									<td>
									<a href="index.php?page=ubah_data=<?php echo $data['id_kegiatan'] ?>" class="btn btn-sm btn-info">Edit</a>
									<a href="hapus.php?id=<?= $data['id_kegiatan']?>"onclick="return confirm('Yakin Akan Menghapus Data ini?')" class="btn btn-sm btn-danger">Hapus</a>
								</td>
								</tr>
								<?php } ?>
							</tbody>
							
						</table>
						<a href="?page=tambah_data" class="btn btn-sm btn-success">Tambah Data</a>
					
			
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
</div>
					