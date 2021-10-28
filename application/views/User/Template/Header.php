<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Ternakku</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/images/apple-touch-icon.png">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/megamenu.css" type="text/css" media="all" />
    <!-- <link href="assets/yamm/yamm.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">


</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link"
                                href="<?= base_url('User/HomeUser/index')?>">Home</a></li>
                        <li class="dropdown megamenu-fw">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content col-lg-5" role="menu">
                                <div class="row">
                                    <div class="col-menu">
                                        <h6 class="title">Hewan Ternak</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <?php foreach($kategori as $kg) :?>
                                                <li><a
                                                        href="<?= base_url('User/HomeUser/Produk/'). $kg->id_kategori_produk ?>"><?= $kg->nama_kategori ?></a>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                </div>
                                <!-- end row -->
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('User/HomeUser/tentang')?>">Tentang
                                Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('User/HomeUser/kontak')?>">Kontak
                                Kami</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">3</span>
                            </a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->