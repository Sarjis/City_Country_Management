<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Country-City Management System</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords"
          content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom-Files -->
{{--<link href="{{asset('/')}}front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />--}}
<!-- Bootstrap css -->
    <link href="{{asset('/')}}front-end/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/')}}front-end/css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="{{asset('/')}}front-end/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- pop-up-box -->
    <link href="{{asset('/')}}front-end/css/menu.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- menu style -->
    <!-- //Custom-Files -->

    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">
    <!-- //web fonts -->

</head>

<body>
<div id="app">


    <!-- header-bottom-->
    <div class="header-bot">
        <div class="container">
            <div class="row header-bot_inner_wthreeinfo_header_mid">
                <!-- logo -->
                <div class="col-md-3 logo_agile">
                    <h1 class="text-center">
                        <router-link :to="{path:'/'}" class="font-weight-bold font-italic">
                            <img src="{{asset('/')}}front-end/images/logo2.png" alt=" " class="img-fluid">Country-City
                        </router-link>
                    </h1>
                </div>
                <!-- //logo -->
                <!-- header-bot -->
                <div class="col-md-9 header mt-4 mb-md-0 mb-4">
                    <div class="row">
                        <!-- search -->
                        <div class="col-10 agileits_search">
                            <form class="form-inline" action="#" method="post">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                       aria-label="Search"
                                       required>
                                <button class="btn my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                        <!-- //search -->
                        <!-- cart details -->
                        <div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                <form action="#" method="post" class="last">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="display" value="1">
                                    <button class="btn w3view-cart" type="submit" name="submit" value="">
                                        <i class="fas fa-cart-arrow-down"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- //cart details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop locator (popup) -->
    <!-- //header-bottom -->
    <!-- navigation -->
    <vue-menu></vue-menu>
    <!-- //navigation -->

    <!-- banner -->

    <!-- //banner -->

    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->

            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->

                <!-- //product left -->

                <!-- product right -->


                <div class="col-lg-12 justify-content-around">
                    <router-view></router-view>

                </div>

            </div>
        </div>
    </div>

    <footer>
        <!-- footer third section -->
        <div class="w3l-middlefooter-sec">
            <div class="container py-md-5 py-sm-4 py-3">
                <div class="row footer-info w3-agileits-info">
                    <!-- footer categories -->
                    <div class="col-md-3 col-sm-6 footer-grids">
                        <h3 class="text-white font-weight-bold mb-3">Categories</h3>
                        <ul>
                            <li class="mb-3">
                                <a href="product.html">Mobiles </a>
                            </li>
                            <li class="mb-3">
                                <a href="product.html">Computers</a>
                            </li>
                            <li class="mb-3">
                                <a href="product.html">TV, Audio</a>
                            </li>
                            <li class="mb-3">
                                <a href="product2.html">Smartphones</a>
                            </li>
                            <li class="mb-3">
                                <a href="product.html">Washing Machines</a>
                            </li>
                            <li>
                                <a href="product2.html">Refrigerators</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //footer categories -->
                    <!-- quick links -->
                    <div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
                        <h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
                        <ul>
                            <li class="mb-3">
                                <a href="about.html">About Us</a>
                            </li>
                            <li class="mb-3">
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li class="mb-3">
                                <a href="help.html">Help</a>
                            </li>
                            <li class="mb-3">
                                <a href="faqs.html">Faqs</a>
                            </li>
                            <li class="mb-3">
                                <a href="terms.html">Terms of use</a>
                            </li>
                            <li>
                                <a href="privacy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
                        <h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
                        <ul>
                            <li class="mb-3">
                                <i class="fas fa-map-marker"></i> 123 Sebastian, USA.
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-mobile"></i> 333 222 3333
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone"></i> +222 11 4444
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:example@mail.com"> mail 1@example.com</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                <a href="mailto:example@mail.com"> mail 2@example.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
                        <!-- newsletter -->
                        <h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
                        <p class="mb-3">Free Delivery on your first order!</p>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                <input type="submit" value="Go">
                            </div>
                        </form>
                        <!-- //newsletter -->
                        <!-- social icons -->
                        <div class="footer-grids  w3l-socialmk mt-3">
                            <h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a class="icon fb" href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon tw" href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon gp" href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- //social icons -->
                    </div>
                </div>
                <!-- //quick links -->
            </div>
        </div>
        <!-- //footer third section -->

        <!-- footer fourth section -->

        <!-- //footer fourth section (text) -->
    </footer>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy-right py-3">
        <div class="container">
            <p class="text-center text-white">© 2018 Electro Store. All rights reserved | Design by
                <a href="http://w3layouts.com"> W3layouts.</a>
            </p>
        </div>
    </div>
</div>
<!-- //copyright -->
<script src="{{asset('js/app.js')}}"></script>
<!-- js-files -->
<!-- jquery -->
<script src="{{asset('/')}}front-end/js/jquery-2.2.3.min.js"></script>
<!-- //jquery -->

<!-- nav smooth scroll -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //nav smooth scroll -->

<!-- popup modal (for location)-->
<script src="{{asset('/')}}front-end/js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //popup modal (for location)-->

<!-- cart-js -->
<script src="{{asset('/')}}front-end/js/minicart.js"></script>

<!-- //cart-js -->

<!-- password-script -->

<!-- //password-script -->

<!-- scroll seller -->
<script src="{{asset('/')}}front-end/js/scroll.js"></script>
<!-- //scroll seller -->

<!-- smoothscroll -->
<script src="{{asset('/')}}front-end/js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="{{asset('/')}}front-end/js/move-top.js"></script>
<script src="{{asset('/')}}front-end/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
<script src="{{asset('/')}}front-end/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->
</body>

</html>