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

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/style.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="public/backend/css/sweetalert.css" type="text/css" />
    <link rel="stylesheet" href="public/backend/css/toastr.css" type="text/css" />
    <link rel="stylesheet" href="public/frontend/css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
	============================================= -->
    <title>Checkout | Canvas</title>

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
                <h1>Checkout</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div class="row col-mb-50 gutter-50">
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
                                <div class="line"></div>
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

                            </div><!-- Product Single - Gallery End -->

                        </div>
                        <div class="col-lg-6">
                            <h3>Detail Pemesan:</h3>
                            <form id="billing-form" name="billing-form" class="row mb-0" action="#" method="post">

                                <div class="col-md-12 form-group">
                                    <label for="billing-form-name">Nama Pemesan:</label>
                                    <input type="text" name="nama_pemesan" class="sm-form-control" />
                                </div>

                                <div class="col-12 form-group">
                                    <label for="billing-form-address">Alamat Pemesan:</label>
                                    <textarea class="sm-form-control" name="alamat_pemesan" rows="2" cols="30"></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="billing-form-address">Jumlah:</label>
                                    <input type="number" name="qty" class="sm-form-control" />
                                </div>
                                <div class="col-12 form-group">
                                    <label for="billing-form-address">Total Harga:</label>
                                    <input type="number" name="total_harga" class="sm-form-control disabled" />
                                </div>
                                <div class="col-12 form-group">
                                    <button type="submit" name="submit" class="button button-3d m-0">Pesan</button>
                                </div>
                            </form>
                        </div>

                        <div class="w-100"></div>

                    </div>
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
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                        </div>

                        <div class="col-md-6 text-center text-md-end">
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
                            </div>
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
    <script src="public/backend/js/toastr.js"></script>
    <script src="public/backend/js/sweetalert.js"></script>
    <script>
        $(document).ready(function() {
            // when qty changes or keyup event fires    
            $('input[name="qty"]').on('change keyup', function() {
                var qty = $(this).val();
                var harga = <?= $result['harga'] ?>;
                var total_harga = qty * harga;
                $('input[name="total_harga"]').val(total_harga);
            });


            $('#billing-form').submit(function(e) {
                e.preventDefault();
                var nama_pemesan = $('[name="nama_pemesan"]').val();
                var alamat_pemesan = $('[name="alamat_pemesan"]').val();
                var qty = $('[name="qty"]').val();
                var total_harga = $('[name="total_harga"]').val();
                $.ajax({
                    type: 'POST',
                    url: 'function.php',
                    data: {
                        nama_pemesan: nama_pemesan,
                        alamat_pemesan: alamat_pemesan,
                        qty: qty,
                        total_harga: total_harga,
                        nama_produk: '<?= $result['nama'] ?>',
                    },
                    success: function(response) {
                        if (response.status == "success") {
                            Swal.fire({
                                title: 'Success',
                                text: response.message,
                                icon: "success",
                                confirmButtonText: 'OK'
                            }).then(function() {
                                window.location.href = "detail-pesanan.php?id=" + response.id;
                            });
                        } else {
                            Swal.fire({
                                title: 'Error',
                                text: response.message,
                                icon: "error",
                                confirmButtonText: 'OK'
                            });
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>