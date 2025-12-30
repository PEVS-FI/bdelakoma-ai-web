<!DOCTYPE html>
<html lang="sk">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Michal Drobný">
    <!-- Page Title -->
    <title>{{ __('global.title') }}</title>
    <!-- Icon fonts -->
    @vite('resources/css/themify-icons.css')
    @vite('resources/css/font-awesome.min.css')
    @vite('resources/css/flaticon.css')
    <!-- Bootstrap core CSS -->
    @vite('resources/css/bootstrap.min.css')
    <!-- Plugins for this template -->
    @vite('resources/css/animate.css')
    @vite('resources/css/owl.carousel.css')
    @vite('resources/css/owl.theme.css')
    @vite('resources/css/slick.css')
    @vite('resources/css/slick-theme.css')
    @vite('resources/css/odometer-theme-default.css')
    @vite('resources/css/owl.transitions.css')
    @vite('resources/css/jquery.fancybox.css')
    @vite('resources/css/magnific-popup.css')
    <!-- Custom styles for this template -->
    @vite('resources/css/style.css')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="home">
<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    <header id="header" class="site-header header-style-2">

        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">{{ __('global.toggle_navigation') }}</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li><a href="#">{{ __('global.menu.home') }}</a></li>

                        <li><a href="#">{{ __('global.menu.research') }}</a></li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0);">{{ __('global.menu.projects') }}</a>
                            <ul class="sub-menu">
                                @foreach($projects as $project)
                                    <li><a href="#">{{ $project->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">{{ __('global.menu.team') }}</a></li>
                        <li><a href="#">{{ __('global.menu.contact') }}</a></li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0);"><img style="width: 24px;" src="{{ asset('images/flags/' . locale() . '.png') }}" alt="@lang('global.languages.' . locale())" /></a>
                            <ul class="sub-menu">
                                    <li><a href="#"><img style="width: 24px; margin-right: 10px;" src="{{ asset('images/flags/sk.png') }}" alt="@lang('global.languages.sk')" />@lang('global.languages.sk')</a></li>
                                    <li><a href="#"><img style="width: 24px; margin-right: 10px;" src="{{ asset('images/flags/en.png') }}" alt="@lang('global.languages.en')" />@lang('global.languages.en')</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end of nav-collapse -->
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->
    <!-- start of hero -->
    <section class="wpo-hero-style-3">
        <div class="wpo-slide-wrap">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-7 col-md-6 slide-caption">
                        <h2 class="wow fadeInLeftSlow" data-wow-delay="0.1s">We are The Greatest Digital Agency</h2>
                        <span class="wow fadeInUp" data-wow-delay="0.8s">More than 10 years of creating digital solutions</span>
                        <div class="wow fadeInUp" data-wow-delay="1.0s">
                            <a href="#" class="theme-btn">More About</a>
                            <a href="#" class="theme-btn-s2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->
    <!-- about-feature-area start -->
    <div class="about-feature-area">
        <div class="container">
            <div class="about-features-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-feature-left">
                            <h2>We creat the best product what you are looking for.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-feature-right">
                            <p>My name is John Smith. I am a web designer and developer.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="#" class="theme-btn-s2">More About</a>
                        </div>
                    </div>
                </div>
                <div class="radius-ball"></div>
            </div>
        </div>
    </div>

    <!-- about-feature-area start -->

    <!-- sevice-area start -->
    <div class="wpo-service-area-3 section-padding">
        <div class="container">
            <div class="col-12">
                <div class="section-title-2 text-center">
                    <h2>Services</h2>
                </div>
            </div>
            <div class="wpo-service-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wpo-service-wrap">
                            <div class="wpo-services-icon-wrap">
                                <div class="wpo-service-icon">
                                    <i class="fi flaticon-idea"></i>
                                </div>
                            </div>
                            <div class="wpo-service-text">
                                <h2>Product <br> Design</h2>
                                <p>consectetur adipiscing elit, eiusmod tempor incididunt  labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wpo-service-wrap">
                            <div class="wpo-services-icon-wrap">
                                <div class="wpo-service-icon-2">
                                    <i class="fi flaticon-files-and-folders"></i>
                                </div>
                            </div>
                            <div class="wpo-service-text">
                                <h2>Web <br> Design</h2>
                                <p>consectetur adipiscing elit, eiusmod tempor incididunt  labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wpo-service-wrap">
                            <div class="wpo-services-icon-wrap">
                                <div class="wpo-service-icon-3">
                                    <i class="fi flaticon-artist"></i>
                                </div>
                            </div>
                            <div class="wpo-service-text">
                                <h2>Visual <br> Design</h2>
                                <p>consectetur adipiscing elit, eiusmod tempor incididunt  labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wpo-service-wrap">
                            <div class="wpo-services-icon-wrap">
                                <div class="wpo-service-icon-4">
                                    <i class="fi flaticon-man"></i>
                                </div>
                            </div>
                            <div class="wpo-service-text">
                                <h2>Business <br> Strategy</h2>
                                <p>consectetur adipiscing elit, eiusmod tempor incididunt  labore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sevice-area end -->

    <!-- protfolio area start -->

    <div class="wpo-protfolio-area-3 section-padding">
        <div class="container">
            <div class="col-12">
                <div class="section-title-2 text-center">
                    <h2>Portfolio</h2>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12 sortable-gallery">
                    <div class="gallery-filters gallery-filters-2">
                    </div>
                    <div class="gallery-container gallery-fancybox masonry-gallery row">
                        <div class="col-lg-6 col-md-6 col-sm-6 custom-grid IllustAtor 3d Marketing wow zoomIn" data-wow-duration="2000ms">
                            <div class="protfolio-l">
                                <div class="wpo-protfolio-single">
                                    <div class="wpo-protfolio-img">
                                        <img src="assets/images/protfolio/img-9.jpg" alt="">
                                    </div>
                                    <div class="wpo-protfolio-text">
                                        <h2>Minimalism</h2>
                                        <span>Illustration . Art Direction</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 custom-grid IllustAtor Marketing wow zoomIn" data-wow-duration="2000ms">
                            <div class="protfolio-l ">
                                <div class="wpo-protfolio-single">
                                    <div class="wpo-protfolio-img">
                                        <img src="assets/images/protfolio/img-11.jpg" alt="">
                                    </div>
                                    <div class="wpo-protfolio-text">
                                        <h2>Minimalism</h2>
                                        <span>Illustration . Art Direction</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 custom-grid BranDing IllustAtor 3d wow zoomIn" data-wow-duration="2000ms">
                            <div>
                                <div class="wpo-protfolio-single">
                                    <div class="wpo-protfolio-img">
                                        <img src="assets/images/protfolio/img-10.jpg" alt="">
                                    </div>
                                    <div class="wpo-protfolio-text">
                                        <h2>Minimalism</h2>
                                        <span>Illustration . Art Direction</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 custom-grid custom-grid BranDing 3d wow zoomIn" data-wow-duration="2000ms">
                            <div class="">
                                <div class="wpo-protfolio-single">
                                    <div class="wpo-protfolio-img">
                                        <img src="assets/images/protfolio/img-12.jpg" alt="">
                                    </div>
                                    <div class="wpo-protfolio-text">
                                        <h2>Minimalism</h2>
                                        <span>Illustration . Art Direction</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="protfolio-btn">
                        <a href="#" class="theme-btn-s2">Load More</a>
                    </div>
                </div>
            </div> <!-- end row -->
        </div>
    </div>
    <!-- protfolio area end -->
    <!-- wpo-testimonial-area start -->
    <div class="wpo-testimonial-area-3 section-padding">
        <div class="container">
            <div class="col-12">
                <div class="section-title-2 text-center">
                    <h2>Testimonial</h2>
                </div>
            </div>
            <div class="wpo-testimonial-main">
                <div class="testimonial-active owl-carousel">
                    <div class="wpo-testimonial-wrap">
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                                <div class="wpo-testimonial-item2">
                                    <div class="wpo-testimonial-thumb">
                                        <h4>John Harry</h4>
                                        <span>CEO of Moderntern Technology</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-testimonial-wrap">
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                                <div class="wpo-testimonial-item2">
                                    <div class="wpo-testimonial-thumb">
                                        <h4>John Harry</h4>
                                        <span>CEO of Moderntern Technology</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpo-testimonial-wrap">
                        <div class="wpo-testimonial-item">
                            <div class="wpo-testimonial-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                                <div class="wpo-testimonial-item2">
                                    <div class="wpo-testimonial-thumb">
                                        <h4>John Harry</h4>
                                        <span>CEO of Moderntern Technology</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-testimonial-area end -->
    <!-- start wpo-wpo-contact-form-map -->
    <section class="wpo-contact-area3 section-padding">
        <div class="wpo-wpo-contact-form-map">
            <div class="container">
                <div class="col-12">
                    <div class="section-title-2 text-center">
                        <h2>Let’s Talk</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="co-lg-10 col-lg-offset-1  col-12">
                        <div class="row">
                            <div class="col col-lg-6 col-md-6 col-12">
                                <div class="wpo-contact-form">
                                    <h2>Get In Touch</h2>
                                    <form method="post" class="contact-validation-active" id="wpo-contact-form">
                                        <div>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="First Name">
                                        </div>
                                        <div>
                                            <input type="text" class="form-control" name="name2" id="name2" placeholder="Last Name">
                                        </div>
                                        <div class="clearfix">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                        <div>
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        </div>
                                        <div>
                                            <textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
                                        </div>
                                        <div class="submit-area">
                                            <button type="submit" class="theme-btn submit-btn">Send Message</button>
                                            <div id="loader">
                                                <i class="ti-reload"></i>
                                            </div>
                                        </div>
                                        <div class="clearfix error-handling-messages">
                                            <div id="success">Thank you</div>
                                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col col-lg-6 col-md-6 col-12">
                                <div class="wpo-contact-info">
                                    <div class="info-item">
                                        <h2>25 North Street,Dubai</h2>
                                        <div class="info-wrap">
                                            <div class="info-icon">
                                                <i class="fi flaticon-worldwide"></i>
                                            </div>
                                            <div class="info-text">
                                                <span>Office Address</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <h2>info@edefytheme.com</h2>
                                        <div class="info-wrap">
                                            <div class="info-icon">
                                                <i class="fi flaticon-mail"></i>
                                            </div>
                                            <div class="info-text">
                                                <span>Official Mail</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-item">
                                        <h2>+91 256-987-239</h2>
                                        <div class="info-wrap">
                                            <div class="info-icon">
                                                <i class="fi flaticon-phone"></i>
                                            </div>
                                            <div class="info-text">
                                                <span>Official Phone</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>

    </section>
    <!-- end wpo-wpo-contact-form-map -->
    <!-- wpo-client-area start -->
    <div class="wpo-client-area2">
        <div class="container">
            <div class="wpo-client-item">
                <div class="Gift-carousel owl-carousel">
                    <img src="{{ asset('images/partners/pevs.png') }}" lazy alt="Partner">
                </div>
            </div>
        </div>
    </div>
    <!-- wpo-client-area end -->

    <div class="wpo-footer-area3">
        <div class="container">
            <div class="wpo-footer-top">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-12">
                        <div class="footer-logo">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                        <div class="wpo-footer-menu">
                            <ul>
                                <li><a href="#">@lang('global.menu.home')</a></li>
                                <li><a href="#">@lang('global.menu.research')</a></li>
                                <li><a href="#">@lang('global.menu.projects')</a></li>
                                <li><a href="#">@lang('global.menu.team')</a></li>
                                <li><a href="#">@lang('global.menu.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    </div>
                </div>
            </div>
        </div>
        <div class="wpo-footer-bottom">
            <span>© {{ date('Y') }} Michal Drobný. Všetky práva vyhradené.</span>
        </div>
    </div>

</div>
<!-- All JavaScript files
================================================== -->
<script src="{{ asset('assets/js/jquery.min.js')  }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')  }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js')  }}"></script>
<script src="{{ asset('assets/js/metisMenu.min.js')  }}"></script>
<!-- Plugins for this template -->
<script src="{{ asset('assets/js/jquery-plugin-collection.js')  }}"></script>
<!-- Custom script for this template -->
<script src="{{ asset('assets/js/script.js')  }}"></script>
</body>

</html>