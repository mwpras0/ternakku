<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah User</h4>
						<form class="forms-sample" action=<?= base_url('Admin/UserAdmin/simpan_user'); ?> method="POST">
							<div class="form-group">
								<label for="exampleInputName1">Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail3">Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword4">Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password"
									required>
							</div>
							<div class="form-group">
								<label for="exampleInputCity1">Alamat</label>
								<input type="text" class="form-control" name="alamat" placeholder="Location">
							</div>
							<div class="form-group">
								<label for="exampleInputName1">No Telp</label>
								<input type="number" class="form-control" name="telepon" placeholder="Name" required>
							</div>
							<div class="form-group">
								<label>File upload</label>
								<input type="file" name="img[]" class="file-upload-default">
								<div class="input-group col-xs-12">
									<input type="text" class="form-control file-upload-info" disabled
										placeholder="Upload Image">
									<span class="input-group-append">
										<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
									</span>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleSelectGender">Status</label>
								<select class="form-control" name="posisi" required>
									<option> </option>
									<option>Admin</option>
									<option>Penjual</option>
									<option>Pembeli</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary me-2">Simpan</button>
							<a class="btn btn-light" href="<?= base_url('Admin/UserAdmin/index')?>">Batal</a>
						</form>
					</div>
				</div>
			</div>
		</div>
