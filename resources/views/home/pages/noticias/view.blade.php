@extends('home.layout.app')
@section('title', $data->title)

<meta property="og:audio" content="{{ asset('upload/noticias/') . $data->img }}" />
<meta property="og:description" content="{{ asset('upload/noticias/') . $data->desc }}" />
<meta property="og:determiner" content="the" />
<meta property="og:locale" content="en_GB" />
<meta property="og:locale:alternate" content="fr_FR" />
<meta property="og:locale:alternate" content="es_ES" />
<meta property="og:site_name" content="IMDb" />
<meta property="og:video" content="{{ asset('upload/noticias/') . $data->img }}" />
<meta property="og:site_name" content="Destaque notícias">
<meta property="og:title" content="{{ $data->title }}">
<meta property="og:description" content="{{ $data->desc }}">
<meta property="og:image" itemprop="image" content="{{ asset('upload/noticias/' . $data->img) }}">
<meta property="og:type" content="website">


@section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="row" style="transform: none;">
                <div class="col-lg-8">

                    <!-- single-post -->
                    <div class="single-post">
                        <h1>{{ $data->title }}</h1>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i><a href="single-post.html#">Renata da Silva</a></li>
                            {{-- <li><a href="single-post.html#"><i class="lnr lnr-book"></i><span>20 comments</span></a></li> --}}
                            <li><i class="lnr lnr-eye"></i>872 Views</li>
                        </ul>
                        <div class="share-post-box">
                            <ul class="share-box">
                                <li>
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i><span>
                                            Facebook</span></a>
                                </li>
                                <li>
                                    <a class="twitter"
                                        href="https://api.whatsapp.com/send?text=www.destaquenoticias.com/view/{{ $data->slug }}"><i
                                            class="fa fa-whatsapp" aria-hidden="true">
                                        </i>
                                        <span>Compartilhar whatsapp</span>
                                    </a>
                                </li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="rss" href="single-post.html#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <img src="{{ asset('upload/noticias/' . $data->img) }}" alt=""
                            style="width: 100%; height: 450px;;">
                        <div class="text-boxes">
                            {!! $data->content !!}
                        </div>
                    </div>
                    <!-- End single-post -->

                    <!-- Advertisement -->
                    <div class="advertisement">
                        <a href="single-post.html#">
                            <img src="{{ asset('home/upload/addsense/620x80grey.jpg') }}" alt="">
                        </a>
                    </div>
                    <!-- End Advertisement -->

                </div>

                @include('home.layout.sidebar')
            </div>

            <!-- End Advertisement -->

            <!-- more from news box -->
            <div class="more-from-news">
                <h1>APOIO</h1>
                <div class="row">
                    @foreach ($publicidade as $item)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="news-post thumb-post">
                                <div class="post-image">
                                    <a href="#">
                                        <img src="{{ asset('upload/publicidade/' . $item->img) }}" alt=""
                                            style="width: 100%; height: 100px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- end more from news box -->
        </div>
    </section>
@endsection
