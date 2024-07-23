 <!-- Header
      ================================================== -->
 <header class="clearfix">

     <div class="top-line">
         <div class="container">
             <div class="row">
                 <div class="col-md-8 col-sm-9">
                     <ul class="info-list">
                         <li>
                             <span class="live-time"><i class="fa fa-calendar-o"></i>
                                 {{-- /* Mostra: vrijdag 22 december 1978 */ --}}
                                 {{ date('d/m/Y') }}
                             </span>
                         </li>
                         <li>
                             <a href="about.html">Sobre</a>
                         </li>
                         <li>
                             <a href="">Contatos</a>
                         </li>
                         <li>
                             <a href="{{ route('login') }}">Login</a>
                         </li>
                     </ul>
                 </div>
                 <div class="col-md-4 col-sm-3">
                     <ul class="social-icons">
                         <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                         <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <div class="header-banner-place">
         <div class="container">
             <a class="navbar-brand" href="/">
                 <img src="{{ asset('home/images/logo.png') }}" width="200" alt="">
             </a>

             <div class="advertisement">
                 <a href="#"><img src="{{ asset('home/upload/addsense/620x80.jpg') }}" alt=""></a>
             </div>
         </div>
     </div>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="/">Home</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link world" href="#">Brasil <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <ul class="filter-list">
                                     <li><a href="#">Vizualizar todas</a></li>
                                 </ul>
                                 <div class="row">
                                     @foreach ($brasil as $item)
                                         <div class="col-lg-3 col-md-6">
                                             <div class="news-post standart-post">
                                                 <div class="post-image">
                                                     <a href="{{ route('home.pages.view', [$item->slug]) }}">
                                                         <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                             alt="" style="height: 150px;">
                                                     </a>
                                                     <a href="{{ route('home.pages.view', [$item->slug]) }}"
                                                         class="category category-world">{{ $item->categoria->name }}</a>
                                                 </div>
                                                 <h2><a href="">{{ $item->title }}</a></h2>
                                                 <ul class="post-tags">
                                                     <li>
                                                         <i class="lnr lnr-user"></i>
                                                         <a href="#">Renata da Silva</a>
                                                     </li>
                                                     {{-- <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                                 comments</span></a></li> --}}
                                                 </ul>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link sport" href="#">Esporte <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <ul class="filter-list">
                                     <li><a href="#">Visualizar todas</a></li>
                                 </ul>
                                 <div class="row">
                                     @foreach ($esporte as $item)
                                         <div class="col-lg-3 col-md-6">
                                             <div class="news-post standart-post">
                                                 <div class="post-image" style="height: 100">
                                                     <a href="">
                                                         <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                             alt="" style="width: 100%;" height="150px">
                                                     </a>
                                                     <a href="#"
                                                         class="category category-sport">{{ $item->categoria->name }}</a>
                                                 </div>
                                                 <h2><a
                                                         href="{{ route('home.pages.view', [$item->slug]) }}">{{ $item->title }}</a>
                                                 </h2>
                                                 <ul class="post-tags">
                                                     <li><i class="lnr lnr-user"></i>
                                                         <a href="#">
                                                             Renata da Silva
                                                         </a>
                                                     </li>
                                                     {{-- <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                                 comments</span></a></li> --}}
                                                 </ul>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link tech" href="#">Maranhão <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <div class="row">
                                     @foreach ($maranhao as $item)
                                         <div class="col-lg-3 col-md-6">
                                             <div class="news-post standart-post">
                                                 <div class="post-image">
                                                     <a href="">
                                                         <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                             alt="" style="height: 150px;">
                                                     </a>
                                                     <a href="#"
                                                         class="category category-tech">{{ $item->categoria->name }}</a>
                                                 </div>
                                                 <h2><a href="#">{{ $item->title }}</a></h2>
                                                 <ul class="post-tags">
                                                     <li><i class="lnr lnr-user"></i><a href="#">Renata
                                                             Silva</a>
                                                     </li>
                                                     {{-- <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                            comments</span></a></li> --}}
                                                 </ul>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link tech" href="#">Classificados <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <div class="row">
                                     @foreach ($classificados as $item)
                                         <div class="col-lg-3 col-md-6">
                                             <div class="news-post standart-post">
                                                 <div class="post-image">
                                                     <a href="https://nunforest.com/minberi-mag/single-post">
                                                         <img src="{{ asset('home/upload/blog/s37.jpg') }}"
                                                             alt="">
                                                     </a>
                                                     <a href="#" class="category category-tech">Classificado</a>
                                                 </div>
                                                 <h2><a href="single-post.html">{{ $item->title }}</a></h2>
                                                 <ul class="post-tags">
                                                     <li>
                                                         <i class="lnr lnr-user"></i>
                                                         <a href="#">Renata da Silva</a>
                                                     </li>
                                                 </ul>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                     </li>

                     <li class="nav-item drop-link">
                         <a class="nav-link food" href="#">Cidade <i class="fa fa-angle-down"
                                 aria-hidden="true"></i></a>
                         <ul class="dropdown">
                             @foreach ($cidades as $item)
                                 <li><a href="author-list.html">{{ $item->name }}</a></li>
                             @endforeach
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link fashion" href="">Denuncia</a>
                     </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                     <button class="btn btn-primary my-2 my-sm-0" type="submit"><i
                             class="fa fa-search"></i></button>
                 </form>
             </div>
         </div>
     </nav>
 </header>
 <!-- End Header -->
