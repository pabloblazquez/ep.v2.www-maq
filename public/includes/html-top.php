<?php
global $title;
global $meta_keywords;
global $meta_description;

global $page_top_stylesheet;
global $page_top_scripts;
global $page_bottom_scripts;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $title ? $title.' - ' : ''; ?>Electroprecio</title>

    <meta name="keywords" content="<?php echo $meta_keywords; ?>" />
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="author" content="areago.es">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">


    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/demo4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <?php echo $page_top_stylesheet; ?>
    <?php echo $page_top_scripts; ?>
</head>

<body>
<div class="page-wrapper">
    <div class="top-notice bg-primary text-white">
        <div class="container text-center">
            <h5 class="d-inline-block">Segundas rebajas <b>hasta -50%</b></h5>
            <a href="category.php" class="category">VER OFERTAS</a>
            <small>* Por tiempo limitado</small>
            <button title="Cerrar aviso" type="button" class="mfp-close">×</button>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .top-notice -->

    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-left header-dropdowns mr-0 mr-sm-auto">

                    <div class="header-dropdown dropdown-expanded d-none d-sm-block">
                        <a href="#">Contacto</a>
                        <div class="header-menu">
                            <ul class="font-weight-bold">
                                <li><a href="tel:943 442 806"><i class="icon-phone text-dark"></i> 943 442 806 <i class="fa fa-check-circle text-success" data-toggle="tooltip" data-html="true" title="<b>Servicio activo</b><br />Horario de lunes a viernes<br />De 10:00 a 14:00"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-html="true" title="<b>Servicio no activo</b><br />Horario de lunes a viernes<br />De 9:30 a 16:00"><i class="icon-chat text-dark"></i> Chat Offline <i class="fa fa-times-circle text-danger"></i></a></li>
                                <li><a href="mailto:info@electroprecio.com"><i class="icon-envolope text-dark"></i> info@electroprecio.com <i class="fa fa-check-circle text-success"></i></a></li>
                                <li><a href="#"><i class="icon-home text-dark"></i> Ubicación <i class="fa fa-check-circle text-success" data-toggle="tooltip" data-html="true" title="<b>Local comercial abierto</b><br />Horario de lunes a viernes<br />De 9:00 a 13:30 y de 15:30 a 18:00"></i></a></li>
                            </ul>
                        </div>
                        <!-- End .header-menu -->
                    </div>
                    <!-- End .header-dropown -->
                </div>

                <div class="header-right header-dropdowns ml-0 ml-sm-auto">

                    <div class="header-dropdown dropdown-expanded d-none d-sm-block">
                        <a href="#">Links</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="about.php">Sobre nosotros</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="export.php">Exportaciones</a></li>
                                <li><a href="contact.php">Contacto</a></li>
                            </ul>
                        </div>
                        <!-- End .header-menu -->
                    </div>
                    <!-- End .header-dropown -->

                    <span class="separator"></span>

                    <div class="social-icons d-sm-block">
                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                        <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                    </div>
                    <!-- End .social-icons -->

                    <?php /*
                    <span class="separator"></span>

                    <div class="header-dropdown">
                        <a href="#">ESP</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">ESP</a></li>
                                <li><a href="#">EUS</a></li>
                                <li><a href="#">PT</a></li>
                            </ul>
                        </div>
                        <!-- End .header-menu -->
                    </div>
                    <!-- End .header-dropown -->
                    */ ?>

                </div>
                <!-- End .header-right -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-top -->

        <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
            <div class="container">
                <div class="header-left col-lg-2 w-auto pl-0">
                    <button class="mobile-menu-toggler text-primary mr-2" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo-electroprecio.svg" alt="Logotipo de Electroprecio">
                    </a>
                </div>
                <!-- End .header-left -->

                <div class="header-right w-lg-max">
                    <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q" placeholder="Busca productos..." required>
                                <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                            </div>
                            <!-- End .header-search-wrapper -->
                        </form>
                    </div>
                    <!-- End .header-search -->

                    <div class="owl-carousel owl-theme" style="width: 30rem;" data-owl-options="{
						'loop': true,
						'autoplay': true,
						'autoplayTimeout': 4000,
						'autoplayHoverPause': true,
						'autoWidth': true,
						'lazyLoad':true,
						'dots': false,
						'nav': false,
						'items': 1
					}">
                        <div class="" style="width: 30rem;">
                            <h5 class="text-body mb-0 text-center">Valoración en <span class="text-white bg-danger">&nbsp;GOOGLE&nbsp;</span></h5>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                        </div>
                        <div class="" style="width: 30rem;">
                            <h5 class="text-body mb-0 text-center">Valoración en <span class="text-white bg-info">&nbsp;IDEALO&nbsp;</span></h5>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:90%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                        </div>
                        <div class="" style="width: 30rem;">
                            <h5 class="text-body mb-0 text-center">Valoración en <span class="text-white bg-success">&nbsp;TRUSTPILOT&nbsp;</span></h5>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <!-- End .product-ratings -->
                            </div>
                        </div>
                    </div>

                    <a href="login.php" class="header-icon" title="login"><i class="icon-user-2"></i></a>

                    <div class="dropdown cart-dropdown">
                        <a href="cart.php" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="minicart-icon"></i>
                            <span class="cart-count badge-circle">3</span>
                        </a>

                        <div class="cart-overlay"></div>

                        <div class="dropdown-menu mobile-cart">
                            <a href="#" title="Cerrar" class="btn-close">×</a>

                            <div class="dropdownmenu-wrapper custom-scrollbar">
                                <div class="dropdown-cart-header">Carrito de compra</div>
                                <!-- End .dropdown-cart-header -->

                                <div class="dropdown-cart-products">

                                    <?php
                                    include 'components/side-cart-product.php';
                                    ?>

                                    <?php
                                    include 'components/side-cart-product.php';
                                    ?>

                                    <?php
                                    include 'components/side-cart-product.php';
                                    ?>

                                </div>
                                <!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>SUBTOTAL:</span>

                                    <span class="cart-total-price float-right">134,00 €</span>
                                </div>
                                <!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.php" class="btn btn-gray btn-block view-cart">Ver carrito</a>
                                    <a href="checkout.php" class="btn btn-dark btn-block">Completar pedido</a>
                                </div>
                                <!-- End .dropdown-cart-total -->
                            </div>
                            <!-- End .dropdownmenu-wrapper -->
                        </div>
                        <!-- End .dropdown-menu -->
                    </div>
                    <!-- End .dropdown -->
                </div>
                <!-- End .header-right -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-middle -->

        <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
            <div class="container">
                <nav class="main-nav w-100">
                    <ul class="menu">
                        <li>
                            <a href="category.php">Televisores y multimedia</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 1</a>
                                        <ul class="submenu">
                                            <li><a href="category.html">Fullwidth Banner</a></li>
                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                            <li><a href="category.html">Left Sidebar</a></li>
                                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                            <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                            <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 2</a>
                                        <ul class="submenu">
                                            <li><a href="category-list.html">List Types</a></li>
                                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                            <li><a href="category.html">3 Columns Products</a></li>
                                            <li><a href="category-4col.html">4 Columns Products</a></li>
                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner">
                                            <figure>
                                                <img src="assets/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                            </figure>
                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">UP TO</span><br />
                                                    <b class="">50%</b>
                                                    <i>OFF</i>
                                                </h4>
                                                <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .megamenu -->
                        </li>
                        <li>
                            <a href="category.php">Electrodomésticos</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 1</a>
                                        <ul class="submenu">
                                            <li><a href="category.html">Fullwidth Banner</a></li>
                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                            <li><a href="category.html">Left Sidebar</a></li>
                                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                            <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                            <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 2</a>
                                        <ul class="submenu">
                                            <li><a href="category-list.html">List Types</a></li>
                                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                            <li><a href="category.html">3 Columns Products</a></li>
                                            <li><a href="category-4col.html">4 Columns Products</a></li>
                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner">
                                            <figure>
                                                <img src="assets/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                            </figure>
                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">UP TO</span><br />
                                                    <b class="">50%</b>
                                                    <i>OFF</i>
                                                </h4>
                                                <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .megamenu -->
                        </li>
                        <li>
                            <a href="category.php">Telefonía</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 1</a>
                                        <ul class="submenu">
                                            <li><a href="category.html">Fullwidth Banner</a></li>
                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                            <li><a href="category.html">Left Sidebar</a></li>
                                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                            <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                            <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 2</a>
                                        <ul class="submenu">
                                            <li><a href="category-list.html">List Types</a></li>
                                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                            <li><a href="category.html">3 Columns Products</a></li>
                                            <li><a href="category-4col.html">4 Columns Products</a></li>
                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner">
                                            <figure>
                                                <img src="assets/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                            </figure>
                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">UP TO</span><br />
                                                    <b class="">50%</b>
                                                    <i>OFF</i>
                                                </h4>
                                                <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .megamenu -->
                        </li>
                        <li>
                            <a href="category.php">Deporte, ocio y descanso</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 1</a>
                                        <ul class="submenu">
                                            <li><a href="category.html">Fullwidth Banner</a></li>
                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                            <li><a href="category.html">Left Sidebar</a></li>
                                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                            <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                            <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 2</a>
                                        <ul class="submenu">
                                            <li><a href="category-list.html">List Types</a></li>
                                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                            <li><a href="category.html">3 Columns Products</a></li>
                                            <li><a href="category-4col.html">4 Columns Products</a></li>
                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner">
                                            <figure>
                                                <img src="assets/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                            </figure>
                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">UP TO</span><br />
                                                    <b class="">50%</b>
                                                    <i>OFF</i>
                                                </h4>
                                                <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .megamenu -->
                        </li>
                        <li>
                            <a href="category.php">Informática</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 1</a>
                                        <ul class="submenu">
                                            <li><a href="category.html">Fullwidth Banner</a></li>
                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                            <li><a href="category.html">Left Sidebar</a></li>
                                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                            <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                            <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 2</a>
                                        <ul class="submenu">
                                            <li><a href="category-list.html">List Types</a></li>
                                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                            <li><a href="category.html">3 Columns Products</a></li>
                                            <li><a href="category-4col.html">4 Columns Products</a></li>
                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner">
                                            <figure>
                                                <img src="assets/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                            </figure>
                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">UP TO</span><br />
                                                    <b class="">50%</b>
                                                    <i>OFF</i>
                                                </h4>
                                                <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .megamenu -->
                        </li>
                        <li class="float-right pl-3">
                            <a href="category.php">Ofertas TOP</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 1</a>
                                        <ul class="submenu">
                                            <li><a href="category.html">Fullwidth Banner</a></li>
                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                            <li><a href="category.html">Left Sidebar</a></li>
                                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                            <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                            <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 2</a>
                                        <ul class="submenu">
                                            <li><a href="category-list.html">List Types</a></li>
                                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                            <li><a href="category.html">3 Columns Products</a></li>
                                            <li><a href="category-4col.html">4 Columns Products</a></li>
                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner">
                                            <figure>
                                                <img src="assets/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                            </figure>
                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">UP TO</span><br />
                                                    <b class="">50%</b>
                                                    <i>OFF</i>
                                                </h4>
                                                <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .megamenu -->
                        </li>
                        <li class="float-right pl-3">
                            <a href="category.php">Promociones especiales</a>
                            <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 1</a>
                                        <ul class="submenu">
                                            <li><a href="category.html">Fullwidth Banner</a></li>
                                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                            <li><a href="category.html">Left Sidebar</a></li>
                                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                            <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                            <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="nolink">VARIATION 2</a>
                                        <ul class="submenu">
                                            <li><a href="category-list.html">List Types</a></li>
                                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                            <li><a href="category.html">3 Columns Products</a></li>
                                            <li><a href="category-4col.html">4 Columns Products</a></li>
                                            <li><a href="category-5col.html">5 Columns Products</a></li>
                                            <li><a href="category-6col.html">6 Columns Products</a></li>
                                            <li><a href="category-7col.html">7 Columns Products</a></li>
                                            <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 p-0">
                                        <div class="menu-banner">
                                            <figure>
                                                <img src="assets/images/menu-banner.jpg" width="192" height="313" alt="Menu banner">
                                            </figure>
                                            <div class="banner-content">
                                                <h4>
                                                    <span class="">UP TO</span><br />
                                                    <b class="">50%</b>
                                                    <i>OFF</i>
                                                </h4>
                                                <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .megamenu -->
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End .container -->
        </div>
        <!-- End .header-bottom -->
    </header>
    <!-- End .header -->