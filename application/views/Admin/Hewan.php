<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-sm-12">
				<div class="home-tab">
					<div class="col-lg-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Tabel User</h4>
								<a type="button" class="btn btn-outline-primary btn-fw"
									href="<?= base_url('Admin/HewanAdmin/tambah_hewan')?>">Tambah Hewan</a>
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Hewan</th>
												<th>Harga</th>
                                                <th>Keterangan</th>
												<th>Foto</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no=1;
											foreach($hewan as $hw) : ?>
											<tr>
												<td> <?= $no++?> </td>
												<td> <?= $hw->nama_hewan?> </td>
												<td> <?= $hw->harga_hewan?> </td>
												<td> <?= $hw->detail_hewan?> </td>
												<td><img src="<?= base_url() ?>./upload/hewan/<?= $hw->foto_hewan ?>"> </td>
												<td>
													<a type="button" class="btn btn-outline-info btn-fw" href="<?= base_url('Admin/HewanAdmin/edit_hewan/') . $hw->id_hewan ?>">Edit</a>
													<a type="button" class="btn btn-outline-warning btn-fw" href="<?= base_url('Admin/HewanAdmin/detail_hewan/') . $hw->id_hewan ?>">Detail</a>
													<a type="button" class="btn btn-outline-danger btn-fw" href="<?= base_url('Admin/HewanAdmin/hapus/') . $hw->id_hewan ?>">Hapus</a>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->
