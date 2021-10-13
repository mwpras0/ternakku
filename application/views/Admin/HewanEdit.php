<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Edit Hewan</h4>
						<?php foreach ($hewan as $hw) : ?>
						<form class="forms-sample" action=<?= base_url('Admin/HewanAdmin/simpan_edit'); ?> method="POST"
							enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputName1">Nama</label>
								<input type="hidden" name="id_hewan" value="<?= $hw->id_hewan ?>">
								<input type="text" class="form-control" name="nama_hewan"
									value="<?= $hw->nama_hewan ?>">
							</div>
							<div class="form-group">
								<label>Harga</label>
								<input type="text" class="form-control" name="harga_hewan"
									value="<?= $hw->harga_hewan ?>">
							</div>
							<div class="form-group">
								<label>Jenis Hewan</label>
								<select class="form-control" name="jenis_hewan" required>
									<option value="<?= $hw->jenis_hewan?>">
										<?php 
                                                if($hw->jenis_hewan == "1"){
                                                    echo "SAPI";
                                                }elseif ($hw->jenis_hewan == "2") {
                                                    echo "KAMBING";
                                                }elseif ($hw->jenis_hewan == "3") {
                                                    echo "DOMBA";
                                                }elseif ($hw->jenis_hewan == "4") {
                                                    echo "KUDA";
                                                }elseif ($hw->jenis_hewan == "5") {
                                                    echo "AYAM";
                                                }elseif ($hw->jenis_hewan == "6") {
                                                    echo "BEBEK";
                                                }elseif ($hw->jenis_hewan == "7") {
                                                    echo "ANGSA";
                                                }elseif ($hw->jenis_hewan == "8") {
                                                    echo "MERPATI";
                                                }else{
                                                    echo "Tidak ada kategori";
                                        }?></option>
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
								<textarea class="form-control" name="detail_hewan" rows="3"><?= $hw->detail_hewan?></textarea>
							</div>
							<div class="form-group">
								<label for="" class="form-label">Foto Hewan</label>
								<input class="form-control form-control-sm" name="foto_hewan" type="file">
							</div>

							<button type="submit" class="btn btn-primary me-2">Simpan</button>
							<a class="btn btn-light" href="<?= base_url('Admin/HewanAdmin/index')?>">Batal</a>
						</form>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
