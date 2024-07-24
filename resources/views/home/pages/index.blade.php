@extends('home.layout.app')
@section('title', 'Home')

@section('content')
    <!-- wide-news-heading
                                                                                                                                                       ================================================== -->
    <div class="wide-news-heading">

        <div class="item main-news">

            <div class="flexslider">
                <ul class="slides">
                    @foreach ($noticiaslider as $item)
                        <li>
                            <div class="news-post large-image-post">
                                <img src="{{ asset('upload/noticias/' . $item->img) }}" alt="">
                                <div class="hover-box">
                                    <a href="{{ route('home.pages.view', [$item->slug]) }}"
                                        class="category category">{{ $item->categoria->name }}</a>
                                    <h2><a href="{{ route('home.pages.view', [$item->slug]) }}">{{ $item->title }}</a></h2>
                                    <ul class="post-tags">
                                        <li>
                                            <i class="lnr lnr-user"></i>
                                            <a href="#">Renata da Silva</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
        @foreach ($noticias6 as $item)
            <div class="item">
                <div class="news-post image-post">
                    <img src="{{ asset('upload/noticias/' . $item->img) }}" alt="">
                    <div class="hover-box">
                        <a href="{{ route('home.pages.view', [$item->slug]) }}"
                            class="category category-world">{{ $item->categoria->name }}</a>
                        <h2><a href="{{ route('home.pages.view', [$item->slug]) }}">{{ $item->title }}</h2>
                        <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i><a href="#">Renata da Silva</a></li>
                            {{-- <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- End wide-news-heading -->

    <!-- content-section
                                                                                                                                                       ================================================== -->
    <section id="content-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">

                    <!-- Posts-block -->
                    <div class="posts-block standard-box">
                        <div class="title-section">
                            <h1>ÚLTIMAS NOTÍCIAS <i class="lnr lnr-bookmark"></i></h1>
                        </div>

                        <div class="row">
                            @foreach ($noticias6 as $item)
                                <div class="col-sm-6">
                                    <div class="news-post standart-post">
                                        <div class="post-image">
                                            <a href="{{ route('home.pages.view', [$item->slug]) }}">
                                                <img src="{{ asset('/upload/noticias/' . $item->img) }}" alt=""
                                                    style="height: 200px">
                                            </a>
                                            <a href="#" class="category category-tech"
                                                style="background-color: #1866CF;">{{ $item->categoria->name }}</a>
                                        </div>
                                        <h2><a
                                                href="{{ route('home.pages.view', [$item->slug]) }}">{{ $item->title }}</a>
                                        </h2>
                                        <ul class="post-tags">
                                            <li>
                                                <i class="lnr lnr-user"></i>
                                                <a href="#">Renata da Silva</a>
                                            </li>
                                            </li>
                                            {{-- <li><i class="lnr lnr-eye"></i>872 Views</li> --}}
                                        </ul>
                                        <p>{{ $item->desc }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>


                    </div>
                    <!-- End Posts-block -->

                    <!-- Posts-block -->
                    <div class="posts-block featured-box">
                        <div class="title-section">
                            <h1>Veja também</h1>
                        </div>

                        <div class="owl-wrapper">
                            <div class="owl-carousel" data-num="3">
                                @foreach ($vejatambem as $item)
                                    <div class="item">
                                        <div class="news-post standart-post">
                                            <div class="post-image">
                                                <a href="{{ route('home.pages.view', [$item->slug]) }}">
                                                    <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                        style="height: 200px;" alt="">
                                                </a>
                                                <a href="#"
                                                    class="category category-fashion">{{ $item->categoria->name }}</a>
                                            </div>
                                            <h2><a
                                                    href="{{ route('home.pages.view', [$item->slug]) }}">{{ $item->title }}</a>
                                            </h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i><a href="#">Renata da Silva</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <!-- End Posts-block -->

                    <!-- Advertisement -->
                    <div class="advertisement">
                        <a href="#"><img src="{{ asset('upload/addsense/620x80grey.jpg') }}" alt=""></a>
                    </div>
                    <!-- End Advertisement -->

                    <!-- Posts-block -->
                    <div class="posts-block articles-box">
                        <div class="title-section">
                            <h1>Brasil</h1>
                        </div>
                        @foreach ($brasil as $item)
                            <div class="news-post article-post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-image">
                                            <a href="{{ route('home.pages.view', [$item->slug]) }}">
                                                <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                    style="height: 130px;" alt="">
                                            </a>
                                            <a class="category category-travel"
                                                href="#">{{ $item->categoria->name }}</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2>
                                            <a
                                                href="{{ route('home.pages.view', [$item->slug]) }}">{{ $item->title }}</a>
                                        </h2>
                                        <ul class="post-tags">
                                            <li><i class="lnr lnr-user"></i><a href="#">Renata da silva</a></li>

                                            <li><i class="lnr lnr-eye"></i>872 Visualizações</li>
                                        </ul>
                                        <p>{{ $item->desc }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        {{-- <ul class="pagination-list">
                            <li><a href="index.html#">Prev</a></li>
                            <li><a href="index.html#" class="active">1</a></li>
                            <li><a href="index.html#">2</a></li>
                            <li><a href="index.html#">3</a></li>
                            <li><a href="index.html#">...</a></li>
                            <li><a href="index.html#">6</a></li>
                            <li><a href="index.html#">Next</a></li>
                        </ul> --}}

                    </div>
                    <!-- End Posts-block -->

                </div>

                <div class="col-lg-4 sidebar-sticky">

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
                                    <a href="https://www.facebook.com/people/Destaque-noticias/100090408518901/?paipv=0&eav=AfZvcACXtmgqpggpj9DwDfdYMDREmTUKrwzLna6m9-hydLz1hRmy5UdNBM5d8fk3nxQ"
                                        class="facebook">
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
                                            <img src="{{ asset('upload/noticias/' . $item->img) }}" style="width: 100%; height: 80px;" alt="">
                                        </a>
                                        <div class="post-cont">
                                            <h2><a
                                                    href="{{ route('home.pages.view', [$item->slug]) }}">{{ $item->title }}</a>
                                            </h2>
                                            {{-- <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i>by <a href="index.html#">Author</a></li>
                                            </ul> --}}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="advertisement">
                            <a href="#"><img src="{{ asset('home/upload/addsense/300x250.jpg') }}"
                                    alt=""></a>
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

            <!-- Advertisement -->
            <div class="advertisement">
                <a href="#"><img src="{{ asset('home/upload/addsense/620x80grey.jpg') }}" alt=""></a>
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
    <!-- End content section -->


@endsection
