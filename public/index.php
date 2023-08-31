<?php
$title = "Home";
$meta_keywords = "";
$meta_description = "";
?>
<?php
include_once 'includes/html-top.php';
?>

<main class="main">
    <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase" data-owl-options="{
    'loop': true,
    'autoplay': true,
    'autoplayTimeout': 4000,
    'autoplayHoverPause': true,
    'autoWidth': true,
    'lazyLoad':true,
    'dots': false,
    'nav': true,
    'items': 1
    }">
        <?php include 'components/home-slide.php'; ?>
        <?php include 'components/home-slide.php'; ?>
        <?php include 'components/home-slide.php'; ?>
    </div>
    <!-- End .home-slider -->

    <div class="container">
        <div class="info-boxes-slider owl-carousel owl-theme mb-2" data-owl-options="{
                'dots': false,
                'loop': false,
                'responsive': {
                    '576': {
                        'items': 2
                    },
                    '992': {
                        'items': 3
                    }
                }
            }">
            <div class="info-box info-box-icon-left">
                <i class="icon-shipping"></i>

                <div class="info-box-content">
                    <h4>ENVÍO GRATUITO</h4>
                    <p class="text-body">*Excepto en productos indicados.</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left">
                <i class="icon-check-circle"></i>

                <div class="info-box-content">
                    <h4>3 AÑOS DE GARANTÍA</h4>
                    <p class="text-body">Con opciones de extensión</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left">
                <i class="icon-calendar"></i>

                <div class="info-box-content">
                    <h4>14 DÍAS DE PRUEBA</h4>
                    <p class="text-body">*Sujeto a condiciones</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
        </div>
        <!-- End .info-boxes-slider -->

        <div class="banners-container mb-2">
            <div class="banners-slider owl-carousel owl-theme" data-owl-options="{
                    'dots': false
                }">

                <?php include 'components/home-banner.php'; ?>
                <?php include 'components/home-banner.php'; ?>
                <?php include 'components/home-banner.php'; ?>

            </div>
        </div>
    </div>
    <!-- End .container -->

    <section class="featured-products-section">
        <div class="container">
            <h2 class="section-title heading-border ls-20 border-0">Top ventas</h2>

            <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
                    'dots': false,
                    'nav': true,
                    'responsive': {
                        '992': {
                            'items': 4
                        },
                        '1200': {
                            'items': 5
                        }
                    }
                }">
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
            </div>
            <!-- End .featured-proucts -->
        </div>
    </section>

    <div class="container">
        <h2 class="section-title heading-border ls-20 border-0">Nuestras marcas</h2>
        <div class="brands-slider owl-carousel owl-theme images-center appear-animate" data-animation-name="fadeIn" data-animation-duration="500" data-owl-options="{
                    'margin': 0}">
            <img src="assets/images/brands/brand1.png" width="130" height="56" alt="brand">
            <img src="assets/images/brands/brand2.png" width="130" height="56" alt="brand">
            <img src="assets/images/brands/brand3.png" width="130" height="56" alt="brand">
            <img src="assets/images/brands/brand4.png" width="130" height="56" alt="brand">
            <img src="assets/images/brands/brand5.png" width="130" height="56" alt="brand">
            <img src="assets/images/brands/brand6.png" width="130" height="56" alt="brand">
        </div>
        <!-- End .brands-slider -->
    </div>

    <section class="new-products-section">
        <div class="container">
            <h2 class="section-title heading-border ls-20 border-0">Novedades</h2>

            <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2" data-owl-options="{
                    'dots': false,
                    'nav': true,
                    'responsive': {
                        '992': {
                            'items': 4
                        },
                        '1200': {
                            'items': 5
                        }
                    }
                }">
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
                <?php include 'components/category-product.php'; ?>
            </div>
            <!-- End .featured-proucts -->

            <div class="banner banner-big-sale appear-animate" data-animation-delay="200" data-animation-name="fadeInUpShorter" style="background: #2A95CB center/cover url('assets/images/demoes/demo4/banners/banner-4.jpg');">
                <div class="banner-content row align-items-center mx-0">
                    <div class="col-md-9 col-sm-8">
                        <h2 class="text-white text-uppercase text-center text-sm-left ls-n-20 mb-md-0 px-4">
                            <b class="d-inline-block mr-3 mb-1 mb-md-0">Big Sale</b> All new fashion brands items up to 70% off
                            <small class="text-transform-none align-middle">Online Purchases Only</small>
                        </h2>
                    </div>
                    <div class="col-md-3 col-sm-4 text-center text-sm-right">
                        <a class="btn btn-light btn-white btn-lg" href="category.html">View Sale</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="feature-boxes-container">
        <div class="container appear-animate" data-animation-name="fadeInUpShorter">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center">
                        <div class="feature-box-icon">
                            <i class="icon-earphones-alt"></i>
                        </div>

                        <div class="feature-box-content p-0">
                            <h3>Soporte al cliente</h3>
                            <h5>No estarás solo</h5>

                            <p>Realmente nos preocupamos por usted y su pedido. Al comprar en Electroprecio obtendrá un soporte personalizado por email, chat o teléfono.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center">
                        <div class="feature-box-icon">
                            <i class="icon-credit-card"></i>
                        </div>

                        <div class="feature-box-content p-0">
                            <h3>Opciones de pago</h3>
                            <h5>Podrás elegir entre diferentes métodos</h5>

                            <p>Tendrás diferentes métodos de pago en el momento de procesar la compra para que escojas el que te ofrezca mayor seguridad y comodidad.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="feature-box px-sm-5 feature-box-simple text-center">
                        <div class="feature-box-icon">
                            <i class="icon-action-undo"></i>
                        </div>
                        <div class="feature-box-content p-0">
                            <h3>Servicios de instalación</h3>
                            <h5>No sólo vendemos productos</h5>

                            <p>También ponemos a tu disposición en los productos que lo requieran diferentes servicios de entrega e instalación.</p>
                        </div>
                        <!-- End .feature-box-content -->
                    </div>
                    <!-- End .feature-box -->
                </div>
                <!-- End .col-md-4 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container-->
    </section>
    <!-- End .feature-boxes-container -->

    <section class="promo-section bg-dark" data-parallax="{'speed': 2, 'enableOnMobile': true}" data-image-src="assets/images/demoes/demo4/banners/banner-5.jpg">
        <div class="promo-banner banner container text-uppercase">
            <div class="banner-content row align-items-center text-center">
                <div class="col-md-4 ml-xl-auto text-md-right appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="600">
                    <h2 class="mb-md-0 text-white">Cheques<br>Regalo</h2>
                </div>
                <div class="col-md-4 col-xl-3 pb-4 pb-md-0 appear-animate" data-animation-name="fadeIn" data-animation-delay="300">
                    <a href="category.php" class="btn btn-dark btn-black ls-10">Escoge el tuyo</a>
                </div>
                <div class="col-md-4 mr-xl-auto text-md-left appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="600">
                    <h4 class="mb-1 mt-1 font1 coupon-sale-text p-0 d-block ls-n-10 text-transform-none">
                        <b>Un regalo IDEAL</b></h4>
                    <h5 class="mb-1 coupon-sale-text text-white ls-10 p-0"><i class="ls-0">DESDE</i><b class="text-white bg-secondary ls-n-10">100 €</b></h5>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section pb-0">
        <div class="container">
            <h2 class="section-title heading-border border-0 appear-animate" data-animation-name="fadeInUp">Últimos artículos</h2>

            <div class="owl-carousel owl-theme appear-animate" data-animation-name="fadeIn" data-owl-options="{
                    'loop': false,
                    'margin': 20,
                    'autoHeight': true,
                    'autoplay': false,
                    'dots': false,
                    'items': 2,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '480': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        }
                    }
                }">
                <?php include 'components/blog-post.php'; ?>
                <?php include 'components/blog-post.php'; ?>
                <?php include 'components/blog-post.php'; ?>
                <?php include 'components/blog-post.php'; ?>
                <?php include 'components/blog-post.php'; ?>
                <?php include 'components/blog-post.php'; ?>
                <?php include 'components/blog-post.php'; ?>
                <?php include 'components/blog-post.php'; ?>
            </div>

        </div>
    </section>
</main>
<!-- End .main -->

<?php
include_once 'includes/html-bottom.php';
?>