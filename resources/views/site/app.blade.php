<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Charity</title>
    <link rel="icon" href="{{ asset('site/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/flaticon.css') }}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/nice-select.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset('site/img/logo.png') }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">about</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Causes.html">Causes</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="Event.html">Event</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="blog.html">blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_2" href="#">learn more</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
@yield('conteudo')
  

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <img src="{{ asset('site/img/footer_logo.png') }}" class="footer_logo" alt="">
                        <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open
                        </p>
                        <div class="work_hours">
                            <h5>Working Hours:</h5>
                            <ul>
                                <li> <p> Monday-Friday:</p> <span> 8AM - 6PM</span></li>
                                <li> <p>Saturday-Sunday:</p> <span> 8AM - 12PM</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Causes</h4>
                        <ul class="list-unstyled">
                            <li><a href="">Boat Shippment</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Transport Planning</a></li>
                            <li><a href="">Transportation</a></li>
                            <li><a href="">Truck Delivery Checking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part footer_3">
                        <h4> our Gallery</h4>
                        <div class="footer_img">
                            <div class="single_footer_img">
                                <img src="{{ asset('site/img/footer_img/footer_img_1.png') }}" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('site/img/footer_img/footer_img_2.png') }}" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('site/img/footer_img/footer_img_3.png') }}" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('site/img/footer_img/footer_img_4.png') }}" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('site/img/footer_img/footer_img_5.png') }}" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('site/img/footer_img/footer_img_6.png') }}" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('site/img/footer_img/footer_img_7.png') }}" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="{{ asset('site/img/footer_img/footer_img_8.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days
                            open
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part" required>
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '" required="" type="email">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm"><i
                                        class="far fa-paper-plane"></i></button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->

    <script src="{{ asset('site/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('site/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('site/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('site/js/swiper.min.js') }}"></script>
    <script src="{{ asset('site/js/wow.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.smooth-scroll.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('site/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.nice-select.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('site/js/slick.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('site/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('site/js/countdown.jquery.min.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('site/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.form.js') }}"></script>
    <script src="{{ asset('site/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('site/js/mail-script.js') }}"></script>
    <script src="{{ asset('site/js/contact.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('site/js/custom.js') }}"></script>
</body>

</html>