<!-- Start All Title Box -->
<div class="all-title-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Shop Detail</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url('User/HomeUser/index/')?>">Home</a></li>
					<li class="breadcrumb-item active">Detail Hewan</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
	<div class="container">
		<div class="row">
			<?php foreach($hewan as $hw) : ?>
			<div class="col-xl-5 col-lg-5 col-md-6">
				<div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active"> <img class="d-block w-100" src="<?= base_url() ?>./upload/hewan/<?= $hw->foto_hewan ?>"> </div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7 col-md-6">
				<div class="single-product-details">
					<h2><?= $hw->nama_hewan?></h2>
					<h5> Rp. <?= $hw->harga_hewan?> </h5>
					<p class="available-stock"><span> <b> Jenis Hewan : </b>
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
                        }?>
                    </span></p>
					<h4>Keterangan Produk</h4>
					<p> <?= $hw->detail_hewan?> </p>
					<div class="price-box-bar">
						<div class="cart-and-bay-btn">
							<a class="btn hvr-hover" data-fancybox-close="" href="#">Beli</a>
							<a class="btn hvr-hover" data-fancybox-close="" href="#">Tambah Keranjang</a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
