<div class="main-panel">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-12 grid-margin">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Detail Hewan</h4>
						<?php foreach ($hewan as $hw) : ?>
						<form class="form-sample">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Nama</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="<?= $hw->nama_hewan?>"
												readonly />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Harga</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="<?= $hw->harga_hewan ?>"
												readonly />
										</div>
									</div>
								</div>
							</div>
							<div class="row">

								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Jenis Hewan</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" value="
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
                                                }?>" readonly />
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">keterangan</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="detail_hewan"
												rows="4" readonly><?= $hw->detail_hewan ?></textarea>


										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Foto Hewan</label>
										<div class="col-sm-9">
											<img src="<?= base_url() ?>./upload/hewan/<?= $hw->foto_hewan ?>"
												class="rounded mx-auto d-block" heigt="200" width="200">
										</div>
									</div>
								</div>
							</div>
							<a class="btn btn-danger" href="<?= base_url('Admin/HewanAdmin/index')?>">Kembali</a>
						</form>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
