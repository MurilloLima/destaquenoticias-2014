@extends('home.layout.app')
@section('title', $slug->name)


@section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="row" style="transform: none;">
                <div class="col-lg-8">

                    <!-- Posts-block -->
                    <div class="posts-block">
                        <div class="title-section">
                            <h1><span>{{ $slug->name }} ({{ $totalregistros }})</span></h1>
                        </div>

                        <ul class="author-list">

                            @foreach ($data as $item)
                                <li>
                                    <div class="autor-box">

                                        <img src="{{ asset('upload/noticias/' . $item->img) }}" alt=""
                                            style="width: 100px; height: 100px;">

                                        <div class="autor-content">

                                            <div class="autor-title">
                                                <h1>
                                                    <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </h1>
                                                <ul class="autor-social">
                                                    <li><a href="author-list.html#" class="facebook"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                    <li><a href="author-list.html#" class="google"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="author-list.html#" class="twitter"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                    <li><a href="author-list.html#" class="youtube"><i
                                                                class="fa fa-youtube"></i></a></li>
                                                    <li><a href="author-list.html#" class="instagram"><i
                                                                class="fa fa-instagram"></i></a></li>
                                                    <li><a href="author-list.html#" class="linkedin"><i
                                                                class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="author-list.html#" class="dribble"><i
                                                                class="fa fa-dribbble"></i></a></li>
                                                </ul>
                                            </div>

                                            <p>
                                                {{ $item->desc }}
                                            </p>

                                        </div>

                                    </div>

                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- End Posts-block -->

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
