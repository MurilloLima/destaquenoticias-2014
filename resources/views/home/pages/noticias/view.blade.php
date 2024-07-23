@extends('home.layout.app')
@section('title', 'view')
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
                                <li><a class="facebook" href="single-post.html#"><i class="fa fa-facebook"></i><span>Share
                                            on Facebook</span></a></li>
                                <li><a class="twitter" href="single-post.html#"><i class="fa fa-twitter"></i><span>Share on
                                            Twitter</span></a></li>
                                <li><a class="google" href="single-post.html#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="single-post.html#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="rss" href="single-post.html#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <img src="{{ asset('upload/noticias/' . $data->img) }}" alt="">
                        <div class="text-boxes">
                            {!! $data->content !!}
                        </div>
                    </div>
                    <!-- End single-post -->

                    <!-- Advertisement -->
                    <div class="advertisement">
                        <a href="single-post.html#"><img src="{{ asset('home/upload/addsense/620x80grey.jpg') }}"
                                alt=""></a>
                    </div>
                    <!-- End Advertisement -->

                    <!-- Posts-block -->
                    <div class="posts-block featured-box">

                        <div class="owl-wrapper">
                            <div class="owl-carousel owl-theme" data-num="3" style="opacity: 1; display: block;">

                                <div class="owl-wrapper-outer">
                                    <div class="owl-wrapper"
                                        style="width: 2530px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);">

                                        <div class="owl-item" style="width: 253px;">
                                            <div class="item">
                                                <div class="news-post standart-post">
                                                    <div class="post-image">
                                                        <a href="">
                                                            <img src="{{ asset('home/upload/blog/s25.jpg') }}"
                                                                alt="">
                                                        </a>
                                                        <a href="single-post.html#"
                                                            class="category category-world">world</a>
                                                    </div>
                                                    <h2><a href="">Travelling is part of our life</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="lnr lnr-user"></i><a href="#">
                                                                Renata da Silva
                                                            </a>
                                                        </li>
                                                        {{-- <li><a href="single-post.html#"><i class="lnr lnr-book"></i><span>23
                                                                    comments</span></a></li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 253px;">
                                            <div class="item">
                                                <div class="news-post standart-post">
                                                    <div class="post-image">
                                                        <a href="#">
                                                            <img src="{{ asset('home/upload/blog/s26.jpg') }}"
                                                                alt="">
                                                        </a>
                                                        <a href="single-post.html#" class="category category-food">food</a>
                                                    </div>
                                                    <h2><a href="">{{ $data->title }}</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="lnr lnr-user"></i><a href="single-post.html#">John
                                                                Doe</a></li>
                                                        {{-- <li><a href="single-post.html#"><i class="lnr lnr-book"></i><span>23
                                                                    comments</span></a>
                                                        </li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 253px;">
                                            <div class="item">
                                                <div class="news-post standart-post">
                                                    <div class="post-image">
                                                        <a href="https://nunforest.com/minberi-mag/single-post">
                                                            <img src="upload/blog/s27.jpg" alt="">
                                                        </a>
                                                        <a href="single-post.html#" class="category">Politics</a>
                                                    </div>
                                                    <h2><a href="single-post.html">New alternatives are more productive</a>
                                                    </h2>
                                                    <ul class="post-tags">
                                                        <li><i class="lnr lnr-user"></i>by <a href="single-post.html#">John
                                                                Doe</a></li>
                                                        <li><a href="single-post.html#"><i class="lnr lnr-book"></i><span>23
                                                                    comments</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 253px;">
                                            <div class="item">
                                                <div class="news-post standart-post">
                                                    <div class="post-image">
                                                        <a href="https://nunforest.com/minberi-mag/single-post">
                                                            <img src="upload/blog/s28.jpg" alt="">
                                                        </a>
                                                        <a href="single-post.html#"
                                                            class="category category-travel">Travel</a>
                                                    </div>
                                                    <h2><a href="">Visiting antic countries is John Doe
                                                            hobby.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="lnr lnr-user"></i>by <a
                                                                href="single-post.html#">John Doe</a></li>
                                                        <li><a href="single-post.html#"><i
                                                                    class="lnr lnr-book"></i><span>23 comments</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-controls clickable">
                                    <div class="owl-pagination">
                                        <div class="owl-page active"><span class=""></span></div>
                                        <div class="owl-page"><span class=""></span></div>
                                    </div>
                                    <div class="owl-buttons">
                                        <div class="owl-prev"></div>
                                        <div class="owl-next"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Posts-block -->

                    <!-- comment area box -->

                    <!-- End comment area box -->

                    <!-- contact form box -->

                    <!-- End contact form box -->

                </div>

                <div class="col-lg-4 sidebar-sticky"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                    <!-- Sidebar -->
                    <div class="sidebar theiaStickySidebar">
                        <div class="search-widget widget">
                            <form>
                                <input type="search" placeholder="Buscar..." />
                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="widget social-widget">
                            <h1>Permaneça conectado</h1>
                            <p>Quer ser informado sempre com nossas últimas novidades?</p>
                            <ul class="social-share">
                                <li>
                                    <a href="#" class="rss">
                                        <i class="fa fa-rss"></i>
                                        <span>345</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                        <span>3,460</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                        <span>5,600</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="google">
                                        <i class="fa fa-google-plus"></i>
                                        <span>659</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget news-widget">
                            <h1>HOJE EM DESTAQUE</h1>
                            <ul class="small-posts">
                                @foreach ($random as $item)
                                    <li>
                                        <a href="{{ route('home.pages.view', [$item->slug]) }}">
                                            <img src="{{ asset('upload/noticias/' . $item->img) }}" alt="">
                                        </a>
                                        <div class="post-cont">
                                            <h2><a href="{{ route('home.pages.view', [$item->slug]) }}">{{ $item->title }}</a></h2>
                                            {{-- <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="index.html#">Author</a></li>
                                            </ul> --}}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="advertisement">
                            <a href="#">
                                <img src="{{ asset('home/upload/addsense/300x250.jpg') }}" alt="">
                            </a>
                        </div>


                        <div class="widget tags-widget">
                            <h1>Tags</h1>
                            <ul class="tags-list">
                                @foreach ($categorias as $item)
                                    <li><a href="#">{{ $item->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>

                    </div>

                </div>
            </div>

            <!-- End Advertisement -->

            <!-- more from news box -->
            <div class="more-from-news">
                <h1>Weekly Top News</h1>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s1.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s3.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s6.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s8.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s9.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s10.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s12.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s15.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s16.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s18.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s23.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="https://nunforest.com/minberi-mag/single-post">
                                    <img src="upload/blog/s24.jpg" alt="">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end more from news box -->
        </div>
    </section>
@endsection
