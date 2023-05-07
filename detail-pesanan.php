<?php
include 'config/koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM pesanan WHERE id = '$id'";
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
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Page Title
		============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Detail Pesanan</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Pesanan</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <div class="row col-mb-50 gutter-50">
                        <div class="col-lg-12">
                            <h3>Detail Pemesan:</h3>
                            <div class="row mb-0">
                                <div class="col-12 form-group">
                                    <label for="billing-form-address">Nama Produk:</label>
                                    <input type="text" class="sm-form-control" value="<?= $result['nama_produk']; ?>" disabled />
                                </div>
                                <div class="col-12 form-group">
                                    <label for="billing-form-address">Harga Produk:</label>
                                    <input type="number" class="sm-form-control" value="<?= $result['total_harga'] / $result['qty']; ?>" disabled />
                                </div>
                                <div class="col-12 form-group">
                                    <label for="billing-form-address">Jumlah:</label>
                                    <input type="number" class="sm-form-control" value="<?= $result['qty']; ?>" disabled />
                                </div>
                                <div class="col-12 form-group">
                                    <label for="billing-form-address">Total Harga:</label>
                                    <input type="number" class="sm-form-control" value="<?= $result['total_harga']; ?>" disabled />
                                </div>
                                <div class="col-12 form-group">
                                    <label for="billing-form-address">Alamat Pemesan:</label>
                                    <textarea class="sm-form-control" name="alamat_pemesan" rows="2" cols="30" disabled>
                                        <?= $result['alamat_pemesan']; ?>
                                    </textarea>
                                </div>
                            </div>
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
</body>

</html>