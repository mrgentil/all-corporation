@extends('layouts.main')

@section('title') @parent | Contact  @endsection

@section('keywords') @parent, Contact @endsection

@section('description') Contact @endsection

@section('content')
    <div class="page-title parallax parallax1 position-relative clearfix">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="breadcrumbs position-relative">
                <div class="breadcrumbs-wrap">
                    <h1 class="title">Contact</h1>
                    <ul class="breadcrumbs-inner">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- page-title -->

    <div class="contact flat-row-half">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="get-in-touch get-in-touch-type1">
                        <div class="text-contact">N'hésitez pas à nous contacter pour toute information.</a></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form id="contactform" action="{{route('contact.store')}}" method="post" class="form-leave-comment form-submit">
                        @csrf
                        <div class="text-wrap d-md-flex clearfix">
                            <div class="w-left position-relative">
                                <input type="text" name="name" id="name" value="{{old('name')}}" class="name" placeholder="Nom*">
                                <span class="icon-user"></span>
                            </div>
                            <div class="w-right position-relative">
                                <input type="email" name="email" id="email" value="" class="email" placeholder="Email">
                                <span class="fa fa-envelope" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="message-wrap mg-b50">
                            <textarea name="content" id="comment-message" rows="8" placeholder="Message here" required="required">{{old('content')}}</textarea>
                        </div>
                        <div class="flat-send-message btn-linear hv-linear-gradient text-center">
                            <button  type="submit" class="submit font-style linear-color border-corner" >Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- contact -->
    <div class="flat-map-type1">
        <div class="container">
            <div class="flat-map"></div>
        </div>
    </div><!-- flat-map -->

@stop
