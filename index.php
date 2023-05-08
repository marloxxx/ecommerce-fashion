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
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="public/frontend/include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="public/frontend/include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="public/frontend/include/rs-plugin/css/navigation.css">

    <!-- Document Title
	============================================= -->
    <title>Home - Shop | Canvas</title>

    <style>
        .revo-slider-emphasis-text {
            font-size: 58px;
            font-weight: 700;
            letter-spacing: 1px;
            font-family: 'Poppins', sans-serif;
            padding: 15px 20px;
            border-top: 2px solid #FFF;
            border-bottom: 2px solid #FFF;
        }

        .revo-slider-desc-text {
            font-size: 20px;
            font-family: 'Lato', sans-serif;
            width: 650px;
            text-align: center;
            line-height: 1.5;
        }

        .revo-slider-caps-text {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            font-family: 'Poppins', sans-serif;
        }

        .tp-video-play-button {
            display: none !important;
        }

        .tp-caption {
            white-space: nowrap;
        }
    </style>
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
        <section id="slider" class="slider-element slider-parallax revslider-wrap overflow-hidden clearfix">

            <!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->
            <div id="rev_slider_ishop_wrapper" class="rev_slider_wrapper fullwidth-container" data-alias="default-slider" style="padding:0px;">
                <!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
                <div id="rev_slider_ishop" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
                    <ul> <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="5000" data-saveperformance="off" data-title="Latest Collections" style="background-color: #F6F6F6;">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase" data-x="100" data-y="50" data-transform_in="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="400" data-start="1000" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn"><img src="public/frontend/images/slider/rev/shop/girl1.jpg" alt="Girl"></div>

                            <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase" data-x="570" data-y="75" data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="700" data-start="1000" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style=" color: #333;">Get your
                                Shopping Bags Ready</div>

                            <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0" data-x="570" data-y="105" data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="700" data-start="1200" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style=" color: #333; max-width: 430px; line-height: 1.15;">Latest Fashion<br>Collections
                            </div>

                            <div class="tp-caption ltl tp-resizeme revo-slider-desc-text text-start" data-x="570" data-y="275" data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="700" data-start="1400" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style=" color: #333; max-width: 550px; white-space: normal;">We have created a Design
                                that looks Awesome, performs Brilliantly &amp; senses Orientations.</div>

                            <div class="tp-caption ltl tp-resizeme" data-x="570" data-y="375" data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="700" data-start="1550" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn"><a href="#" class="button button-border button-large button-rounded text-end m-0"><span>Start
                                        Shopping</span> <i class="icon-angle-right"></i></a></div>

                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-delay="5000" data-saveperformance="off" data-title="Messenger bags" style="background-color: #E9E8E3;">
                            <!-- LAYERS -->

                            <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase" data-x="630" data-y="78" data-transform_in="x:250;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;s:400;e:Power4.easeOutQuad;" data-speed="400" data-start="1000" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn"><img src="public/frontend/images/slider/rev/shop/bag.png" alt="Bag"></div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption ltl tp-resizeme revo-slider-caps-text text-uppercase" data-x="0" data-y="110" data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="700" data-start="1000" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style=" color: #333;">Buy Stylish
                                Bags at Discounted Prices</div>

                            <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text p-0 border-0" data-x="0" data-y="140" data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="700" data-start="1200" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style=" color: #333; line-height: 1.15;">Messenger Bags</div>

                            <div class="tp-caption ltl tp-resizeme revo-slider-desc-text text-start" data-x="0" data-y="240" data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="700" data-start="1400" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" style=" color: #333; max-width: 550px; white-space: normal;">Grantees insurmountable
                                challenges invest protect, growth improving quality social entrepreneurship.</div>

                            <div class="tp-caption ltl tp-resizeme" data-x="0" data-y="340" data-transform_in="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="700" data-start="1550" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn"><a href="#" class="button button-border button-large button-rounded text-end m-0"><span>Start
                                        Shopping</span> <i class="icon-angle-right"></i></a></div>

                            <div class="tp-caption utb tp-resizeme revo-slider-caps-text text-uppercase" data-x="510" data-y="0" data-transform_in="x:0;y:-236;z:0;rotationZ:0;skewX:0;skewY:0;opacity:0;s:700;e:Power4.easeOutQuad;" data-speed="600" data-start="2100" data-easing="easeOutQuad" data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn"><img src="public/frontend/images/slider/rev/shop/tag.png" alt="Bag"></div>

                        </li>
                    </ul>
                </div>
            </div><!-- END REVOLUTION SLIDER -->

        </section>

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row align-items-stretch gutter-20 min-vh-60">
                        <div class="col-md-8">

                            <div class="row align-items-stretch gutter-20 h-100">
                                <div class="col-md-6 min-vh-25 min-vh-md-0">
                                    <a href="#" class="grid-inner d-block h-100" style="background-image: url('public/frontend/images/shop/banners/2.jpg');"></a>
                                </div>

                                <div class="col-md-6 min-vh-25 min-vh-md-0">
                                    <a href="#" class="grid-inner d-block h-100" style="background-image: url('public/frontend/images/shop/banners/8.jpg'); background-position: right center;"></a>
                                </div>

                                <div class="col-md-12 min-vh-25 min-vh-md-0 pb-md-0">
                                    <a href="#" class="grid-inner d-block h-100" style="background-image: url('public/frontend/images/shop/banners/4.jpg');"></a>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 min-vh-50">
                            <a href="#" class="grid-inner d-block h-100" style="background-image: url('public/frontend/images/shop/banners/9.jpg'); background-position: center top;"></a>
                        </div>
                    </div>
                    <div class="topmargin-lg clearfix">
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
    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script src="public/frontend/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="public/frontend/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script src="public/frontend/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="public/frontend/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="public/frontend/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="public/frontend/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="public/frontend/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="public/frontend/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="public/frontend/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="public/frontend/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>
        var tpj = jQuery;
        tpj.noConflict();
        var $ = jQuery.noConflict();

        tpj(document).ready(function() {

            var apiRevoSlider = tpj('#rev_slider_ishop').show().revolution({
                sliderType: "standard",
                jsFileLocation: "include/rs-plugin/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {},
                responsiveLevels: [1200, 992, 768, 480, 320],
                gridwidth: 1140,
                gridheight: 500,
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    disableFocusListener: false,
                },
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "ares",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-title-wrap">	<span class="tp-arr-titleholder">{{title}}</span> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                }
            });

            apiRevoSlider.on("revolution.slide.onloaded", function(e) {
                SEMICOLON.slider.sliderDimensions();
            });

        }); //ready
    </script>
</body>

</html>