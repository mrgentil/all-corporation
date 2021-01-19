@extends('layouts.main')

@section('title') @parent | A propos de nous  @endsection

@section('keywords') @parent, A propos de nous @endsection

@section('description') A propos de nous @endsection

@section('content')
    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top" data-overlay="0.7" data-bg-image="assets/images/bg/breadcrumb-bg.jpg">
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{url('/')}}">Accueil</a></li>
                    <li class="current">A propos de nous</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-top about-section-padding-bottom-200">
        <div class="container">

            <!-- About Wrapper Start -->
            <div class="row">

                <!-- About Start -->
                <div class="col-xl-6 col-lg-6 col-12" data-aos="fade-up">
                    <!-- About Content Area Start -->
                    <div class="about-content-area mt-0 mb-md-10 mb-10">
                        <!-- Section Title Two Start -->
                        <div class="section-title-two">
                            <span class="sub-title">Conception de sites web et marketing numérique</span>
                            <h3 class="title">Nous pensons stratégie, design UX et développement web</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <div class="row row-cols-sm-2 row-cols-auto mb-n6">
                            <!-- Single About Funfuct Start -->
                            <div class="col mb-6" data-aos="fade-up">
                                <div class="about-funfact">
                                    <div class="number"><span class="counter">110</span>+</div>
                                    <h6 class="text">Des clients satisfaits</h6>
                                    <p>Nous aidons nos clients à accroître leurs profits en augmentant leur visibilité en ligne.</p>
                                </div>
                            </div>
                            <!-- Single About Funfuct Start -->
                            <!-- Single About Funfuct Start -->
                            <div class="col mb-6" data-aos="fade-up">
                                <div class="about-funfact">
                                    <div class="number"><span class="counter">130</span>+</div>
                                    <h6 class="text">Projets achevés</h6>
                                    <p>Nous aidons nos clients à accroître leurs profits en augmentant leur visibilité en ligne.</p>
                                </div>
                            </div>
                            <!-- Single About Funfuct Start -->
                        </div>
                    </div>
                    <!-- About Content Area Start -->
                </div>
                <!-- About Start -->

                <!-- About Image Area Start -->
                <div class="col-xl-6 col-lg-6 col-12" data-aos="fade-up">
                    <div class="about-image-area about-shape-animation right-0 mr-0">
                        <div class="about-image js-tilt">
                            <img src="{{asset('assets/images/about/about-1.jpg')}}" alt="">
                        </div>
                        <div class="about-image js-tilt">
                            <img src="{{asset('assets/images/about/about-2.jpg')}}" alt="">
                        </div>
                        <!-- Animation Shape Start -->
                        <div class="shape shape-1 scene">
                            <span data-depth="1"><img src="{{asset('assets/images/shape-animation/video-shape-1.png')}}" alt=""></span>
                        </div>
                        <!-- Animation Shape End -->
                    </div>
                </div>
                <!-- About Image Area Start -->

            </div>
            <!-- About Wrapper End -->

        </div>
    </div>
    <!-- About Section End -->

    <!-- Video Section Start -->
    <div class="video-section section section-padding" data-overlay="0.7" data-bg-image="assets/images/bg/video-bg.jpg">

        <div class="container text-center">

            <!-- Section Title Start -->
            <div class="section-title color-light text-center" data-aos="fade-up">
                <h2 class="title">Une agence de création à service complet depuis 2017</h2>
            </div>
            <!-- Section Title End -->
            <a href="https://www.youtube.com/watch?v=eS9Qm4AOOBY" class="play-btn icon video-popup"><i class="fas fa-play"></i></i></a>

        </div>

        <!-- Animation Shape Start -->
        <div class="shape shape-1 scene">
                <span data-depth="1">
                    <img src="{{asset('assets/images/shape-animation/newsletter-shape.png')}}" alt="">
                </span>
        </div>
        <!-- Animation Shape End -->

    </div>
    <!-- Video Section End -->

    <!-- About Section Start -->
    <div class="section section-padding-top section-padding-bottom-180">
        <div class="container">

            <!-- About Wrapper Start -->
            <div class="row">

                <!-- About Image Area Start -->
                <div class="col-xl-7 col-lg-6 col-12" data-aos="fade-up">
                    <div class="about-image-area">
                        <div class="about-image js-tilt">
                            <img src="assets/images/about/about-3.jpg" alt="">
                        </div>
                        <div class="about-image js-tilt">
                            <img src="assets/images/about/about-4.jpg" alt="">
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
                            <span class="sub-title">Nos solutions commencent par une recherche sur les marques</span>
                            <h3 class="title">Nous nous engageons à vous donner le meilleure sans compromis !</h3>
                        </div>
                        <!-- Section Title Two End -->

                        <p>En travaillant avec nous, vous aurez accès à une agence de transformation numérique et de développement digitale vous proposant des solutions à la
                            pointe de la technologie et adaptées à votre entreprise !.</p>

                    </div>
                    <!-- About Content Area Start -->
                </div>
                <!-- About Start -->

            </div>
            <!-- About Wrapper End -->

        </div>
    </div>
    <!-- About Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-section section section-padding-t90 section-padding-bottom" data-bg-color="#f8faff">
        <div class="container-fluid pl-xl-16 pl-lg-3 pl-md-3 pl-sm-3 pl-3 pr-xl-16 pr-lg-3 pr-md-3 pr-sm-3 pr-3">
            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title fz-32">Ce que nos clients disent de nos services</h2>
            </div>
            <!-- Section Title End -->

            <!--Testimonial Slider Start -->
            <div class="testimonial-slider swiper-container" data-aos="fade-up">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <!-- Static Testimonial Start -->
                        <div class="static-testimonial mb-6">
                            <div class="testimonial-image">
                                <img src="assets/images/testimonial/90/author-1.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>We are completely satisfied with the quality of service that we get. Workers were respectful, efficient, accommodating, cleaned up thoroughly.</p>
                            </div>
                            <div class="author-info">
                                <div class="cite">
                                    <h6 class="name">Thomas Smith</h6>
                                    <span class="position">CEO at Flow</span>
                                </div>
                            </div>
                        </div>
                        <!-- Static Testimonial End -->
                    </div>

                    <div class="swiper-slide">
                        <!-- Static Testimonial Start -->
                        <div class="static-testimonial mb-6">
                            <div class="testimonial-image">
                                <img src="assets/images/testimonial/90/author-2.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>We are completely satisfied with the quality of service that we get. Workers were respectful, efficient, accommodating, cleaned up thoroughly. </p>
                            </div>
                            <div class="author-info">
                                <div class="cite">
                                    <h6 class="name">Eloise Smith</h6>
                                    <span class="position">CEO at Flow</span>
                                </div>
                            </div>
                        </div>
                        <!-- Static Testimonial End -->
                    </div>

                    <div class="swiper-slide">
                        <!-- Static Testimonial Start -->
                        <div class="static-testimonial mb-6">
                            <div class="testimonial-image">
                                <img src="assets/images/testimonial/90/author-3.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>We are completely satisfied with the quality of service that we get. Workers were respectful, efficient, accommodating, cleaned up thoroughly.</p>
                            </div>
                            <div class="author-info">
                                <div class="cite">
                                    <h6 class="name">Thomas Smith</h6>
                                    <span class="position">CEO at Flow</span>
                                </div>
                            </div>
                        </div>
                        <!-- Static Testimonial End -->
                    </div>

                    <div class="swiper-slide">
                        <!-- Static Testimonial Start -->
                        <div class="static-testimonial mb-6">
                            <div class="testimonial-image">
                                <img src="assets/images/testimonial/90/author-3.png" alt="">
                            </div>
                            <div class="testimonial-content">
                                <p>I love their flexibility. Even when my request is too complicated to handle. they could still suggest something useful for me. </p>
                            </div>
                            <div class="author-info">
                                <div class="cite">
                                    <h6 class="name">Florence Themes</h6>
                                    <span class="position">/ Multimedia Admin</span>
                                </div>
                            </div>
                        </div>
                        <!-- Static Testimonial End -->
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!--Testimonial Slider End -->
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- CTA Section Start -->
    <div class="cta-section section section-padding-250">
        <div class="container text-center icon-up-down-animation">
            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2 class="title fz-34">Parlons de votre projet et voyons comment nous pouvons travailler ensemble</h2>
                <p class="sub-title">Notre équipe de concepteurs, de développeurs et de créatifs sont des perfectionnistes qui aiment ce qu'ils font et aiment leur lieu de travail</p>
            </div>
            <!-- Section Title End -->
            <a class="btn btn-primary btn-hover-secondary" href="{{route('contact.index')}}">Nous contacter</a>

            <!-- Icon Animation Start -->
            <div class="shape shape-1">
                    <span>
                        <img src="{{asset('assets/images/icon-animation/icon-1.png')}}" alt="">
                    </span>
            </div>
            <div class="shape shape-2">
                    <span>
                        <img src="{{asset('assets/images/icon-animation/icon-2.png')}}" alt="">
                    </span>
            </div>
            <div class="shape shape-3">
                    <span>
                        <img src="{{asset('assets/images/icon-animation/icon-3.png')}}" alt="">
                    </span>
            </div>
            <div class="shape shape-4">
                    <span>
                        <img src="{{asset('assets/images/icon-animation/icon-4.png')}}" alt="">
                    </span>
            </div>
            <div class="shape shape-5">
                    <span>
                        <img src="{{asset('assets/images/icon-animation/icon-5.png')}}" alt="">
                    </span>
            </div>
            <div class="shape shape-6">
                    <span>
                        <img src="{{asset('assets/images/icon-animation/icon-6.png')}}" alt="">
                    </span>
            </div>
            <div class="shape shape-7">
                    <span>
                        <img src="{{asset('assets/images/icon-animation/icon-7.png')}}" alt="">
                    </span>
            </div>
            <div class="shape shape-8">
                    <span>
                        <img src="{{asset('assets/images/icon-animation/icon-8.png')}}" alt="">
                    </span>
            </div>
            <div class="shape shape-9">
                    <span>
                        <img src="{{asset('assets/images/icon-animation/icon-9.png')}}" alt="">
                    </span>
            </div>
            <!-- Icon Animation End -->
        </div>
    </div>
    <!-- CTA Section End -->
@stop
