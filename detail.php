<?php
include 'config/koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id = '$id'";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/style.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="public/frontend/css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
	============================================= -->
    <title>Shop Single Features List | Canvas</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="full-header">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="index.php" class="standard-logo" data-dark-logo="public/frontend/images/logo-dark.png"><img src="public/frontend/images/logo.png" alt="Canvas Logo"></a>
                            <a href="index.php" class="retina-logo" data-dark-logo="public/frontend/images/logo-dark@2x.png"><img src="public/frontend/images/logo@2x.png" alt="Canvas Logo"></a>
                        </div>
                        <!-- #logo end -->

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="backend/dashboard">
                                        <div>Go To Dashboard</div>
                                    </a>
                                <li>
                            </ul>

                        </nav><!-- #primary-menu end -->
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Page Title
		============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1><?= $result['nama'] ?></h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop Single</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div class="single-product">
                        <div class="product">
                            <div class="row gutter-40">

                                <div class="col-md-6">
                                    <!-- Product Single - Gallery
									============================================= -->
                                    <div class="product-image">
                                        <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                            <div class="flexslider">
                                                <div class="slider-wrap" data-lightbox="gallery">
                                                    <div class="slide" data-thumb="public/frontend/images/shop/thumbs/dress/3.jpg">
                                                        <a href="public/frontend/images/shop/dress/3.jpg" title="Pink Printed Dress - Front View" data-lightbox="gallery-item">
                                                            <img src="public/frontend/images/shop/dress/3.jpg" alt="Pink Printed Dress"></a>
                                                    </div>
                                                    <div class="slide" data-thumb="public/frontend/images/shop/thumbs/dress/3-1.jpg">
                                                        <a href="public/frontend/images/shop/dress/3-1.jpg" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="public/frontend/images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a>
                                                    </div>
                                                    <div class="slide" data-thumb="public/frontend/images/shop/thumbs/dress/3-2.jpg">
                                                        <a href="public/frontend/images/shop/dress/3-2.jpg" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="public/frontend/images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Product Single - Gallery End -->

                                </div>

                                <div class="col-md-6 product-desc">

                                    <div class="d-flex align-items-center justify-content-between">

                                        <!-- Product Single - Price
										============================================= -->
                                        <div class="product-price">
                                            <ins>Rp. <?= number_format($result['harga'], 0, ',', '.') ?></ins>
                                        </div><!-- Product Single - Price End -->

                                        <!-- Product Single - Rating
										============================================= -->
                                        <div class="d-flex align-items-center">
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div><!-- Product Single - Rating End -->
                                        </div>

                                    </div>

                                    <div class="line"></div>

                                    <!-- Product Single - Quantity & Cart Button
									============================================= -->
                                    <div class="cart mb-0 d-flex justify-content-between align-items-center" method="post" enctype='multipart/form-data'>
                                        <a href="pesan.php?id=<?= $result['id'] ?>" class="add-to-cart button">
                                            <i class="icon-shopping-cart"></i>
                                            Pesan Sekarang
                                        </a>
                                    </div><!-- Product Single - Quantity & Cart Button End -->

                                    <div class="line"></div>

                                    <!-- Product Single - Short Description
									============================================= -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <span class="text-muted">Jenis Produk:</span>
                                            <span class="text-dark fw-semibold"><?= $result['jenis_produk'] ?></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <span class="text-muted">Stok</span>
                                            <span class="text-dark fw-semibold"><?= $result['stok'] ?></span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            <span class="text-muted">Kode:</span>
                                            <span class="text-dark fw-semibold"><?= $result['kode'] ?></span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="w-100"></div>

                            </div>
                        </div>
                    </div>

                    <div class="line"></div>
                </div>
            </div>
        </section><!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">

            <!-- Copyrights
			============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row col-mb-30">

                        <div class="col-md-6 text-center text-md-start">
                            Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>

                        </div>

                        <div class="col-md-6 text-center text-md-end">
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                        </div>

                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="public/frontend/js/jquery.js"></script>
    <script src="public/frontend/js/plugins.min.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="public/frontend/js/functions.js"></script>

</body>

</html>