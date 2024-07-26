@extends('home.layout.app')
@section('title', 'Denuncie')

@section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="row" style="transform: none;">
                <div class="col-lg-8">

                    <!-- contact info box -->
                    <div class="contact-info-box">
                        <div class="title-section">
                            <h1><span>Denuncie</span></h1>
                        </div>
                    </div>
                    <!-- End contact info box -->

                    <!-- contact form box -->
                    <div class="contact-form-box">

                        <form id="contact-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name">Assunto*</label>
                                    <input id="name" name="name" type="text">
                                </div>
                            </div>
                            <label for="comment">Denuncia*</label>
                            <textarea id="comment" name="comment"></textarea>
                            <button type="submit" id="submit_contact">
                                <i class="fa fa-paper-plane"></i> Enviar denunia
                            </button>
                            <div id="msg" class="alert"></div>
                        </form>
                    </div>
                    <!-- End contact form box -->

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
                                        <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                            <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                style="width: 100%; height: 80px;" alt="">
                                        </a>
                                        <div class="post-cont">
                                            <h2><a
                                                    href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
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
                            <a href="#"><img src="{{ asset('home/upload/addsense/300x250.jpg') }}" alt=""></a>
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
                <a href="#"><img src="upload/addsense/620x80grey@2x.jpg" alt="" width="620"
                        height="80"></a>
            </div>
            <!-- End Advertisement -->

            <!-- more from news box -->
            <div class="more-from-news">
                <h1>Weekly Top News</h1>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s1@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s3@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s6@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s8@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s9@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s10@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s12@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s15@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s16@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s18@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s23@2x.jpg" alt="" width="150" height="94">
                                </a>
                            </div>
                            <h2><a href="single-post.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="news-post thumb-post">
                            <div class="post-image">
                                <a href="single-post">
                                    <img src="upload/blog/s24@2x.jpg" alt="" width="150" height="94">
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
