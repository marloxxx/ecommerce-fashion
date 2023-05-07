<?php
include 'config/koneksi.php';
$sql = "SELECT * FROM produk";
$query = $con->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
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

    <link rel="stylesheet" href="public/frontend/css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Document Title
	============================================= -->
    <title>Home - Shop | Canvas</title>
</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="index.php" class="standard-logo" data-dark-logo="public/frontend/images/logo-dark.png"><img src="public/frontend/images/logo.png" alt="Canvas Logo"></a>
                            <a href="index.php" class="retina-logo" data-dark-logo="public/frontend/images/logo-dark@2x.png"><img src="public/frontend/images/logo@2x.png" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

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
        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="clear"></div>
                    <div class="shop row gutter-30">
                        <?php foreach ($result as $key => $row) : ?>
                            <div class="product col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="grid-inner">
                                    <div class="product-image">
                                        <a href="detail.php?id=<?= $row['id'] ?>">
                                            <img src="public/frontend/images/shop/dress/3.jpg" alt="Checked Short Dress"></a>
                                        <a href="detail.php?id=<?= $row['id'] ?>">
                                            <img src="public/frontend/images/shop/dress/3-1.jpg" alt="Checked Short Dress"></a>
                                        <!-- <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
                                            <a href="public/frontend/include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div> -->
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title">
                                            <h3><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['nama'] ?></a></h3>
                                        </div>
                                        <div class="product-price"><ins>Rp. <?= number_format($row['harga'], 0, ',', '.') ?></ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="clear bottommargin-sm"></div>

                </div>

                <div class="section mb-0">
                    <div class="container">

                        <div class="row col-mb-50">
                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                    <div class="fbox-icon">
                                        <i class="icon-thumbs-up2"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>100% Original</h3>
                                        <p class="mt-0">We guarantee you the sale of Original Brands.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                    <div class="fbox-icon">
                                        <i class="icon-credit-cards"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Payment Options</h3>
                                        <p class="mt-0">We accept Visa, MasterCard and American Express.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                    <div class="fbox-icon">
                                        <i class="icon-truck2"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>Free Shipping</h3>
                                        <p class="mt-0">Free Delivery to 100+ Locations on orders above $40.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                    <div class="fbox-icon">
                                        <i class="icon-undo"></i>
                                    </div>
                                    <div class="fbox-content">
                                        <h3>30-Days Returns</h3>
                                        <p class="mt-0">Return or exchange items purchased within 30 days.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

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
                            Copyrights &copy; 2023 All Rights Reserved by Canvas Inc.<br>

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

</body>

</html>