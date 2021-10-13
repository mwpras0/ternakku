<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah User</h4>
						<form class="forms-sample" action=<?= base_url('Admin/HewanAdmin/simpan_hewan'); ?> method="POST"
							enctype="multipart/form-data">
							<div class="form-group">
								<label>Nama Hewan</label>
								<input type="text" class="form-control" name="nama_hewan" placeholder="Nama Hewan" required>
							</div>
                            <div class="form-group">
								<label>Harga</label>
								<input type="number" class="form-control" name="harga_hewan" placeholder="Harga" required>
							</div>
							<div class="form-group">
								<label>Jenis Hewan</label>
								<select class="form-control" name="jenis_hewan" required>
									<option value=""> -- Pilih Salah satu -- </option>
									<option value="1">Sapi</option>
									<option value="2">Kambing</option>
									<option value="3">Domba</option>
									<option value="4">Kuda</option>
									<option value="5">Ayam</option>
									<option value="6">Bebek</option>
									<option value="7">Angsa</option>
									<option value="8">Merpati</option>
								</select>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" name="detail_hewan" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Foto Hewan</label>
								<input class="form-control form-control-sm" id="foto_hewan" name="foto_hewan"
									type="file" />
							</div>

							<button type="submit" class="btn btn-primary me-2">Simpan</button>
							<a class="btn btn-light" href="<?= base_url('Admin/HewanAdmin/index')?>">Batal</a>
						</form>
					</div>
				</div>
			</div>
		</div>
