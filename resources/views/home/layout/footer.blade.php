    <!-- footer
       ================================================== -->
    <footer>
        <div class="container">

            <div class="up-footer">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget text-widget">
                            <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <ul class="social-icons">
                                <li><a class="facebook" href="index.html#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google" href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="index.html#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="instagram" href="index.html#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget popular-widget">
                            <h1>NOTÍCIAS POPULARES</h1>
                            <ul class="small-posts">
                                @foreach ($noticiasrodape as $item)
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                style="width: 100%; height: 80px;">
                                        </a>
                                        <div class="post-cont">
                                            <h2><a href="">{{ $item->title }}</a></h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i><a href="index.html#">Renata da
                                                        Silva</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget featured-widget">
                            <h1>POSTS EM DESTAQUE</h1>
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="">
                                        <img src="{{ asset('home/upload/blog/s28.jpg') }}" alt="">
                                    </a>
                                    <a href="#" class="category category-travel">asdsa</a>
                                </div>
                                <h2><a href="">Visiting antic countries is John Doe hobby.</a></h2>
                                <ul class="post-tags">
                                    <li><i class="lnr lnr-user"></i><a href="#">Renata da Silva</a></li>
                                    {{-- <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget tags-widget">
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

            <div class="down-footer">
                <ul class="list-footer">
                    <li><a href="?">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li>
                        <a href="privacy-policy.html">
                            Política de Privacidade
                        </a>
                    </li>
                    <li><a href="#">Contatos</a></li>
                </ul>
                <p>&copy; Copyright Destaque Noticias - {{ date('Y') }}<a href="#" class="go-top"><i
                            class="fa fa-caret-up" aria-hidden="true"></i></a></p>
            </div>

        </div>
    </footer>
    <!-- End footer -->
