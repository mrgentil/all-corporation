@extends('layouts.main')

@section('title') @parent | Accueil @endsection

@section('keywords') @parent, Accueil  @endsection

@section('description') Accueil @endsection

@section('content')

    <!-- Slider/Intro Section Start -->
    <div class="intro-slider-wrap section">
        <div class="intro-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="intro-section section overlay" data-bg-image="assets/images/hero-image/hero-2.jpg">

                        <div class="container">
                            <div class="row row-cols-lg-1 row-cols-1">

                                <div class="col align-self-center">
                                    <div class="intro-content mt-xl-8 mt-lg-8 mt-md-8 mt-sm-8 mt-xs-8">
                                        <h2 class="title">Designing awesome brands & experiences </h2>
                                        <div class="desc">
                                            <p>We are an agency located in New York. We think strategy, craft design,
                                                develop digital and create motion. To forward your brand and business.</p>
                                        </div>
                                        <a href="#" class="btn btn-primary btn-hover-secondary">Get Started</a>
                                        <a href="#" class="btn btn-outline-white btn-hover-primary"> Learn More </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="intro-section section overlay" data-bg-image="assets/images/hero-image/hero-1.jpg">

                        <div class="container">
                            <div class="row row-cols-lg-1 row-cols-1">

                                <!-- Intro One Content Start -->
                                <div class="col align-self-center">
                                    <div class="intro-content mt-8">
                                        <h2 class="title">Designing awesome brands & experiences </h2>
                                        <div class="desc">
                                            <p>We are an agency located in New York. We think strategy, craft design,
                                                develop digital and create motion. To forward your brand and business.</p>
                                        </div>
                                        <a href="course-details-free.html" class="btn btn-primary btn-hover-secondary">Get Started</a>
                                        <a href="#" class="btn btn-outline-white btn-hover-primary"> Learn More </a>
                                    </div>
                                </div>
                                <!-- Intro One Content End -->

                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="intro-section section overlay" data-bg-image="assets/images/hero-image/hero-3.jpg">

                        <div class="container">
                            <div class="row row-cols-lg-1 row-cols-1">

                                <!-- Intro One Content Start -->
                                <div class="col align-self-center max-mb-30">
                                    <div class="intro-content mt-8">
                                        <h2 class="title">Designing awesome brands & experiences </h2>
                                        <div class="desc">
                                            <p>We are an agency located in New York. We think strategy, craft design,
                                                develop digital and create motion. To forward your brand and business.</p>
                                        </div>
                                        <a href="course-details-free.html" class="btn btn-primary btn-hover-secondary">Get Started</a>
                                        <a href="#" class="btn btn-outline-white btn-hover-primary"> Learn More </a>
                                    </div>
                                </div>
                                <!-- Intro One Content End -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="home-slider-prev swiper-button-prev main-slider-nav"><i class="fal fa-angle-left"></i></div>
            <div class="home-slider-next swiper-button-next main-slider-nav"><i class="fal fa-angle-right"></i></div>
        </div>
    </div>
    <!-- Slider/Intro Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-t90 section-padding-bottom-200">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title">We are a full-service creative agency</h2>
                <p class="sub-title">Our team of designers, developers and creatives are perfectionists
                    who love what they do and love</p>
            </div>
            <!-- Section Title End -->

            <!-- About Wrapper Start -->
            <div class="row">

                <!-- About Image Area Start -->
                <div class="col-xl-7 col-lg-6 col-12" data-aos="fade-up">
                    <div class="about-image-area">
                        <div class="about-image js-tilt">
                            <img src="assets/images/about/home-one-about/home_agency_about_1.jpg" alt="">
                        </div>
                        <div class="about-image js-tilt">
                            <img src="assets/images/about/home-one-about/home_agency_about_2.jpg" alt="">
                        </div>
                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                            <span data-depth="1"><img src="assets/images/shape-animation/about-shape-1.png" alt=""></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
                <!-- About Image Area Start -->

                <!-- About Start -->
                <div class="col-xl-5 col-lg-6 col-12" data-aos="fade-up">
                    <!-- About Content Area Start -->
                    <div class="about-content-area">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two">
                            <span class="sub-title">Every day brings new challenges</span>
                            <h3 class="title">Creative agency focused on vision, product and people</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <p>We’re boldly individual, always original and refreshingly easy-going. Our vision, passion and ideas are matched
                            with focus, expertise and flair.</p>

                        <a class="btn btn-primary btn-hover-secondary mt-xl-8 mt-lg-8 mt-md-6 mt-4" href="#">About Us</a>
                    </div>
                    <!-- About Content Area Start -->
                </div>
                <!-- About Start -->

            </div>
            <!-- About Wrapper End -->

        </div>
    </div>
    <!-- About Section End -->

    <!-- Service Section Start -->
    <div class="section section-padding-t90-b100" data-bg-color="#f8faff">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center mb-12" data-aos="fade-up">
                <h2 class="title">We create a unique action plan for brands</h2>
                <p class="sub-title">Get your company heading in the right direction with our digital
                    marketing strategist</p>
            </div>
            <!-- Section Title End -->

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">

                <!-- Icon Box Start -->
                <div class="col mb-6" data-aos="fade-up">

                    <div class="icon-box text-center" data-vivus-hover>
                        <div class="icon"><img class="svgInject" src="assets/images/svg/linea/linea-basic-target.svg" alt=""></div>
                        <div class="content">
                            <h3 class="title">Branding</h3>
                            <div class="desc">
                                <p>First impressions count! Make sure your brand works for you. We
                                    offer digital marketing.</p>
                            </div>
                            <a href="#" class="link">Learn More</a>
                        </div>
                    </div>

                </div>
                <!-- Icon Box End -->

                <!-- Icon Box Start -->
                <div class="col mb-6" data-aos="fade-up">

                    <div class="icon-box text-center" data-vivus-hover>
                        <div class="icon"><img class="svgInject" src="assets/images/svg/linea/linea-basic-picture-multiple.svg" alt=""></div>
                        <div class="content">
                            <h3 class="title">UX Design</h3>
                            <div class="desc">
                                <p>First impressions count! Make sure your brand works for you. We
                                    offer digital marketing.</p>
                            </div>
                            <a href="#" class="link">Learn More</a>
                        </div>
                    </div>

                </div>
                <!-- Icon Box End -->

                <!-- Icon Box Start -->
                <div class="col mb-6" data-aos="fade-up">

                    <div class="icon-box text-center" data-vivus-hover>
                        <div class="icon"><img class="svgInject" src="assets/images/svg/linea/linea-basic-picture.svg" alt=""></div>
                        <div class="content">
                            <h3 class="title">Strategy</h3>
                            <div class="desc">
                                <p>First impressions count! Make sure your brand works for you. We
                                    offer digital marketing.</p>
                            </div>
                            <a href="#" class="link">Learn More</a>
                        </div>
                    </div>

                </div>
                <!-- Icon Box End -->

            </div>

        </div>
    </div>
    <!-- Service Section End -->

    <!-- Success Section Start -->
    <div class="section section-padding-top success-section-padding-bottom-180">
        <div class="container">
            <div class="row">

                <!-- Success Image Start -->
                <div class="col-lg-6">
                    <div class="about-image-area right-0 skill-image-area">
                        <div class="about-image js-tilt">
                            <img src="assets/images/skill/skill-1.jpg" alt="">
                        </div>
                        <div class="about-image js-tilt">
                            <img src="assets/images/skill/skill-2.jpg" alt="">
                        </div>
                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                            <span data-depth="1"><img src="assets/images/shape-animation/video-shape-1.png" alt=""></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
                <!-- Success Image End -->

                <!-- Success Content Start -->
                <div class="offset-lg-1 col-lg-5" data-aos="fade-up">
                    <div class="success-content  mt-lg-0 mt-md-50 mt-sm-50 mt-40">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two mb-lg-8 mb-6">
                            <span class="sub-title">Your success is our success</span>
                            <h3 class="title">Web design, marketing & SEO solutions that get results</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <div class="progress-bar--one">
                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading ">UX Design</h6>
                                <div class="progress">
                                    <div class="progress-bar gradient-1 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 81%; visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">81%</span></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts ">
                                <h6 class="heading ">Marketing</h6>
                                <div class="progress">
                                    <div class="progress-bar gradient-2 wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay=".5s" role="progressbar" style="width: 72%; visibility: visible; animation-duration: 0.7s; animation-delay: 0.5s; animation-name: fadeInLeft;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">72%</span></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts ">
                                <h6 class="heading ">Web Design</h6>
                                <div class="progress">
                                    <div class="progress-bar gradient-3 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".8s" role="progressbar" style="width: 80%; visibility: visible; animation-duration: 0.8s; animation-delay: 0.8s; animation-name: fadeInLeft;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">80%</span></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts ">
                                <h6 class="heading ">Development</h6>
                                <div class="progress">
                                    <div class="progress-bar gradient-4 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay=".9s" role="progressbar" style="width: 57%; visibility: visible; animation-duration: 0.9s; animation-delay: 0.9s; animation-name: fadeInLeft;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span class="percent-label">57%</span></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                        </div>
                    </div>

                </div>
                <!-- Success Content End -->
            </div>
        </div>
    </div>
    <!-- Success Section End -->

    <!-- Portfolio Section Start -->
    <div class="section section-padding ag-masonary-wrapper" data-bg-color="#f8faff">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Two Start -->
                    <div class="section-title-two mb-lg-12 mb-md-6">
                        <span class="sub-title">Portfolios</span>
                        <h3 class="title">Selected works.</h3>
                    </div>
                    <!-- Section Title Two End -->
                </div>
                <div class="col-lg-7">
                    <!-- Portfolio Menu Start -->
                    <div class="messonry-button text-lg-right text-left mb-lg-13 mb-md-13 mb-6">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                        <button data-filter=".cat-1"><span class="filter-text">App</span></button>
                        <button data-filter=".cat-2"><span class="filter-text">Development</span></button>
                        <button data-filter=".cat-3"><span class="filter-text">Marketing</span> </button>
                        <button data-filter=".cat-4"><span class="filter-text">Software</span></button>
                        <button data-filter=".cat-5"><span class="filter-text">UX Design</span></button>
                    </div>
                    <!-- Portfolio Menu End -->
                </div>
            </div>



            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-0 mesonry-list">
                <div class="resizer col"></div>
                <!-- Single Portfolio Start -->
                <div class="col cat-1 cat-3">
                    <div class="single-portfolio">
                        <div class="thumbnail">
                            <img class="img-fluid" src="assets/images/portfolio/portfolio-1.jpg" alt="Portfolio-01">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="work-details.html">Project Name #1 <img src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio End -->
                <!-- Single Portfolio Start -->
                <div class="col cat-2 cat-5">
                    <div class="single-portfolio">
                        <div class="thumbnail">
                            <img class="img-fluid" src="assets/images/portfolio/portfolio-2.jpg" alt="Portfolio-01">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="work-details.html">Project Name #1 <img src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio End -->
                <!-- Single Portfolio Start -->
                <div class="col cat-3 cat-2">
                    <div class="single-portfolio">
                        <div class="thumbnail">
                            <img class="img-fluid" src="assets/images/portfolio/portfolio-3.jpg" alt="Portfolio-01">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="work-details.html">Project Name #1 <img src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio End -->
                <!-- Single Portfolio Start -->
                <div class="col cat-4 cat-3">
                    <div class="single-portfolio">
                        <div class="thumbnail">
                            <img class="img-fluid" src="assets/images/portfolio/portfolio-4.jpg" alt="Portfolio-01">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="work-details.html">Project Name #1 <img src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio End -->
                <!-- Single Portfolio Start -->
                <div class="col cat-5">
                    <div class="single-portfolio">
                        <div class="thumbnail">
                            <img class="img-fluid" src="assets/images/portfolio/portfolio-5.jpg" alt="Portfolio-01">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="work-details.html">Project Name #1 <img src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio End -->
                <!-- Single Portfolio Start -->
                <div class="col cat-2">
                    <div class="single-portfolio">
                        <div class="thumbnail">
                            <img class="img-fluid" src="assets/images/portfolio/portfolio-6.jpg" alt="Portfolio-01">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="work-details.html">Project Name #1 <img src="assets/images/icons/arrow-up-right.svg" alt=""></a></h5>
                        </div>
                    </div>
                </div>
                <!-- Single Portfolio End -->
            </div>
        </div>
    </div>
    <!-- Portfolio Section End -->

    <!-- Blog Section Start -->
    <div class="section section-padding-t90-b100">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title">We are a full-service creative agency</h2>
                <p class="sub-title">Our team of designers, developers and creatives are perfectionists
                    who love what they do and love</p>
            </div>
            <!-- Section Title End -->

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                <div class="col">
                    <!-- Single Blog Start -->
                    <div class="blog">
                        <div class="thumbnail">
                            <a href="blog-details.html" class="image"><img src="assets/images/blog/370/blog-1.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="info">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i>Apr 06, 2020</li>
                                <li><i class="far fa-eye"></i>70 views</li>
                            </ul>
                            <h3 class="title"><a href="blog-details.html">How your sales can work together in account-based marketing</a></h3>
                            <a href="blog-details.html" class="link "> <mark>Read More</mark> </a>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                </div>
                <div class="col">
                    <!-- Single Blog Start -->
                    <div class="blog">
                        <div class="thumbnail">
                            <a href="blog-details.html" class="image"><img src="assets/images/blog/370/blog-2.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="info">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i>Apr 06, 2020</li>
                                <li><i class="far fa-eye"></i>70 views</li>
                            </ul>
                            <h3 class="title"><a href="blog-details.html">The six things marketers need to understand about DTC marketing</a></h3>
                            <a href="blog-details.html" class="link "> <mark>Read More</mark> </a>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                </div>
                <div class="col">
                    <!-- Single Blog Start -->
                    <div class="blog">
                        <div class="thumbnail">
                            <a href="blog-details.html" class="image"><img src="assets/images/blog/370/blog-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="info">
                            <ul class="meta">
                                <li><i class="far fa-calendar"></i>Apr 06, 2020</li>
                                <li><i class="far fa-eye"></i>70 views</li>
                            </ul>
                            <h3 class="title"><a href="blog-details.html">Eleven top tips for developing agile marketing</a></h3>
                            <a href="blog-details.html" class="link "> <mark>Read More</mark> </a>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End -->

    <!-- Newsletter Section Start -->
    <div class="section section-padding-t110-b120 newsletter-section" data-overlay="0.7" data-bg-image="assets/images/bg/newsletter.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Newsletter Content Start -->
                    <div class="newsletter-content">
                        <!-- Section Title Start -->
                        <div class="section-title color-light text-center" data-aos="fade-up">
                            <h2 class="title">Let’s find out how to work together</h2>
                            <p class="sub-title fz-18">Ready to start your project? The contact information collected through
                                this form will only be used to send a response to your inquiry.</p>
                        </div>
                        <!-- Section Title End -->
                        <!-- Newsletter Form Start -->
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Ente your email" name="mail">
                                <button class="btn btn-primary btn-hover-secondary">Subscribe</button>
                            </form>
                        </div>
                        <!-- Newsletter Form End -->
                    </div>
                    <!-- Newsletter Content End -->
                </div>
            </div>
        </div>

        <!-- Animation Shape Start -->
        <div class="shape shape-1 scene">
                <span data-depth="1">
                    <img src="assets/images/shape-animation/newsletter-shape.png" alt="">
                </span>
        </div>
        <!-- Animation Shape End -->
    </div>
    <!-- Newsletter Section End -->

    <!-- Contact Information Section Start -->
    <div class="section section-padding-t90-b100">
        <div class="container shape-animate">
            <!-- Section Title Start -->
            <div class="section-title text-center mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
                <h2 class="title">We are a full-service creative agency</h2>
                <p class="sub-title">Our team of designers, developers and creatives are perfectionists
                    who love what they do and love where they work</p>
            </div>
            <!-- Section Title End -->

            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
                <div class="col mb-6" data-aos="fade-up">
                    <!-- Contact Information Start -->
                    <div class="contact-info" data-vivus-hover>
                        <div class="icon">
                            <img class="svgInject" src="assets/images/svg/linea/linea-basic-map.svg" alt="">
                        </div>
                        <div class="info">
                            <h4 class="title">Our Locations</h4>
                            <span class="info-text"> 110 W 34th St, NYC. <br>
                                    67 Madison Avenue.</span>
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>
                <div class="col mb-6" data-aos="fade-up">
                    <!-- Contact Information Start -->
                    <div class="contact-info" data-vivus-hover>
                        <div class="icon">
                            <img class="svgInject" src="assets/images/svg/linea/linea-basic-message-txt.svg" alt="">
                        </div>
                        <div class="info">
                            <h4 class="title">Give Us A Call</h4>
                            <span class="info-text"> (+1) 212-946-2701 <br>
                                    (+1) 212-946-2702</span>
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>
                <div class="col mb-6" data-aos="fade-up">
                    <!-- Contact Information Start -->
                    <div class="contact-info" data-vivus-hover>
                        <div class="icon">
                            <img class="svgInject" src="assets/images/svg/linea/linea-basic-mail-open-text.svg" alt="">
                        </div>
                        <div class="info">
                            <h4 class="title"> Help Desk</h4>
                            <span class="info-text">
                                    <a href="#">hello@hasthemes.com</a>
                                    <br>
                                    <a href="#">sales@hasthemes.com</a>
                                </span>
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>
            </div>

            <!-- Animation Shape Start -->
            <div class="shape shape-1 scene">
                <span data-depth="4"><img src="assets/images/shape-animation/video-shape-1.png" alt="shape"></span>
            </div>
            <!-- Animation Shape End -->

        </div>
    </div>
    <!-- Contact Information Section End -->
@stop
