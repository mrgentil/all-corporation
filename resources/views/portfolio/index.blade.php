@extends('layouts.main')

@section('title') @parent | Portfolio  @endsection

@section('keywords') @parent, Portfolio @endsection

@section('description') Portfolio @endsection

@section('content')
    <div class="page-title parallax parallax1 position-relative clearfix">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="breadcrumbs position-relative">
                <div class="breadcrumbs-wrap">
                    <h1 class="title">Portfolio</h1>
                    <ul class="breadcrumbs-inner">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li><a href="#">Portfolio</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- page-title -->
    <section class="section border-0 pb-0 pb-lg-5 m-0">
        <div class="container my-lg-4">
            {{--<div class="row mb-4 pb-2">
                <div class="col">
                    <p class="custom-font-secondary text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Get reliable & affordable cleaning services for your facility with a 100% satisfaction guaranteed! </p>
                    <p class="pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum ultricies nunc, eu interdum enim convallis pretium. Quisque eu neque augue. Aliquam egestas nunc at efficitur faucibus. Praesent mauris eros, tincidunt id enim sodales, rhoncus malesuada ligula. </p>
                    <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Vivamus quis purus nec sapien pellentesque imperdiet. Nullam porttitor augue mi, sit amet luctus est tincidunt sed. Donec tempus bibendum ex, nec vehicula elit. </p>
                </div>
            </div>--}}
            <div class="row row-gutter-sm">
                <div class="col-md-6 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    <a href="" class="text-decoration-none">
                        <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons thumb-info-hide-wrapper-bg">
                            <div class="thumb-info-wrapper overlay overlay-color-secondary">
                                <img src="{{asset('img/demos/cleaning-services/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                                {{--<div class="thumb-info-action text-center flex-column">
                                    <h4 class="text-color-light font-weight-bold text-6 mb-1">Porto Building</h4>
                                    <span class="d-block text-color-light font-weight-light">Post Construction</span>
                                </div>--}}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                    <a href="" class="text-decoration-none">
                        <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons thumb-info-hide-wrapper-bg">
                            <div class="thumb-info-wrapper overlay overlay-color-secondary">
                                <img src="{{asset('img/demos/cleaning-services/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
                                {{--<div class="thumb-info-action text-center flex-column">
                                    <h4 class="text-color-light font-weight-bold text-6 mb-1">Porto Office</h4>
                                    <span class="d-block text-color-light font-weight-light">Office Cleaning</span>
                                </div>--}}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                    <a href="" class="text-decoration-none">
                        <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons thumb-info-hide-wrapper-bg">
                            <div class="thumb-info-wrapper overlay overlay-color-secondary">
                                <img src="{{asset('img/demos/cleaning-services/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
                                {{--<div class="thumb-info-action text-center flex-column">
                                    <h4 class="text-color-light font-weight-bold text-6 mb-1">Porto Enterprise</h4>
                                    <span class="d-block text-color-light font-weight-light">Building Services</span>
                                </div>--}}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">
                    <a href="" class="text-decoration-none">
                        <div class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons thumb-info-hide-wrapper-bg">
                            <div class="thumb-info-wrapper overlay overlay-color-secondary">
                                <img src="{{asset('img/demos/cleaning-services/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
                                {{--<div class="thumb-info-action text-center flex-column">
                                    <h4 class="text-color-light font-weight-bold text-6 mb-1">Porto Home</h4>
                                    <span class="d-block text-color-light font-weight-light">Cleaning Services</span>
                                </div>--}}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@stop
