@extends('layouts.main')

@section('title') @parent | Le Service : {{ $service->name }}  @endsection

@section('keywords') @parent, Le Service : {{ $service->name }} @endsection

@section('description')  {{ $service->name }} @endsection

@section('content')
    <div class="page-title parallax parallax1 position-relative clearfix">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="breadcrumbs position-relative">
                <div class="breadcrumbs-wrap">
                    <h1 class="title">{{ $service->name }}</h1>
                    <ul class="breadcrumbs-inner">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li><a href="#">Nos Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- page-title -->
    <div class="flat-it-services-banking flat-it-services-style5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="image-about"><img src="{{$service->imageWithHost}}" alt="{{$service->name}}"></div>

                </div>
                <div class="col-lg-5 col-12">
                    <div class="flat-spacer" data-desktop="0" data-sdesktop="0" data-mobi="50" data-smobi="50"></div>
                    <div class="text-content">
                        <div class="it-services-banking">
                            <h3 class="title title-big">{{$service->name}}</h3>
                            <p>
                                {!! $service->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- flat-it-services-banking -->
@stop
