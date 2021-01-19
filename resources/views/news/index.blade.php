@extends('layouts.main')

@section('title') @parent | News  @endsection

@section('keywords') @parent, News @endsection

@section('description') News @endsection

@section('content')
    <div class="page-title parallax parallax1 position-relative clearfix">
        <div class="section-overlay"></div>
        <div class="container">
            <div class="breadcrumbs position-relative">
                <div class="breadcrumbs-wrap">
                    <h1 class="title">News</h1>
                    <ul class="breadcrumbs-inner">
                        <li><a href="{{url('/')}}">Accueil</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- page-title -->
    <div class="blog-content no-column flat-row clearfix">
        <div class="container d-lg-flex">
            <div class="col-left">
                <div class="site-content">
                    @foreach($posts as $post)
                    <article class="main-post mg-blog">
                        <div class="featured-post">
                            <div class="entry-image">
                                <img src="{{$post->imageWithHost}}" alt="{{$post->title}}">
                            </div>
                        </div>
                        <div class="content-blog">
                            <ul class="post-meta d-sm-flex">
                                <li class="author"><a href="#">{{--By David Arham--}}</a></li>
                                <li class="date"><span>{{ $post->created_at_format }}</span></li>
                            </ul>
                            <h2 class="title"><a href="{{$post->slugLink}}">{{$post->title}}</a></h2>
                            <p>
                                {{str_limit($post->excerpt,50)}}
                            </p>
                            <div class="flat-read-more bg-linear-gradient">
                                <a href="{{$post->slugLink}}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </article><!-- main-post -->
                    @endforeach
                </div>
                {{--<div class="flat-pagination blog-pagination">
                    <ul>
                        <li><a href="#" class="page-numbers current">1</a></li>
                        <li><a href="#" class="page-numbers">2</a></li>
                        <li><a href="#" class="page-numbers">3</a></li>
                        <li><a href="#" class="page-numbers"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>--}}
            </div><!-- flat-pagination -->
            <div class="col-right">
                <div class="sidebar">
                    <div class="widget widget-search">
                        <form action="#" class="form-search btn-linear hv-linear-gradient">
                            <input type="text" class="search" placeholder="Search here">
                            <button class="btn-search linear-color"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>

                    <div class="widget widget-recent-posts widget-bg">
                        <h2 class="widget-title">recent posts</h2>
                        <ul class="recent-news">
                            @foreach($posts as $post)
                            <li>
                                <div class="thumb-image">
                                    <img src="{{$post->imageWithHost}}" alt="{{$post->title}}">
                                </div>
                                <div class="thumb-content clearfix">
                                    <h3 class="thumb-title"><a href="{{$post->slugLink}}">{{$post->title}}</a></h3>
                                    <p class="thumb-day">{{ $post->created_at_format }}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- blog-content -->
@stop
