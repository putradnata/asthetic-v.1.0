<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="{{ app()->getLocale() }}">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>ＡＥＳＴＨＥＴＩＣ　ヱ竹ヮ</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="welcomepageComponents/css/base.css">
    <link rel="stylesheet" href="welcomepageComponents/css/vendor.css">
    <link rel="stylesheet" href="welcomepageComponents/css/main.css">

    <!-- script
    ================================================== -->
    <script src="welcomepageComponents/js/modernizr.js"></script>
    <script src="welcomepageComponents/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <!-- <link rel="shortcut icon" href="welcomepageComponents/favicon.ico" type="image/x-icon">
    <link rel="icon" href="welcomepageComponents/favicon.ico" type="image/x-icon"> -->

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">
        <div class="header-logo">
            <a class="site-logo" href="/">
                <img src="welcomepageComponents/images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">
            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
            <div class="header-nav__content">
                <h3>ナビゲーション</h3>

                <ul class="header-nav__list">
                    <li class="current">
                      <a href="/">Home</a>
                    </li>
                    <li>
                      <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                      <a href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="welcomepageComponents/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to 美的</h3>

                <h1>
                    Stay <br>
                    ＡＥＳＴＨＥＴＩＣ　ヱ竹ヮ
                    <!-- of people who design <br>
                    influential brands and <br>
                    digital experiences. -->
                </h1>
            </div>
        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/SweetCoffendang"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/putradnata15"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="https://www.instagram.com/putradnata/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul>
        <!-- end home-social -->

    </section> <!-- end s-home -->

    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="welcomepageComponents/js/jquery-3.2.1.min.js"></script>
    <script src="welcomepageComponents/js/plugins.js"></script>
    <script src="welcomepageComponents/js/main.js"></script>

</body>

</html>
