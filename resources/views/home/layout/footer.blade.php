    <!-- footer
       ================================================== -->
    <footer>
        <div class="container">

            <div class="up-footer">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget text-widget">
                            <h1>
                                <a href="?">
                                    <img src="{{ asset('home/images/logo.png') }}" width="100" alt=""></a>
                            </h1>
                            <p>
                                O diário de notícias na internet trazendo notícias em geral.
                            </p>
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
                                        <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                            <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                style="width: 100%; height: 80px;">
                                        </a>
                                        <div class="post-cont">
                                            <h2><a
                                                    href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                                            </h2>
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
                            <h1>NOTÍCIA EM DESTAQUE</h1>
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="{{ route('home.pages.noticias.view', [$destaque->slug]) }}">
                                        <img src="{{ asset('upload/noticias/' . $destaque->img) }}"
                                            style="width: 100%; height: 120px;" alt="">
                                    </a>
                                    <a href="#"
                                        class="category category-travel">{{ $destaque->categoria->name }}</a>
                                </div>
                                <h2><a
                                        href="{{ route('home.pages.noticias.view', [$destaque->slug]) }}">{{ $destaque->title }}</a>
                                </h2>
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

    <!-- Back to Top -->
    <a href="" data-toggle="modal" data-target="#modalExemplo" class="back-to-top">
        {{-- divulgar --}}
        <img src="{{ asset('home/images/avatar.png') }}" style="width: 70px" class="divulgar" alt="">
    </a>
    <!-- End footer -->
    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="z-index: 9999999">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anuncie aqui! Cadastre-se</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('home.pages.register.store') }}" method="post">
                    <div class="modal-body">
                      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
